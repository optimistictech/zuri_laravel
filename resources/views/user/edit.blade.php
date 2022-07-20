@extends('user.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit User</div>
  <div class="card-body">
      
      <form action="{{ url('user/' .$user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$user->phone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop