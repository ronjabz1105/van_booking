



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
          <li class="breadcrumb-item active">Van Details            </li>
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
                  <strong>List of Vans  </strong>
                 
                  <div  class="text-right " >

                  <a  href="{{url('admin/van/create')}}"   class="btn btn-primary ">Add new van </a>
                </div>
                </div>
                
               
                <div class="table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                       
                        <th>Type</th>
                        <th>model</th>
                        <th>color</th>
                        <th>plate Number</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($vans as $van)
                          
                     
                      <tr>
                        <td>{{$van->type}}</td>
                        <td>{{$van->model}}</td>
                        <td>{{$van->color}}</td>
                        <td>{{$van->plateNumber}}</td>
                        <td>{{$van->status == 1 ? 'active': 'inactive'}}</td>
                        <td>
                          <a href="{{route('van.edit', $van->id)}}" class="btn btn-success">Edit</a>
                          <a href="{{route('van.show', $van->id)}}" class="btn btn-info">Show</a>
                         
                          <form action="{{route('van.destroy',$van->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
                  {{$vans->links()}}

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>


    
@endsection