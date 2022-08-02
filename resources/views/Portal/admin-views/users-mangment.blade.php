@extends('Portal.admin-views.admin-layout')

@section('content')

@include('sweet::alert')
<div class="content-wrapper">
  @isset($users)
    <section class="content">
      {{ $users }}
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Users Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>

          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add New User</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{url('/registeruser')}}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" required name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" required name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" required name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone No</label>
                        <input type="text" required name="phone" class="form-control" id="exampleInputEmail1" placeholder="phone">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" required name="address" class="form-control" id="exampleInputEmail1" placeholder="Address">
                      </div>
      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" required name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter New password">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Role</label>
                        <select name="role_id" requried class="form-control">
                          <option value="1">Host</option>
                          <option value="2">Guest</option>
                          <option value="3">Admin</option>
                          
                        </select>
                      
                      </div>
                      
                      
                    </div>
                    <!-- /.card-body -->
                    <button style="float: right" type="submit" class="btn btn-primary">Save </button>
                    
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
         

         
          
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th> 
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              

             @foreach ($users as $user )
              <tr style="font-weight: bold;text-transform:uppercase">
                <td>{{ $user->id}}</td> 
                <td>{{ $user->name}}</td>
                <td>{{ $user->last_name }}</td>
                <td style="text-transform:lowercase">{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{!! Str::limit($user->address, 50, ' ...') !!}</td>
                <td>{{ $user->role->name }}</td>
                <td>{{ $user->active? 'Active' : 'DeActive' }}</td>
                <td><div class="btn-group">
                  <span  data-target="#modal-viewuser-{{ $user->id }}" data-toggle="modal" type="button" type="button" class="btn btn-primary btn-sm">View</span>
                  
                  @if( $user->active )
                  <a  class="btn btn-danger btn-sm" href="{{ url('block-user/'.$user->id ) }}">Block</a>
                   
                  @else
                  <a  class="btn btn-success btn-sm" href="{{ url('block-user/'.$user->id ) }}">Active</a>
                   @endif
                </div> </td>
                
              </tr>
              <div class="modal fade" id="modal-viewuser-{{ $user->id }}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">User Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form >
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" readonly name="name" class="form-control" id="exampleInputEmail1" value="{{ $user->name }}">
                          </div>
      
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" readonly name="last_name" class="form-control" id="exampleInputEmail1" value="{{ $user->last_name }}">
                          </div>
      
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" readonly name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }} ">
                          </div>
      
                          <div class="form-group">
                            <label for="exampleInputEmail1">Phone No</label>
                            <input type="text" readonly name="phone" class="form-control" id="exampleInputEmail1" value="{{ $user->phone }}">
                          </div>
      
                          <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" readonly name="address" class="form-control" id="exampleInputEmail1" value="{{ $user->address }}">
                          </div>
          
                         
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <select   class="form-control">
                              <option >{{ $user->role->name }}</option>
                              
                              
                            </select>
                          
                          </div>
                          
                          
                        </div>
                      
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



              @endforeach
             


              
             
              </tbody>
              <tfoot>
                
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      {{ $users->links() }}
    </section>
  @endisset

    @empty($users)
    <section class="content">
      
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Users Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>
  
          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add New User</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{url('/registeruser')}}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" readonly name="name" class="form-control" id="exampleInputEmail1" value="Enter Name">
                      </div>
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" required name="last_name" class="form-control" id="exampleInputEmail1" value="Last Name">
                      </div>
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" required name="email" class="form-control" id="exampleInputEmail1" value="Email ">
                      </div>
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone No</label>
                        <input type="text" required name="phone" class="form-control" id="exampleInputEmail1" value="phone">
                      </div>
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" required name="address" class="form-control" id="exampleInputEmail1" value="Address">
                      </div>
      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" required name="password" class="form-control" id="exampleInputEmail1" value="Enter New password">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Role</label>
                        <select name="role_id" requried class="form-control">
                          <option value="1">Host</option>
                          <option value="2">Guest</option>
                          <option value="3">Admin</option>
                          
                        </select>
                      
                      </div>
                      
                      
                    </div>
                    <!-- /.card-body -->
                    <button style="float: right" type="submit" class="btn btn-primary">Save </button>
                    
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
         
  
         
          
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              
  
              <tr>
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
                
              </tr>
  
  
  
              
        
            
              
             
  
  
              
             
              </tbody>
              <tfoot>
                
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
     
    </section>    
    @endempty
  


  </div>

  @endsection