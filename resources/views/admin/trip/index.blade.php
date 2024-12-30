



@extends('layouts.admin')


@section('title', 'Trip Page')

@section('content')

<div class="page-header">
    <div class="container-fluid">

        <h2 class="h5 no-margin-bottom">Trip</h2>
    
        </div>
    </div>

    <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Trip</a></li>
          <li class="breadcrumb-item active">Trip Details            </li>
        </ul>
        @session('status')
        <div class=" alert alert-success">
          {{session('status') }}
  
        </div>
        @endsession
      </div>
  
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="block margin-bottom-sm">
                <div class="title ">
                  <strong>List of Trips  </strong>
                 
                  <div  class="text-right " >

                  <a  href="{{url('admin/trip/create')}}"   class="btn btn-primary ">Add new trip </a>
                </div>
                </div>
                
               
                <div class="table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Van</th>
                        <th>Driver</th>
                        <th>Place of Origin</th>
                        <th>Destination</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($trips as $trip)                         
                     
                      <tr>
                        <td>{{$trip->van->model}} {{$trip->van->type}} </td>
                        <td>{{$trip->driver->name}}</td>
                        <td>{{$trip->placeOfOrigin}}</td>
                        <td>{{$trip->destination}}</td>
                        <td>{{$trip->departureTime}}</td>
                        <td>{{$trip->arrivalTime}}</td>
                        <td>${{$trip->price}}</td>
                        <td>{{$trip->status == 1 ? 'active': 'inactive'}}</td>
                        <td>
                          <a href="{{route('trip.edit', $trip->id)}}" class="btn btn-success">Edit</a>
                          <a href="{{route('trip.show', $trip->id)}}" class="btn btn-info">Show</a>
                         
                         

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
                  {{$trips->links()}}

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>


    
@endsection