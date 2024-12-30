
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
          <li class="breadcrumb-item active">Show Driver  Details          </li>
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
                <div class="title"><strong class="d-block"> Driver's Information</strong><span class="d-block">Please fill all the needed details .</span></div>
                <div class="">
                  
                    <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input type="name"  name="name" placeholder="Name" class="form-control" value="{{$driver->name}}">
                           
                    
                    </div>
                      
                      <div class="form-group">
                        <label class="form-control-label">Phone</label>
                        <input type="phone number"  name="phone" placeholder="Phone Number" class="form-control" value="{{$driver->phone}}">
                        
                    </div>
                      
                     
                    <div class="form-group">       
                      <label class="form-control-label">Address</label>
                      <input type="description" name="address" placeholder="Address" class="form-control rows3" value="{{$driver->address}}">
                
                    </div>
                    <div class="form-group">       
                        <label class="form-control-label">License Number</label>
                        <input type="description" name="license" placeholder="License Number" class="form-control rows3" value="{{$driver->license}}">
                      
                    </div>
                   
                    
                    <div class="form-group">       
                      <label class="form-control-label">Gender</label>
                      <input type="description" name="license" placeholder="License Number" class="form-control rows3" value="{{$driver->gender}}">
               
                </div>
              </div>
            </div>
           
          
            
          </div>
        </div>
      </section>


    
@endsection