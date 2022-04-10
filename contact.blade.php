@extends('layout')
@section('content')  
<h1>Contact Us</h1>
<form action="/contactsubmit" methode="POST">
@csrf 
<div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control"   placeholder="Enter name" name="name" id="name">
  </div>
  <br>   
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control"   placeholder="Enter email" name="email" id="email">
  </div>
  <br>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"   placeholder="Enter password" name="password"  id="pwd"  >
  </div>
  <br>
   
  <button type="submit" class="btn btn-primary">Submit</button>
   
                
</form>
@endsection

