@extends('layouts.adminTemplate')
@section('content')

<div class="row">
<div class="col-sm-12">  
<table class="table table-bordered" style="background-color: #abcbd3;">

  <tr>
    <thead align="center" bgcolor="#95B9C7" >
      <th>Id</th> 
      <th>Seller Name</th> 
      <th>Service Type</th>
      <th>Service Status</th>
      <th width="280px">Action</th>
    </thead>
  </tr>

  @foreach ($service as $s)
  <tr align="center"> 
      <b><td>{{ $s->id}}</td>
      <b><td>{{ $s->seller->seller_name}}</td>
      <b><td>{{ $s->service_type}}</td>
      <b><td>{{ $s->service_status}}</td>  
  
  <td>
    <center>
    <form action="{{route('services.destroy', $s->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" type="submit">Delete</button>
    </form>
  </center>
  </td>
  </tr>
  @endforeach
</table>
</div>
</div>

@endsection