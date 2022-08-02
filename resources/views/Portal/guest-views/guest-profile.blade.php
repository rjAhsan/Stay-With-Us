@extends('Portal.guest-views.guest-layout')

@section('content')

@include('sweet::alert')
<div class="content-wrapper">
   @isset($user)
   <section class="content">
    <div class="container-fulid">
      <div class="card card-primary">
        <div class="card-header">
          <h3  class="card-title">About Me</h3>
          <span style="float: right" data-target="#modal-proile" data-toggle="modal" type="button" type="button" class="btn btn-success ">Edit</span>
                
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 offset-md-2">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{ url('Portal/views/dist/img/user4-128x128.jpg') }}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $user->name }} {{ $user->last_name }}</h3>

             

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="float-right">{{ $user->phone }}</a>
                </li>
                <li class="list-group-item">
                  <b>Status</b> <a class="float-right">{{ $user->active?'Active':'Block' }}</a>
                </li>
               
                <li class="list-group-item">
                  <b>Address</b> <a class="float-right">{{ $user->address }}</a>
                </li>



              </ul>

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
        
        </div>
        <div class="modal fade" id="modal-proile">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">User Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{ url('edit-user/') }}">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      
                      <input type="hidden"  readonly name="id" class="form-control" id="exampleInputEmail1" value="{{ $user->id }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" required  name="name" class="form-control" id="exampleInputEmail1" value="{{ $user->name }}">
                    </div>

                   <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" required  name="last_name" class="form-control" id="exampleInputEmail1" value="{{ $user->last_name }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" required name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }} ">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone No</label>
                      <input type="text" required  name="phone" class="form-control" id="exampleInputEmail1" value="{{ $user->phone }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text" required  name="address" class="form-control" id="exampleInputEmail1" value="{{ $user->address }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Profile Image</label>
                      <input type="file"   name="img_url" class="form-control" id="exampleInputEmail1" >
                    </div>
    
                    
                  </div>
                  <button style="float: right" type="submit" class="btn btn-primary">Update </button>
                    
                </form>
              </div>
              <div  class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>



    </div>
  </section>
   @endisset
 
    
    @empty($user)
    <section class="content">
      <h4>Nothing Found</h4>
    </section>
    @endempty


  </div>

  @endsection