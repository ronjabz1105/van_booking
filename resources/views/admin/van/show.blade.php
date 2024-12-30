
@extends('layouts.admin')


@section('title', 'Van Page')

@section('content')

<div class="page-header">
    <div class="container-fluid">

        <h2 class="h5 no-margin-bottom">Van</h2>
    
        </div>
    </div>

    <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Van</a></li>
          <li class="breadcrumb-item active">Show Van  Details          </li>
        </ul>
      </div>

      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <!-- Basic Form--> 
            <div class="col-lg-12">
              <div class="block">
                <div class=" text-right"><a  href="{{url('admin/van')}}"   class="btn btn-primary">back </a>
                </div>
                <div class="title"><strong class="d-block"> Van's Information</strong><span class="d-block">Please fill all the needed details .</span></div>
              
                  
                    <div class="form-group">
                        <label class="form-control-label">Type</label>
                        <input type="name"  name="type" placeholder="Type" class="form-control" value="{{$van->type}}">
                           
                    
                    </div>
                      
                      <div class="form-group">
                        <label class="form-control-label">model</label>
                        <input type=""  name="model" placeholder="Model " class="form-control" value="{{$van->model}}">
                        
                    </div>
                      
                     
                    <div class="form-group">       
                      <label class="form-control-label">Color</label>
                      <input type="description" name="color" placeholder="Color" class="form-control rows3" value="{{$van->color}}">
                
                    </div>
                    <div class="form-group">       
                        <label class="form-control-label">Plate Number</label>
                        <input type="description" name="plateNumber" placeholder="Plate Number" class="form-control rows3" value="{{$van->plateNumber}}">
                      
                    </div>
                
                
              </div>
            </div>
           
          
            
          </div>
        </div>
      </section>


    
@endsection