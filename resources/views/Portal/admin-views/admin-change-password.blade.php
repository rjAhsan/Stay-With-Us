@extends('Portal.admin-views.admin-layout')

@section('content')

@include('sweet::alert')
<div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
      
        <br>
        <br>
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h2 class="card-title">Change Password</h2>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="Post" action="{{url('/changeuserpassword')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Currnet Password</label>
                  <input type="text" required name="current_password" class="form-control" id="exampleInputEmail1" placeholder="Enter currnet password">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">New Password</label>
                  <input type="text" required name="new_password" class="form-control" id="exampleInputEmail1" placeholder="Enter New password">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Confrim Password</label>
                  <input type="text" required name="confrim_password" class="form-control" id="exampleInputEmail1" placeholder="Enter Confrim password">
                </div>
                
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        
        </div>
        
      </div>
    </section>
    
  </div>

  @endsection