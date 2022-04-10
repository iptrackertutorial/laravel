<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\arjuns;
use App\Models\feeds;
use App\models\Student;
use App\Models\abouts;
 

class user extends Controller
{
    function list(){
        $user=users::all();
        return view('userlist',['user'=>$user]);
    }
    
    function create(){
        return view('create');
    }
    function contact(){
        return view('contact');
    }
    function feedback(){
        return view('feedback');
    }
    function loginsubmit( Request  $req){
       // print_r($req->input());
       return users::select('name')->where(
           [
               ['email','=',$req->email],
               ['password','=',$req->password]

           ]
       )->get();
       

    }
    public function createsubmit(Request $req)
    {
        $user=new users;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->phone=$req->phone;
        $user->password=$req->password;

        $result=$user->save();

        if($result){
            return redirect('/create');
        }

    }
    public function feedbacksubmit(Request $req)
    {
        $user=new feeds;
        $user->setConnection("mysql3");
        $user->name=$req->name;
        $user->email=$req->email;
        $user->country=$req->country;
        $user->subject=$req->subject;
        $result=$user->save();
        if($result){
            return redirect('/feedback');
        }

    }
    public function upload()
    {    
        $student=Student::all();
        return view('upload',compact('student'));
    }  
    public function abc(){
        return view('abc');
    }
    public function store(Request $request)
    {
        $student=new Student;
        $student->name=$request->input('name');
        $student->email=$request->input('email');
        $student->address=$request->input('address');
        $student->profile_image=$request->input('profile_image');

        if($request->hasfile('profile_image'))
        {
            $file=$request->file('profile_image');
            //return Storage::putFile('public/akshat',$request->file('profile_image'));
            $extension=$file->getClientOriginalExtension();
           $destination = app_path() . '/akshat/';
            $filename=time(). '.'.$extension;
             
           $file->move( $destination ,$filename);
           //return Storage::putFile($destination,$request->file('profile_image'));
            $student->profile_image=$filename;
        }
        $student->save();
         

    
        return view ("abc");
    }
    public function about(){
        return view('about');
    }
    public function aboutsubmit(Request $req)
    {
        $user=new abouts;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
    

        $result=$user->save();

        if($result){
            return redirect('/login');
        }

    }
    
}
