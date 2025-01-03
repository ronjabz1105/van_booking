
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
          <li class="breadcrumb-item active">Edit Trip            </li>
        </ul>
      </div>

      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Basic Form--> 
            <div class="col-lg-12">
              <div class="block">
                <div class=" text-right"><a  href="{{url('admin/trip')}}"   class="btn btn-primary">back </a>
                </div>
                <div class="title"><strong class="d-block">Edit Trip Information</strong><span class="d-block">Please fill all the needed details .</span></div>
                <div class="">
                  <form action="{{route('trip.update', $trip->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                        <label class="form-control-label">Driver's Name</label>
                            <select name="driverId" class="form-control  col-sm-6">
                                <option value="{{$trip->driver->id}}">{{$trip->driver->name}}</option>
                                @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                @endforeach
                            </select>
                            @error('driverId' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group ">
                        <label class="form-control-label">Van</label>
                            <select name="vanId" class="form-control  col-sm-6">
                                <option value="{{$trip->van->id}}">{{$trip->van->type}} {{$trip->van->model}}</option>
                                @foreach($vans as $van)
                                <option value="{{ $van->id }}">{{ $van->type}} {{ $van->model}}</option>
                                @endforeach
                            </select>
                            @error('vanId' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    
                    <div class="form-group">       
                        <label class="form-control-label">Destination</label>
                        <input type="name" name="destination" placeholder="Destination" class="form-control " value="{{$trip->destination}}">
                        @error('destination' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                     <div class="form-group">       
                        <label class="form-control-label">Place of Origin</label>
                        <input type="text" name="placeOfOrigin" placeholder="Place of Origin" class="form-control " value="{{$trip->placeOfOrigin}}">
                        @error('placeOfOrigin' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                      
                      <div class="form-group">
                        <label class="form-control-label">Departure Time</label>
                        <input type=""  name="departureTime" placeholder="Departure Time " class="form-control" value="{{$trip->departureTime}}">
                        @error('departureTime' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                      
                     
                    <div class="form-group">       
                      <label class="form-control-label">Arrival Time</label>
                      <input type="text" name="arrivalTime" placeholder="Arrival Time" class="form-control rows3" value="{{$trip->arrivalTime}}">
                      @error('arrivalTime' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                     
                    <div class="form-group">       
                      <label class="form-control-label">Price</label>
                      <input type="text" name="price" placeholder="Price" class="form-control rows3" value="{{$trip->price}}">
                      @error('price' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">       
                      <label class="form-control-label">Description</label>
                      <textarea name="description" placeholder="Description" class="form-control rows3" value="{{$trip->description}}">{{$trip->description}}</textarea>
                      @error('description' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                      </br>
                    <div class="form-group">       
                      <input type="submit" value="Update" class="btn btn-primary">
                    </div>

                  </form>

                </div>
              </div>
            </div>
           
          
            
          </div>
        </div>
      </section>


    
@endsection