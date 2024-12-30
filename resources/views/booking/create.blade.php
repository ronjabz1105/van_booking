@extends('layouts.booking')


@section('content')


<div class="container"> 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header">

                    <h4>Add Booking </h4>
                    <a href="{{url('booking/create')}}"  class="btn btn-primary float-end">Show my bookings</a>
                </div>

                    <div class="card-body">
                        
                        <form action="">

                            <div class="card-body">
                    <div class="table-responsive"> 
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Van</th>
                                <th>Driver</th>
                                <th>Place of Origin</th>
                                <th>Destination</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
      
                            <tr>
                                <td> {{$trip}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                <a href="{{route('booking.create', $trip)}}" class="btn btn-success">Book</a>
                                <a href="{{route('trip.show', $trip->id)}}" class="btn btn-info">Show</a>
                                
                                

                                </td>
                            </tr>
                          
                            </tbody>
                        </table>


                            <div class="mb-3">
                                <label for="">Number of Passengers</label>
                                <input type="text" name='numberOfPassenger' class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name='numberOfPassenger' class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name='numberOfPassenger' class="form-control">
                            </div>

                            <div class="form-group">       
                                <input type="submit" value="Book Now" class="btn btn-primary">
                            </div>

                      </form>

                    </div>
              
            </div>

        
        </div>
    </div>

</div>


@endsection