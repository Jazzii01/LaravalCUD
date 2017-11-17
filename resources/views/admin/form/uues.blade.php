@extends('admin.ft')

@section('conten')
<h3>Create</h3>
<div class="container">
  <div class="row">
    <form action="{{$url}}" method="POST">
      {{method_field($method)}}
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$obj->name or ''}}">
      </div>
    </div>
    <div class="form-group">
      <label for="ark">Toppic Ark</label>
      <textarea class="form-control" name="ark" row="5" cols="20" >{{$obj->ark or ""}}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop
