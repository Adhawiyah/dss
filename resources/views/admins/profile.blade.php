@extends('layouts.adminTemplate')
@section('content')


<table class="table table-bordered">
  <tr>
      <th>Id</th> 
      <th>Seller Name</th> 
      <th>Service Type</th>
      <th>Service Status</th>
      <th width="280px">Action</th>
  </tr>
  @foreach ($service as $s)
  <tr> 
      <b><td>{{ $s->id}}</td>
      <b><td>{{ $s->seller->seller_name}}</td>
      <b><td>{{ $s->service_type}}</td>
      <b><td>{{ $s->service_status}}</td>  <!-- add service table in Admin controller ??-->
  
  <td>
    <form action="{{route('services.destroy', $s->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" type="submit">Delete</button>
    </form>
  </td>
  </tr>
  @endforeach
</table>

@endsection