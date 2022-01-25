@extends('layouts.adminTemplate')
@section('content')


<table class="table table-bordered">
  <tr>
      <th>Id</th> 
      <th>Seller Name</th> 
      <th>Service Status</th>
      <th width="280px">Action</th>
  </tr>
  @foreach ($seller as $s)
  <tr> 
      <b><td>{{ $s->id}}</td>
      <b><td>{{ $s->seller_name}}</td>
      <b><td>{{ $s->seller_name}}</td>  <!-- add service table in Admin controller ??-->
  
  <td>
    <form action="{{route('sellers.destroy', $s->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" type="submit">Delete</button>
    </form>
  </td>
  </tr>
  @endforeach
</table>

@endsection