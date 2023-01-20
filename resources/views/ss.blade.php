@extends('layouts.app')
@section('title','ss')
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
@section('head title','welcome ss')
@section('content')
<table class="table table-bordered">
  <thead>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>grade</th>
    <th>delete</th>
  </tr>
</thead>
 
    @foreach ($students as $student )
    <tr>
      <td>{{ $student->id }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->grade }}</td>
      <td><form action="{{ route('delete',$student->id ) }}" method="POST">
        @csrf
        <button name="del">delete</button>
      </form>
      <a href="update/{{ $student->id }}"><button>update</button></a>

    </td>
    </tr>
    @endforeach
   
</table>
<form method="POST" action="{{ route('store') }}">
  @csrf
  name: <input class="my-1" type="text" name="student_name" />
  <br>
  email: <input class="my-1" type="text" name="student_email"/>
  <br>
  <button class="my-1" name="insert">insert</button>

</form>
@endsection

<style>
  *{
    text-align: center;
  }
</style>
