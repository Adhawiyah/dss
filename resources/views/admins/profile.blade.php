@extends('layouts.adminTemplate')
@section('content')


<table class="table table-bordered">
  <tr>
      <th>Id</th> 
      <th>Seller Name</th> 
      <th>Action</th>

  </tr>
  @foreach ($seller as $s)
  <tr> 
      <b><td>{{ $s->id}}</td>
      <b><td>{{ $s->seller_name}}</td>
  </tr>
  <td>
    <form action="{{route('sellers.destroy', $s->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger" type="submit">Delete</button>
    </form>
</td>
  @endforeach
</table>

@endsection