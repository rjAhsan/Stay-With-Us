@extends('Portal.host-views.host-layout')

@section('content')

@include('sweet::alert')
<div class="content-wrapper">
  @isset($vehicles)
    <section class="content">
    
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Vehicels Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>

          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Vehicels</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{ url('addvehicle') }}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" required name="Name" class="form-control" id="exampleInputEmail1" placeholder="name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        <input type="text" required name="Model" class="form-control" id="exampleInputEmail1" placeholder="Model">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Air-Conditinor</label>
                        
                        <select required class="form-control" name="Type" id="">
                          <option value="AC">AC</option>
                          <option value="NON-AC">Non-AC</option>
                        </select>
                        
                      </div>

                     
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Terms&Condations</label>
                       <textarea required name="terms" class="form-control" id=""  rows="3" placeholder="Condations"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Fair</label>
                        <input type="text" required name="fair" class="form-control" id="exampleInputEmail1" placeholder="Fair">
                      </div>

                      

                      <div class="form-group">
                        <label for="exampleInputEmail1">Upload Image</label>
                        <input type="file" required name="img_url" class="form-control" id="exampleInputEmail1" placeholder="Price">
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
                <th> Name</th>
                <th>Model</th>
                <th>Type</th>
                <th>Terms</th>
                <th>Fair</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              

            



              
              @foreach ($vehicles as $vehicle )
              <tr style="font-weight: bold;text-transform:uppercase">
                <td>{{ $vehicle->id}}</td> 
                <td>{{ $vehicle->Name}}</td>
                <td>{{ $vehicle->Model }}</td>
                <td>{{ $vehicle->Type }}</td>
                <td>{{ $vehicle->terms }}</td>
                <td>{{ $vehicle->fair }}</td>
                <td>{{ $vehicle->img_url }}</td>
              
               
                
                
                <td><div class="btn-group">
                  <span  data-target="#modal-viewvehicle-{{ $vehicle->id }}" data-toggle="modal" type="button" type="button" class="btn btn-success btn-sm">View</span>
                  <span  data-target="#modal-editvehicle-{{ $vehicle->id }}" data-toggle="modal" type="button" type="button" class="btn btn-primary btn-sm">Edit</span>
                
                  <a  class="btn btn-danger btn-sm" href="">Delete</a>
                  
                </div> </td>
                
              </tr>

              <div class="modal fade" id="modal-viewvehicle-{{ $vehicle->id }}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Vehicel Details</h4>
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
                            <input type="text" readonly name="Name" class="form-control" id="exampleInputEmail1" value="{{ $vehicle->Name }}">
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Model</label>
                            <input type="text" readonly name="Model" class="form-control" id="exampleInputEmail1" value="{{ $vehicle->Model }}">
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Air-Conditinor</label>
                            
                            <select readonly class="form-control" name="Type" id="">
                              <option >{{ $vehicle->Type }}</option>
                              
                            </select>
                            
                          </div>
    
                         
      
                          <div class="form-group">
                            <label for="exampleInputEmail1">Terms&Condations</label>
                           <textarea readonly name="terms" class="form-control" id=""  rows="3" value="">

                            {{ $vehicle->terms }}
                           </textarea>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Fair</label>
                            <input type="text" readonly name="fair" class="form-control" id="exampleInputEmail1" value="{{ $vehicle->fair }}">
                          </div>
    
                          
    
                          {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Upload Image</label>
                            <input type="file" readonly name="img_url" class="form-control" id="exampleInputEmail1" value="Price">
                          </div> --}}
      
                         
                          
                        </div>
                        <!-- /.card-body -->
                        {{-- <button style="float: right" type="submit" class="btn btn-primary">Save </button>
                         --}}
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

              <div class="modal fade" id="modal-editvehicle-{{ $vehicle->id }}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">vehicle Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ ('edit-vehicle') }}" method="POST">
                        @csrf
                        <div class="card-body">

                          <input type="hidden" name="id"  value="{{  $vehicle->id }}">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" required name="Name" class="form-control" id="exampleInputEmail1" value="{{ $vehicle->Name }}">
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Model</label>
                            <input type="text" required name="Model" class="form-control" id="exampleInputEmail1" value="{{ $vehicle->Model }}">
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Air-Conditinor</label>
                            
                            <select required class="form-control" name="Type" id="">
                              <option >{{ $vehicle->Type }}</option>
                              
                            </select>
                            
                          </div>
    
                         
      
                          <div class="form-group">
                            <label for="exampleInputEmail1">Terms&Condations</label>
                           <textarea required  name="terms" class="form-control" id=""  rows="3" value="">

                            {{ $vehicle->terms }}
                           </textarea>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Fair</label>
                            <input type="text" required name="fair" class="form-control" id="exampleInputEmail1" value="{{ $vehicle->fair }}">
                          </div>
    
                          
    
                          {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Upload Image</label>
                            <input type="file" readonly name="img_url" class="form-control" id="exampleInputEmail1" value="Price">
                          </div> --}}
      
                         
                          
                        </div>
                        <!-- /.card-body -->
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


             


              
             
              </tbody>
              <tfoot>
                
              <tr>
                <th>ID</th>
                <th> Name</th>
                <th>Model</th>
                <th>Type</th>
                <th>Terms</th>
                <th>Fair</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      
    </section>
  @endisset

    @empty($vehicles)
    <section class="content">
      
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Vehicels Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>
  
          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Vehicle</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{ url('addvehicle') }}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" required name="Name" class="form-control" id="exampleInputEmail1" placeholder="name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        <input type="text" required name="Model" class="form-control" id="exampleInputEmail1" placeholder="Model">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Air-Conditinor</label>
                        
                        <select required class="form-control" name="Type" id="">
                          <option value="AC">AC</option>
                          <option value="NON-AC">Non-AC</option>
                        </select>
                        
                      </div>

                     
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Terms&Condations</label>
                       <textarea required name="terms" class="form-control" id=""  rows="3" placeholder="Condations"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Fair</label>
                        <input type="text" required name="fair" class="form-control" id="exampleInputEmail1" placeholder="Fair">
                      </div>

                      

                      <div class="form-group">
                        <label for="exampleInputEmail1">Upload Image</label>
                        <input type="file" required name="img_url" class="form-control" id="exampleInputEmail1" placeholder="Price">
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
                <th> Name</th>
                <th>Model</th>
                <th>Type</th>
                <th>Terms</th>
                <th>Fair</th>
                <th>Image</th>
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
                <th> Name</th>
                <th>Model</th>
                <th>Type</th>
                <th>Terms</th>
                <th>Fair</th>
                <th>Image</th>
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