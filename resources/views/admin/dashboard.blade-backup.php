<!DOCTYPE html>
<html>
  <head> 
   @include('admin.layouts.top_assets')
  <body>
    @include('admin.layouts.header')


    <div class="d-flex align-items-stretch">

        @include('admin.layouts.sidebar')
      
        <div class="page-content">
            
            
            @include('admin.layouts.home')
            

            @include('admin.layouts.footer')
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