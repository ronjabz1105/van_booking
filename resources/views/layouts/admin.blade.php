<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <title>@yield('title')</title>

        @include('layouts.design.top_assets')

        <style type="text/css">
        
        .table_deg{
            background-color: skyblue;
            margin: auto;
            width: 80%;
            margin-top:40px;
        }
        </style>
    </head>

    <body  >
        @include('layouts.design.header')
        <div class="d-flex align-items-stretch">
           
            @include('layouts.design.sidebar')
           
          
            <div class="page-content">
                
    
                @include('layouts.design.footer')
                @yield('content')
            </div>
        </div>
 

         <!-- JavaScript files-->
    <script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admin_assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/charts-home.js')}}"></script>
    <script src="{{asset('admin_assets/js/front.js')}}"></script>
        
    </body>
</html>
