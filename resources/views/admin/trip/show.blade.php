
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
              
                
                    <div class="form-group ">
                        <label class="form-control-label">Driver's Name</label>
                        <input type="name" name="destination" placeholder="Destination" class="form-control " value="{{$trip->driver->name}}">
                            
                    </div>
                    <div class="form-group ">
                        <label class="form-control-label">Van</label>
                        <input type="name" name="destination" placeholder="Destination" class="form-control " value="{{$trip->van->type}} {{$trip->van->model}}">
                           
                    </div>
                    
                    <div class="form-group">       
                        <label class="form-control-label">Destination</label>
                        <input type="name" name="destination" placeholder="Destination" class="form-control " value="{{$trip->destination}}">
                      
                    </div>
                     <div class="form-group">       
                        <label class="form-control-label">Place of Origin</label>
                        <input type="description" name="placeOfOrigin" placeholder="Place of Origin" class="form-control " value="{{$trip->placeOfOrigin}}">
                       
                    </div>
                      
                      <div class="form-group">
                        <label class="form-control-label">Departure Time</label>
                        <input type=""  name="departureTime" placeholder="Departure Time " class="form-control" value="{{$trip->departureTime}}">
                      
                    </div>
                      
                     
                    <div class="form-group">       
                      <label class="form-control-label">Arrival Time</label>
                      <input type="description" name="arrivalTime" placeholder="Arrival Time" class="form-control rows3" value="{{$trip->arrivalTime}}">
                    
                    </div>
                    <div class="form-group">       
                      <label class="form-control-label">Price</label>
                      <input type="description" name="arrivalTime" placeholder="Price" class="form-control rows3" value="{{$trip->price}}">
                    
                    </div>

              </div>
            </div>
           
          
            
          </div>
        </div>
      </section>


    
@endsection