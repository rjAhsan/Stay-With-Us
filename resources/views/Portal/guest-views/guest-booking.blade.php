@extends('Portal.guest-views.guest-layout')

@section('content')


<div class="content-wrapper">
   
    <section class="content">
      <div class="container-fluid">
        <br>
        <br>
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h2 class="card-title">Bookings</h2>
             
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
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @isset($bookings)
                @foreach ($bookings as $booking )
                <tr style="font-weight: bold;text-transform:uppercase">
                  <td>{{ $booking->id }}</td>
                  <td>Title={{ $booking->location->title }}
                    <br>
                    Capasity={{ $booking->location->capasity }}Persons
                    <br>
                    Beds={{ $booking->location->beds }}
                  </td>
                  <td>Name={{ App\User::find($booking->guest_id)->name }}
                    <br>
                    Phone={{ App\User::find($booking->guest_id)->phone }}
                  </td>
                  <td>{{ $booking->check_in }}</td>
                  <td>{{ $booking->check_out }}</td>
                  <td><div class="btn-group">
                   
                    <a class="btn btn-success" href="{{ url('confrim/'.$booking->id) }}"><span>Confrim</span></a>
                    <a class="btn btn-danger" href="{{ url('rejecte/'.$booking->id) }}"><span>cancel</span></a>
                    
                  </div> </td>
                
                  
                 
                  
                </tr>
                @endforeach 
                @endisset
          

                      @empty($bookings)

                      <tr>

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
                  <th>Check_in</th>
                  <th>Check_out</th>
                  
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