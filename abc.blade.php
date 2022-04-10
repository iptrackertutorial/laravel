@extends('layout')
@section('content')  
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class='card'>
                <div class="card -header">
                <h3>ADD STUDENT WITH IMAGE
                <a href="{{url('students')}}" class="btn btn-primary float-end"> BACK</a>
                </h3>
                     

                </div>
                <div class="card-body">
                    <form action="" methode="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">student Name</label>
                            <input type="text" name="name" class="form-control">

                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <label for="">student Email</label>
                            <input type="email" name="email" class="form-control">

                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <label for="">student Address</label>
                            <input type="text"  name="address" class="form-control">

                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <label for="">student IMAGE</label>
                            <input type="file"  name="profile_image" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">SAVE </button>
                            

                        </div>


                </div>

            </div>

        </div>

    </div>

</div>
< 
@endsection