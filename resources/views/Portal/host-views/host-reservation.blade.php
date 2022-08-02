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
              <h2 class="card-title">Reservation Mangment </h2>
             
            </div>
           

            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Location Details</th>
                  <th>Guest Details</th>
                  <th>Check_in </th>
                  <th>Check_out </th>
                  <th>Payments</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                @isset($resvers)
                @foreach ($resvers as $res )
                <tr style="font-weight: bold;text-transform:uppercase">
                  <td>{{ $res->id }}</td>
                  <td>Name={{ App\Location::find($res->location_id)->title }}
                      <br> 
                     
                    Base Rate={{ App\Location::find($res->location_id)->rate }}
                    <br>
                 
                    Type={{ App\Location::find($res->location_id)->type }}
                  </td>
                  <td>{{ App\User::find($res->guest_id)->name }}
                    <br>
                    
                    phone={{ App\User::find($res->guest_id)->phone }}
                  </td>
                  <td>{{ $res->check_in }}</td>
                  <td>{{ $res->check_out }}</td>
                  <td>Total={{ $res->total_amount }}
                  <br>
                  Advance={{ $res->advance }}
                  <br>
                  Balance={{ $res->balance}}
                  </td>
                  <td>{{ $res->status }}</td>
                  <td><div class="btn-group">
                    @if( $res->status ==="pending")
                    <span  data-target="#modal-checkin-{{ $res->id }}" data-toggle="modal" type="button" type="button" class="btn btn-danger btn-sm">Checkin</span>
                    
                    @elseif($res->status==="process")
                    <span  data-target="#modal-checkout-{{ $res->id }}" data-toggle="modal" type="button" type="button" class="btn btn-warning btn-sm">Checkout</span>
                    
                    @else
                    <a class="btn btn-success btn-sm" href=""><span>Completed</span></a>
                    @endif
                  </div> </td>
                
                  
                 
                  
                </tr>
                

                <div class="modal fade" id="modal-checkin-{{ $res->id }}">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Add Advance Amount</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="Post" action="{{ url('addpayments') }}">
                          @csrf
                          <div class="card-body">
                          
                            <input type="hidden" name="id" value="{{ $res->id }}">
                            
      
                            <div class="form-group">
                              <label for="exampleInputEmail1">Price</label>
                              <input type="number" required name="advance" class="form-control" id="exampleInputEmail1" placeholder="Price">
                            </div>
        
                           
                            
                          </div>
                          <!-- /.card-body -->
                          <button style="float: right" type="submit" class="btn btn-primary">Add </button>
                          
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

              
                <div class="modal fade" id="modal-checkout-{{ $res->id }}">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Add Remaining Amount</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="Post" action="{{ url('addpayments') }}">
                          @csrf
                          <div class="card-body">


                            <input type="hidden" name="id" value="{{ $res->id }}">
                            
                            <div class="form-group">
                              <label for="exampleInputEmail1">Price</label>
                              <input type="number" required name="balance" class="form-control" id="exampleInputEmail1" placeholder="Enter Remeaning Amount">
                            </div>
        
        
                           
                            
                          </div>
                          <!-- /.card-body -->
                          <button style="float: right" type="submit" class="btn btn-primary">Add </button>
                          
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
          

                      @empty($resvers)

                      <tr>

                        <td>Not Found</td>
                        <td>Not Found</td>
                        <td>Not Found</td>
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
                    <th>Location</th>
                    <th>Guest</th>
                    <th>Check_in</th>
                    <th>Check_out</th>
                    <th>Payments</th>
                    <th>Status</th>
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