@extends('Portal.host-views.host-layout')

@section('content')


<div class="content-wrapper">
  @isset($locations)
    <section class="content">
    
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Location Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>

          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Location</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{ url('addlocation') }}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" required name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Location Title">
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Type</label>
                        <select required name="type" id="type" class="form-control">
                          <option value="room">Room</option>
                          <option value="apartment">Apartment</option>
                          
                        </select>
                      </div>



                      <div class="form-group">
                        <label for="exampleInputEmail1">Capasity</label>
                        <select required name="capasity" id="capasity" class="form-control">
                          <option value="1">1 Person</option>
                          <option value="2">2 Person</option>
                          <option value="3">3 Person</option>
                          <option value="4">4 Person</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Beds</label>
                        <select required name="beds" id="beds" class="form-control">
                          <option value="single">Single</option>
                          <option value="double">Double</option>
                          <option value="triple"> Double + Kids </option>
                          
                        </select>
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <select required name="city" id="" class="form-control">
                          <option value="lahore">LAHORE</option>
                          <option value="Karachi">KARACHI</option>
                          <option value="Rawalpindi">RAWALPINDI</option>
                          <option value="Islamabad">ISLMABAD</option>
                          <option value="Nothren">NORTHEN</option>
                        </select>
                      </div>
                      @isset($mealselect)
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Meal Catageroy</label>
                        <select  name="meal_id" id="" class="form-control">
                          <option value="">Not Selected</option>
                          @foreach ($mealselect as $meal)
                          
                          <option value="{{ $meal->id }}">{{ $meal->catageroy }} || {{ $meal->price }}</option>
                           
                            
                          @endforeach
                          
                        </select>
                      </div>
                      @endisset

                      @empty($mealselect)
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Meal Catageroy</label>
                        <select  name="meal_id" id="" class="form-control">
                          <option value="">Not Found</option>
                          
                          
                        </select>
                      </div>
                      @endempty


                      @isset($vehicleselect)
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Vehicel</label>
                        <select  name="vehicle_id" id="" class="form-control">
                          
                          <option value="">Not Selected</option>
                          @foreach ($vehicleselect as $vehicle)
                          <option value="{{ $vehicle->id}}">{{ $vehicle->Name }} || {{ $vehicle->Type }} || {{ $vehicle->Model }}</option>
                          
                          @endforeach

                          
                          
                          
                        </select>
                      </div>
                      @endisset
                      @empty($vehicleselect)
                        
                     
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Vehicel</label>
                        <select  name="vehicle_id" id="vehicle_id" class="form-control">
                          <option  value="">Not Found</option>
                          
                          
                        </select>
                      </div>
                      @endempty



                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                       <textarea required name="description" class="form-control" id=""  rows="3" placeholder="Add description"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                       <textarea required name="address" class="form-control" id=""  rows="3" placeholder="Address"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Latitude/Longitude</label>
                        <input type="text" required name="pin" class="form-control" id="exampleInputEmail1" placeholder="Pin Location">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Rate</label>
                        <input type="text" required name="rate" class="form-control" id="exampleInputEmail1" placeholder="Base Rent">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Policy</label>
                       <textarea required name="policy" class="form-control" id=""  rows="3" placeholder="Add Polices"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Images</label>
                        <input type="file" required name="img_url" class="form-control" id="exampleInputEmail1" placeholder="image">
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
                <th>Title</th>
                <th>Type</th>
                <th>Capasity</th>
                <th>Beds</th>
                <th>City</th>
                <th>Meal ID</th>
                <th>vehicel ID</th>
                <th>Description</th>
                <th>Address</th>
                <th>Pin</th>
                <th>Rate</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
            
              @foreach ($locations as $location )
              <tr style="font-weight: bold;text-transform:uppercase">
                <td>{{ $location->id}}</td>
                <td>{!! Str::limit($location->title, 20, ' ...') !!}</td>
                <td>{{ $location->type }}</td>
                <td>{{ $location->capasity }}Person</td>
                <td>{{ $location->beds }}</td>
                <td>{{ $location->city }}</td>
                <td>{{ $location->meal_id }}</td>
                <td>{{ $location->vehicle_id }}</td>
                <td>{!! Str::limit($location->description, 100, ' ...') !!}</td>
                <td>{{ $location->address }}</td>
                <td>{{ $location->pin }}</td>
                <td>{{ $location->rate }}</td>
                
                <td><div class="btn-group">
                  <span  data-target="#modal-viewlocation-{{ $location->id }}" data-toggle="modal" type="button" type="button" class="btn btn-success btn-sm">View</span>
                  <span  data-target="#modal-editlocation-{{ $location->id }}" data-toggle="modal" type="button" type="button" class="btn btn-primary btn-sm">Edit</span>
                
                  <a  class="btn btn-danger btn-sm" href="">Delete</a>
                  
                </div> </td>

                
              <div class="modal fade" id="modal-viewlocation-{{ $location->id }}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Location Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form >
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" readonly name="title" class="form-control" id="exampleInputEmail1" value="{{ $location->title }}">
                          </div>
                          
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Type</label>
                            <select readonly name="type" id="type" class="form-control">
                              <option >{{ $location->type }}</option>
                              
                              
                            </select>
                          </div>
    
    
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Capasity</label>
                            <select readonly name="" id="capasity" class="form-control">
                              <option >{{ $location->capasity }}</option>
                              
                            </select>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Beds</label>
                            <select readonly name="beds" id="beds" class="form-control">
                              <option >{{ $location->beds }}</option>
                              
                              
                            </select>
                          </div>
    
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <select readonly name="city" id="" class="form-control">
                              <option >{{ $location->city }}</option>
                             
                            </select>
                          </div>
                          @isset($mealselect)
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Meal Catageroy</label>
                            <select  name="meal_id" id="" class="form-control">
                              <option value="">Not Selected</option>
                              @foreach ($mealselect as $meal)
                              
                              <option >{{ $meal->catageroy }} || {{ $meal->price }}</option>
                               
                                
                              @endforeach
                              
                            </select>
                          </div>
                          @endisset
    
                          @empty($mealselect)
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Meal Catageroy</label>
                            <select  name="meal_id" id="" class="form-control">
                              <option value="">Not Found</option>
                              
                              
                            </select>
                          </div>
                          @endempty
    
    
                          @isset($vehicleselect)
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Vehicel</label>
                            <select  name="vehicle_id" id="" class="form-control">
                              
                              <option value="">Not Selected</option>
                              @foreach ($vehicleselect as $vehicle)
                              <option >{{ $vehicle->Name }} || {{ $vehicle->Type }} || {{ $vehicle->Model }}</option>
                              @endforeach
    
                              
                              
                              
                            </select>
                          </div>
                          @endisset
                          @empty($vehicleselect)
                            
                         
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Vehicel</label>
                            <select  name="vehicle_id" id="vehicle_id" class="form-control">
                              <option  value="">Not Found</option>
                              
                              
                            </select>
                          </div>
                          @endempty
    
    
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                           <textarea readonly name="description" class="form-control" id=""  rows="3" value="Add description">

                              {{ $location->description }}

                           </textarea>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                           <textarea readonly  name="address" class="form-control" id=""  rows="3" value="Address">

                            {{  $location->address  }}
                           </textarea>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Latitude/Longitude</label>
                            <input type="text" readonly name="pin" class="form-control" id="exampleInputEmail1" value="{{ $location->pin }}">
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Rate</label>
                            <input type="text" readonly name="rate" class="form-control" id="exampleInputEmail1" value="{{ $location->rate }}">
                          </div>
    
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Policy</label>
                           <textarea readonly name="policy" class="form-control" id=""  rows="3" value="Add Polices">

                            {{ $location->policy }}
                           </textarea>
                          </div>
    
                          {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Images</label>
                            <input type="file" required name="img_url" class="form-control" id="exampleInputEmail1" placeholder="image">
                          </div> --}}
      
                         
                          
                        </div>
                        <!-- /.card-body -->
                        
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

              <div class="modal fade" id="modal-editlocation-{{ $location->id }}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Location Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                   
                    <div class="modal-body">
                      <form action="{{ ('edit-location') }}" method="POST">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" required name="title" class="form-control" id="exampleInputEmail1" value="{{ $location->title }}">
                          </div>
                            <input type="hidden" name="id" value="{{ $location->id  }}">

                          <div class="form-group">
                            <label for="exampleInputEmail1">Type</label>
                            <select required name="type" id="type" class="form-control">
                              
                              <option value="room">Room</option>
                              <option value="apartment">Apartment</option>
                              
                              
                            </select>
                          </div>
    
    
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Capasity</label>
                            <select required name="capasity" id="capasity" class="form-control">
                              <option value="1">1 Person</option>
                              <option value="2">2 Person</option>
                              <option value="3">3 Person</option>
                              <option value="4">4 Person</option>
                              
                            </select>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Beds</label>
                            <select required name="beds" id="beds" class="form-control">
                              <option value="single">Single</option>
                              <option value="double">Double</option>
                              <option value="triple"> Double + Kids </option>
                              
                              
                            </select>
                          </div>
    
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <select required name="city" id="" class="form-control">
                              <option value="lahore">LAHORE</option>
                              <option value="Karachi">KARACHI</option>
                              <option value="Rawalpindi">RAWALPINDI</option>
                              <option value="Islamabad">ISLMABAD</option>
                              <option value="Nothren">NORTHEN</option>
                                
                            </select>
                          </div>
                          @isset($mealselect)
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Meal Catageroy</label>
                            <select  name="meal_id" id="" class="form-control">
                              <option value="">Not Selected</option>
                              @foreach ($mealselect as $meal)
                              
                              
                              <option value="{{ $meal->id }}">{{ $meal->catageroy }} || {{ $meal->price }}</option>
                           
                               
                                
                              @endforeach
                              
                            </select>
                          </div>
                          @endisset
    
                          @empty($mealselect)
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Meal Catageroy</label>
                            <select  name="meal_id" id="" class="form-control">
                              <option value="">Not Found</option>
                              
                              
                            </select>
                          </div>
                          @endempty
    
    
                          @isset($vehicleselect)
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Vehicel</label>
                            <select  name="vehicle_id" id="" class="form-control">
                              
                              <option value="">Not Selected</option>
                              @foreach ($vehicleselect as $vehicle)
                              <option value="{{ $vehicle->id}}">{{ $vehicle->Name }} || {{ $vehicle->Type }} || {{ $vehicle->Model }}</option>
                          
                              @endforeach
    
                              
                              
                              
                            </select>
                          </div>
                          @endisset
                          @empty($vehicleselect)
                            
                         
                          <div class="form-group">
                            <label for="exampleInputEmail1">Select Vehicel</label>
                            <select  name="vehicle_id" id="vehicle_id" class="form-control">
                              <option  value="">Not Found</option>
                              
                              
                            </select>
                          </div>
                          @endempty
    
    
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                           <textarea required name="description" class="form-control" id=""  rows="3" >

                              {{ $location->description }}

                           </textarea>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                           <textarea required  name="address" class="form-control" id=""  rows="3" >

                            {{  $location->address  }}
                           </textarea>
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Latitude/Longitude</label>
                            <input type="text" required name="pin" class="form-control" id="exampleInputEmail1" value="{{ $location->pin }}">
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Rate</label>
                            <input type="text" required name="rate" class="form-control" id="exampleInputEmail1" value="{{ $location->rate }}">
                          </div>
    
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Policy</label>
                           <textarea required name="policy" class="form-control" id=""  rows="3" >

                            {{ $location->policy }}
                           </textarea>
                          </div>
    
                          {{-- <div class="form-group">
                            <label for="exampleInputEmail1">Images</label>
                            <input type="file" required name="img_url" class="form-control" id="exampleInputEmail1" placeholder="image">
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
              

              </tr>
              @endforeach
             


              
             
              </tbody>
              <tfoot>
                
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Capasity</th>
                <th>Beds</th>
                <th>City</th>
                <th>Meal ID</th>
                <th>vehicel ID</th>
                <th>Description</th>
                <th>Address</th>
                <th>Pin</th>
                <th>Rate</th>
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

    @empty($locations)
    <section class="content">
      
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align:center" class=" card-title"> <strong>Location Mangment</strong> </h3>
            <span style="float: right" data-target="#modal-lg" data-toggle="modal" type="button"type="button" class="btn-sm btn btn-primary">Add New</span>
            
          </div>
  
          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Location</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="Post" action="{{ url('addlocation') }}">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" required name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Location Title">
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Type</label>
                        <select required name="type" id="type" class="form-control">
                          <option value="room">Room</option>
                          <option value="apartment">Apartment</option>
                          
                        </select>
                      </div>



                      <div class="form-group">
                        <label for="exampleInputEmail1">Capasity</label>
                        <select required name="capasity" id="capasity" class="form-control">
                          <option value="1">1 Person</option>
                          <option value="2">2 Person</option>
                          <option value="3">3 Person</option>
                          <option value="4">4 Person</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Beds</label>
                        <select required name="beds" id="beds" class="form-control">
                          <option value="single">Single</option>
                          <option value="double">Double</option>
                          <option value="triple"> Double + Kids </option>
                          
                        </select>
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">City</label>
                        <select required name="city" id="" class="form-control">
                          <option value="lahore">LAHORE</option>
                          <option value="Karachi">KARACHI</option>
                          <option value="Rawalpindi">RAWALPINDI</option>
                          <option value="Islamabad">ISLMABAD</option>
                          <option value="Nothren">NORTHEN</option>
                        </select>
                      </div>
                      @isset($mealselect)
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Meal Catageroy</label>
                        <select  name="meal_id" id="" class="form-control">
                          <option value="">Not Selected</option>
                          @foreach ($mealselect as $meal)
                          
                          <option value="{{ $meal->id }}">{{ $meal->catageroy }} || {{ $meal->price }}</option>
                            
                          @endforeach
                          
                        </select>
                      </div>
                      @endisset

                      @empty($mealselect)
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Meal Catageroy</label>
                        <select  name="meal_id" id="" class="form-control">
                          <option value="">Not Found</option>
                          
                          
                        </select>
                      </div>
                      @endempty

                      @isset($vehicleselect)
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Vehicel</label>
                        <select  name="vehicle_id" id="" class="form-control">
                          
                          <option value="">Not Selected</option>
                          @foreach ($vehicleselect as $vehicle)
                          <option value="{{ $vehicle->id}}">{{ $vehicle->Name }} || {{ $vehicle->Type }} || {{ $vehicle->Model }}</option>
                          @endforeach

                          
                          
                          
                        </select>
                      </div>
                      @endisset
                      @empty($vehicleselect)
                        
                     
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Vehicel</label>
                        <select  name="vehicle_id" id="vehicle_id" class="form-control">
                          <option  value="">Not Found</option>
                          
                          
                        </select>
                      </div>
                      @endempty


                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                       <textarea required name="description" class="form-control" id=""  rows="3" placeholder="Add description"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                       <textarea required name="address" class="form-control" id=""  rows="3" placeholder="Address"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Latitude/Longitude</label>
                        <input type="text" required name="pin" class="form-control" id="exampleInputEmail1" placeholder="Pin Location">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Rate</label>
                        <input type="text" required name="rate" class="form-control" id="exampleInputEmail1" placeholder="Base Rent">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Policy</label>
                       <textarea required name="policy" class="form-control" id=""  rows="3" placeholder="Add Polices"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Images</label>
                        <input type="file" required name="img_url" class="form-control" id="exampleInputEmail1" placeholder="image">
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
                <th>Title</th>
                <th>Type</th>
                <th>Capasity</th>
                <th>Beds</th>
                <th>City</th>
                <th>Meal ID</th>
                <th>vehicel ID</th>
                <th>Description</th>
                <th>Address</th>
                <th>Pin</th>
                <th>Rate</th>
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
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
                <td>Not Found</td>
             
                
              </tr>
  
  
  
              
        
            
              
             
  
  
              
             
              </tbody>
              <tfoot>
                
                <th>Title</th>
                <th>Type</th>
                <th>Capasity</th>
                <th>Beds</th>
                <th>City</th>
                <th>Meal catgeroy</th>
                <th>vehicel Name</th>
                <th>Description</th>
                <th>Address</th>
                <th>Pin</th>
                <th>Rate</th>
                <th>Action</th>
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