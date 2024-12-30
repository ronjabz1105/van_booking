
@extends('layouts.admin')


@section('title', 'Driver Page')

@section('content')

<div class="page-header">
    <div class="container-fluid">

        <h2 class="h5 no-margin-bottom">Driver</h2>
    
        </div>
    </div>

    <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Driver</a></li>
          <li class="breadcrumb-item active">Edit Driver            </li>
        </ul>
      </div>

      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Basic Form--> 
            <div class="col-lg-12">
              <div class="block">
                <div class=" text-right"><a  href="{{url('admin/driver')}}"   class="btn btn-primary">back </a>
                </div>
                <div class="title"><strong class="d-block">Edit Driver Information</strong><span class="d-block">Please fill all the needed details .</span></div>
                <div class="">
                  <form action="{{route('driver.update', $driver->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input type="name"  name="name" placeholder="Name" class="form-control" value="{{$driver->name}}">
                            @error('name' ) <span class="text-danger">{{$message}}</span> @enderror
                    
                    </div>
                      
                      <div class="form-group">
                        <label class="form-control-label">Phone</label>
                        <input type="phone number"  name="phone" placeholder="Phone Number" class="form-control" value="{{$driver->phone}}">
                        @error('phone' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                      
                     
                    <div class="form-group">       
                      <label class="form-control-label">Address</label>
                      <input type="description" name="address" placeholder="Address" class="form-control rows3" value="{{$driver->address}}">
                      @error('address' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">       
                        <label class="form-control-label">License Number</label>
                        <input type="description" name="license" placeholder="License Number" class="form-control rows3" value="{{$driver->license}}">
                        @error('license' ) <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    
                      <div class="form-group">       
                        <label class="form-control-label">Gender</label>
                        <div class="i-checks">
                            <input id="radioCustom1"  {{$driver->gender=='Male' ? 'checked':''}}  type="radio" checked="" value="Male" name="gender" class="radio-template">
                         <label for="radioCustom1">Male</label>
                         &nbsp;&nbsp;
                         <input id="radioCustom2"  {{$driver->gender=='Female' ? 'checked':''}}  type="radio"  value="Female" name="gender" class="radio-template">
                            <label for="radioCustom2">Female</label>
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