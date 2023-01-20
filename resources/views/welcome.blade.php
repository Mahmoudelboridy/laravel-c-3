@extends('layouts.app')
@section('title','laravel course')
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
@section('head title','welcome laravel course')
@section('content')
<h2 class="text-center">i love laravel</h2>
<h3 class="text-center text-danger">laravel is security</h3>
@endsection