
@extends('layouts.booking')

@section('title', ' Dashboard')

@section('content')

  <!-- banner -->
  @include('layouts.booking_layouts.banner')
  <!-- end banner -->
  <!-- about -->
  @include('layouts.booking_layouts.about')
  <!-- end about -->

  
  <!-- gallery -->
  @include('layouts.booking_layouts.gallery')
  <!-- end gallery -->

  <!--  contact -->
  @include('layouts.booking_layouts.contact')
  <!-- end contact -->
    
@endsection