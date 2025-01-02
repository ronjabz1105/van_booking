
@extends('layouts.booking')

@section('title', ' Bookings')

@section('content')

<!-- end header -->
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                <h2>List of Your Bookings</h2>
                
             </div>
          </div>
       </div>
    </div>
 </div>
  <!-- booking -->
 
  <!-- end booking -->

  <div  class="our_room">
   <div class="container">
      
      
    @if ( count($bookings)==0)
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <p  class="margin_0">No Bookings to display</p>
            </br>
               <a class="btn btn-primary" href="{{url('trips')}}">Book Now</a>
            </div>
         </div>
      </div>

    @else
        
    
      <div class="row">
   
         <div class="table-responsive"> 
            <table class="table">
              <thead>
                <tr>
                  
                  <th>Trip</th>
                  <th>Time</th>
                  <th>Price</th>
                  <th>Passenger</th>
                  <th>Phone Number</th>
                  <th>Description</th>
                  <th>Payment Status</th>
                  <th>Status</th>
                  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bookings as $booking)                         
               
                <tr>
                  <td>{{$booking->placeOfOrigin}}-{{$booking->destination}}</td>
                  <td>{{$booking->departureTime}}-{{$booking->arrivalTime}}</td>
                  <td>${{$booking->price}}</td>
                  <td>{{$booking->passengerName}}</td>
                  <td>{{$booking->passengerPhoneNumber}}</td>
                  <td>{!! Str::limit($booking->description,100)!!}</td>
                 
                  <td>
                    
                     @if($booking->paymentStatus == 1  )
                     Unpaid
                     <a href="{{url('paynow', $booking->id)}}" class="btn btn-warning">Pay Now</a>
                     @else
                         Paid
                     @endif
                     
                  </td>

                  <td>{{$booking->status == 1 ? 'active': 'Cancelled'}}</td>
                  <td>
                    
                    <a href="{{url('showbooking', $booking->id)}}" class="btn btn-info">Details</a>
                    
                     @if ($booking->status == 1)
                     <a href="{{url('editbooking', $booking->id)}}" class="btn btn-success in-line">Edit</a>
                       <a href="{{url('cancelbooking', $booking->id)}}" class="btn btn-danger">Cancel</a>
                     
                         
                     @else
                    
                    
                     @endif
                    
                   
                   

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
         </div>
       </div>
      @endif 
   </div>
</div>
@endsection