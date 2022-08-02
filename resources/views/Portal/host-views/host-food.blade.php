@extends('Portal.host-views.host-layout')

@section('content')

@include('sweet::alert')
<div class="content-wrapper">
  @isset($meals)
    <section class="content">
    
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Food Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>

          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Meal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{ url('addmeal') }}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meal Catageroy</label>
                        <input type="text" required name="catageroy" class="form-control" id="exampleInputEmail1" placeholder="Enter currnet password">
                      </div>
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Breakfast</label>
                       <textarea required name="breakfast" class="form-control" id=""  rows="3" placeholder="BreakFfast Items List"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Lunch</label>
                       <textarea required name="lunch" class="form-control" id=""  rows="3" placeholder="Lucnh Items List"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Dinner</label>
                       <textarea required name="dinner" class="form-control" id=""  rows="3" placeholder="Dinner Items List"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" required name="price" class="form-control" id="exampleInputEmail1" placeholder="Price">
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
                <th>Catageroy Name</th>
                <th>BreakFast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              

            



              
              @foreach ($meals as $meal )
              <tr style="font-weight: bold;text-transform:uppercase">
                <td>{{ $meal->id}}</td> 
                <td>{{ $meal->catageroy}}</td>
                <td>{{ $meal->breakfast }}</td>
                <td>{{ $meal->lunch }}</td>
                <td>{{ $meal->dinner }}</td>
                <td>{{ $meal->price }}</td>
                
                <td><div class="btn-group">
                  <span  data-target="#modal-viewmeal-{{ $meal->id }}" data-toggle="modal" type="button" type="button" class="btn btn-success btn-sm">View</span>
                  <span  data-target="#modal-editmeal-{{ $meal->id }}" data-toggle="modal" type="button" type="button" class="btn btn-primary btn-sm">Edit</span>
                
                  <a  class="btn btn-danger btn-sm" href="">Delete</a>
                  
                </div> </td>
                
              </tr>

              <div class="modal fade" id="modal-viewmeal-{{ $meal->id }}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Meal Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form >
                        @csrf
                        <form >
                          @csrf
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Meal Catageroy</label>
                              <input type="text" readonly name="catageroy" class="form-control" id="exampleInputEmail1" value="{{ $meal->catageroy }}">
                            </div>
        
                            <div class="form-group">
                              <label for="exampleInputEmail1">Breakfast</label>
                             <textarea readonly name="breakfast" class="form-control" id=""  rows="3" value="BreakFfast Items List">
                              {{ $meal->breakfast }}
                             </textarea>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputEmail1">Lunch</label>
                             <textarea readonly name="lunch" class="form-control" id=""  rows="3" value="Lucnh Items List">
                              {{ $meal->lunch }}
                             </textarea>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputEmail1">Dinner</label>
                             <textarea readonly name="dinner" class="form-control" id=""  rows="3" value="Dinner Items List">
                              {{ $meal->dinner }}
                             </textarea>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputEmail1">Price</label>
                              <input type="text" readonly name="price" class="form-control" id="exampleInputEmail1" value="{{ $meal->price }}">
                            </div>
        
                           
                            
                          </div>
                          <!-- /.card-body -->
                         
                        </form>
                      
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

              <div class="modal fade" id="modal-editmeal-{{ $meal->id }}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Meal Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{ ('edit-meal') }}">
                        
                          @csrf
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Meal Catageroy</label>
                              <input type="text" required  name="catageroy" class="form-control" id="exampleInputEmail1" value="{{ $meal->catageroy }}">
                            </div>
        
                            <div class="form-group">
                              <label for="exampleInputEmail1">Breakfast</label>
                             <textarea required name="breakfast" class="form-control" id=""  rows="3" value="BreakFfast Items List">
                              {{ $meal->breakfast }}
                             </textarea>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputEmail1">Lunch</label>
                             <textarea required name="lunch" class="form-control" id=""  rows="3" value="Lucnh Items List">
                              {{ $meal->lunch }}
                             </textarea>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputEmail1">Dinner</label>
                             <textarea required name="dinner" class="form-control" id=""  rows="3" value="Dinner Items List">
                              {{ $meal->dinner }}
                             </textarea>
                            </div>
      
                            <div class="form-group">
                              <label for="exampleInputEmail1">Price</label>
                              <input type="text" required name="price" class="form-control" id="exampleInputEmail1" value="{{ $meal->price }}">
                            </div>
        
                            <input type="hidden" name="id" value="{{ $meal->id }}">
                          
                            <button style="float: right" type="submit" class="btn btn-primary">Update </button>
                      
                            
                          </div>
                          <!-- /.card-body -->
                         
                        </form>
                      
                      </form>>
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
                <th>Catageroy Name</th>
                <th>BreakFast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <th>Price</th>
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

    @empty($meals)
    <section class="content">
      
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Food Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>
  
          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Meal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{ url('addmeal') }}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Meal Catageroy</label>
                        <input type="text" required name="catageroy" class="form-control" id="exampleInputEmail1" placeholder="Enter currnet password">
                      </div>
  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Breakfast</label>
                       <textarea required name="breakfast" class="form-control" id=""  rows="3" placeholder="BreakFfast Items List"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Lunch</label>
                       <textarea required name="lunch" class="form-control" id=""  rows="3" placeholder="Lucnh Items List"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Dinner</label>
                       <textarea required name="dinner" class="form-control" id=""  rows="3" placeholder="Dinner Items List"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" required name="price" class="form-control" id="exampleInputEmail1" placeholder="Price">
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
                <th>Catageroy Name</th>
                <th>BreakFast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <th>Price</th>
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
             
                
              </tr>
  
  
  
              
        
            
              
             
  
  
              
             
              </tbody>
              <tfoot>
                
              <tr>
                <th>ID</th>
                <th>Catageroy Name</th>
                <th>BreakFast</th>
                <th>Lunch</th>
                <th>Dinner</th>
                <th>Price</th>
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