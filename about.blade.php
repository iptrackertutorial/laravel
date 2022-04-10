
@extends('layout')
@section('content')  
<h1>About Page</h1>
<form action="/aboutsubmit" methode="POST">
@csrf 
<div class="form-group">
     
    <img src="/pic.jpg" alt="about" height="100px"; width="100px">
    </div>
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
    <label for="address">Address:</label>
    <input type="address" class="form-control"   placeholder="Enter address" name="address" id="address">
  </div>
  

   
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection