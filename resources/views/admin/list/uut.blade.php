@extends('admin.ft')

@section('conten')
<div class="container">
  <div class="row">

    <table class="table table-bordered">
      <tr>
        <th>
          ID
        </th>
        <th>
          Name
        </th>
        <th>
          Toppic
        </th>
        <th>
          Action
        </th>
        <th>
          Action
        </th>
      </tr>
      @foreach($objs as $row)
      <tr>
        <td>
          {{$row->id}}
        </td>
        <td>
          {{$row->name}}
        </td>
      <td>
          {{$row->ark}}
        </td>
      <td>
        <form action="{{url('admin/uues/'.$row->id)}}" method="post" onsubmit="return(alert('ลบจริงดิ'))">
          {{method_field('DELETE')}}
          {{ csrf_field() }}

          <button type="submit" class="btn btn-danger">Delete</button>
        <!-- <a class="btn btn-danger" href="{{url('admin/uues')}}" >Delete</a> -->
        </form>
      </td>
      <td>
          <a href="{{url('admin/uues/'.$row->id.'/edit')}}" class="btn btn-info">
          Edit</a>
        </td>
      </tr>
      @endforeach
    </table>
    <a class="btn btn-primary" href="{{url('admin/uues/create')}}" >Add</a>
  </div>
</div>




@stop
