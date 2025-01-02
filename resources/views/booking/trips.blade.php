
@extends('layouts.booking')

@section('title', ' Trips')

@section('content')

<!-- end header -->
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                <h2>List of Trips</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
  <!-- trip -->
 
  <!-- end trip -->

  <div  class="our_room">
   <div class="container">
      
      <div class="row">

        @foreach ($trips as $trip)
     
         <div class="col-md-4 col-sm-6">
            <div id="serv_hover"  class="room">
               <div class="room_img">
                  <figure><img src="images/room1.jpg" alt=""/></figure>
               </div>
               <div class="bed_room">
                  <h3>{{$trip->placeOfOrigin}} to {{$trip->destination}}</h3>
                  <h4 >Departure Time: {{$trip->departureTime}}</h4>
                  <h4 >Arrival Time: {{$trip->arrivalTime}}</h4>
                 
               </div>
             
              <a href="{{url('addbooking', $trip->id)}}" class="btn btn-success">Book Now</a>
             
            </div>
         </div>
       
        @endforeach

      </div>
   </div>
</div>
 
 
@endsection