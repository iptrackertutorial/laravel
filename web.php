<?php
use App\Http\Controllers\user;
 use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/login', function ()
 {
    return view('login');
});
 
  
Route::get('/list',[user::class,'list']);
Route::get('/create',[user::class,'create']);
Route::get('/about',[user::class,'about']);
Route::get('/aboutsubmit',[user::class,'aboutsubmit']);
 
Route::get('/contact',[user::class,'contact']);
Route::get('/feedback',[user::class,'feedback']);
Route::post('/feedbacksubmit',[user::class,'feedbacksubmit']);
Route::get('/contactsubmit',[user::class,'contactsubmit']);
Route::get('/loginsubmit',[user::class,'loginsubmit']);
 
Route::get('/createsubmit',[user::class,'createsubmit']);

Route::get('/upload',[user::class,'upload']);
Route::get('/students',[user::class,'upload']);
//Route::get('/students',[user::class,'insert']);
Route::get('/add-student',[user::class,'abc']);
Route::get('/students',[user::class,'abc']);
Route::get('/add-student',[user::class,'store']);




