@extends('Portal.host-views.host-layout')

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
              <h2 class="card-title">Feed Back</h2>
              <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-success">Add New</span>
            
            </div>
            <div class="modal fade" id="modal-lg">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add FeedBack</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="Post" action="{{ url('addfeedback') }}">
                      @csrf
                      <div class="card-body">
                       

                         <div class="form-group">
                          <label for="exampleInputEmail1">FeedBack</label>
                          <textarea required name="description" rows="10" class="form-control" id="exampleInputEmail1" placeholder="Enter New password">
                          </textarea>
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

            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>User Name</th>
                  <th>Feedback</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @isset($feedbacks)
                @foreach ($feedbacks as $feedback )
                <tr style="font-weight: bold;text-transform:uppercase">
                  <td>{{ $feedback->id }}</td>
                  <td>{{ $username }}</td>
                  <td>{!! Str::limit($feedback->description, 100, ' ...') !!}</td>
                  <td><div class="btn-group">
                    <span  data-target="#modal-viewfeedback-{{ $feedback->id }}" data-toggle="modal" type="button" type="button" class="btn btn-success btn-sm">View</span>
                    <span  data-target="#modal-editfeedback-{{ $feedback->id }}" data-toggle="modal" type="button" type="button" class="btn btn-primary btn-sm">Edit</span>
                  
                    <a  class="btn btn-danger btn-sm" href="">Delete</a>
                    
                  </div> </td>
                  
                </tr>

                <div class="modal fade" id="modal-viewfeedback-{{ $feedback->id }}">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">FeedBack Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form >
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">FeedBack</label>
                            <textarea readonly name="description" rows="10" class="form-control" id="exampleInputEmail1" >
                              {{ $feedback->description }}
                            </textarea>
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

                <div class="modal fade" id="modal-editfeedback-{{ $feedback->id }}">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">FeedBack Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="{{ url('edit-feedback') }}" >
                          @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">FeedBack</label>
                            <textarea required name="description" rows="10" class="form-control" id="exampleInputEmail1" >
                              {{ $feedback->description }}
                            </textarea>
                            </div>
                            <input type="hidden" name="id" value="{{ $feedback->id }}">
                          
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





                @endforeach 
                @endisset
          

                      @empty($feedbacks)

                      <tr>

                        <td>Not Found</td>
                        <td>Not Found</td>
                        <td>Not Found</td>
                        <td>Not Found</td>

                      
                        
                      </tr>
                      @endempty


  
                </tbody>
                <tfoot>
                  
                <tr>
                  <th>ID</th>
                  <th>User Name</th>
                  <th>FeedBack</th>
                 
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
           
          </div>
        
        </div>
      </div>
    </section>
    
  </div>

  @endsection