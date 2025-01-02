
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
          <li class="breadcrumb-item active">Driver Details            </li>
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
                  <strong>List of Drivers  </strong>
                  <div  class="text-right " >
                  <a  href="{{url('admin/driver/create')}}"   class="btn btn-primary ">Add new Driver </a>
                </div>
                </div>
                
               
                <div class="table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                       
                        <th> Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>License</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($drivers as $driver)
                          
                     
                      <tr>
                        <td>{{$driver->name}}</td>
                        <td>{{$driver->gender}}</td>
                        <td>{{$driver->phone}}</td>
                        <td>{{$driver->address}}</td>
                        <td>{{$driver->license}}</td>
                        <td>{{$driver->status == 1 ? 'active': 'inactive'}}</td>
                        <td>
                          <a href="{{route('driver.edit', $driver->id)}}" class="btn btn-success">Edit</a>
                          <a href="{{route('driver.show', $driver->id)}}" class="btn btn-info d-inline">Show</a>
                         
                        
                          <form action="{{route('driver.destroy',$driver->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
                  {{$drivers->links()}}

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

    
@endsection