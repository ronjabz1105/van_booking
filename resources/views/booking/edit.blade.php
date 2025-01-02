

@extends('.layouts.booking')


@section('title', ' Edit Booking')

@section('content')

<!-- end header -->
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                <h2>Edit Booking </h2>
             </div>
          </div>
       </div>
    </div>
 </div>
  <!-- trip -->



  <!-- end trip -->

  <div  class="our_room">
   <div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      
      <div class="row">
         <div class="col-md-6">
            <div id="serv_hover"  class="room">
               <div class="room_img">
                  <figure><img src="{{asset('images/room1.jpg')}}" alt=""/></figure>
               </div>
               <div class="bed_room">
                  <h3 padding:12px>{{$trip->placeOfOrigin}} to {{$trip->destination}}</h3>
                  <h4 padding:12px>Departure Time: {{$trip->departureTime}}</h4>
                  <h4 padding:12px>Arrival Time: {{$trip->arrivalTime}}</h4>
                  <p style="padding:12px">{!! Str::limit($trip->description,100)!!}</p>
                 

                  <h3>Price: ${{$trip->price}}</h3>

               </div>
              
             
            </div>
         </div>
         <div class="col-md-6">

        <form action="{{url('update', $booking->id)}}"  method="Post" >

            @csrf
           
            <h1 style="font-size: 40px">Booking Details</h1>
            <div>
                <label for="">Passenger Name</label>
                <input type="text"  name="passengerName" value="{{$booking->passengerName}}" >
                @error('passengerName' ) <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div>
                <label for="">Email</label>
                <input type="text"  name="passengerEmail" value="{{$booking->passengerEmail}}" >
                @error('passengerEmail' ) <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div>
                <label for="">Phone number</label>
                <input  type="text"  name="passengerPhoneNumber" value="{{$booking->passengerPhoneNumber}}">
                @error('passengerPhoneNumber' ) <span class="text-danger">{{$message}}</span> @enderror
            </div>

            <div class="form-group ">
                <label class="form-control-label">Number of Passenger</label>
                    <select name="numberOfPassenger" class="form-control  col-sm-4">
                        <option value="{{$booking->numberOfPassenger}}">{{$booking->numberOfPassenger}}</option>
                    @for ($i=1; $i<11;$i++)
                       <option value="{{$i}}">{{$i}}</option>
                     @endfor
                    </select>
                    @error('Number Of Passenger' ) <span class="text-danger">{{$message}}</span> @enderror
            </div>
            
               <input  type="submit" class="btn btn-primary" value="Update" >
             
               
           


         </form>


         </div>

      </div>
   </div>
</div>
 
 
@endsection
