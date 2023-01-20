@extends('layouts.app')
@section('title')
mm {{ $x }}
@endsection
@section('nav')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ss">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kn">kn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mm">mm</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endsection
@section('content')
@include('layouts.inc')
@if ($x==15)
<h3 class="text-center">yes</h3>
@elseif ($x==14)
<h3 class="text-center">yes 14</h3>
@else 
<h3 class="text-center">no</h3>  
@endif
@for ($i=1;$i<4;$i++)
<h4  class="text-center my-3">{{ $i }}</h4>
@endfor
@foreach ( $users as $user )
  <a href='#' class="text-danger">{{ $user }}</a><br>  
@endforeach
@php
    echo "go to php <br>";
@endphp
<?php
     echo "i love php";
?>
{{-- very 
    good --}}
@endsection
