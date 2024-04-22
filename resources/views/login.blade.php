@extends('layout.master')
@section('container')

<div class="container">

@if ($errors->any())
  <h4 class='alert alert-danger' role='alert'>
    {{$errors->first()}}
  </h4>
@endif

<form action="{{url('authenticate')}}" method = "POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop