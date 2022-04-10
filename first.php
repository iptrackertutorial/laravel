<?php

namespace App\Http\Controllers;
use App\Models\vipin;

use Illuminate\Http\Request;


class first extends Controller
{
    public function contactsubmit(Request $req)
    {
        $user=new vipin;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $result=$user->save();
        if($rsult){
            return redirect('/');
        }

    } 
}
