
@extends('layouts.sellerTemplate') 
@section('content')

<div>
    <a style="margin: 19px;" href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>
    </div>  

<div class="row">
<div class="col-sm-12">   
  <table class="table table-striped">
    <thead>
        <tr> <!-- Services here -->
          <th>ID</th>  
           <th>Service Type</th></br>
           <th>Location</th> 
           <th>Service Status</th>   
          <th colspan = 4>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $s)
        <tr><!-- letak service_type sini-->
            <td>{{$s->id}}</td>  
            <td>{{$s->service_type}}</td>
            <td>{{$s->seller->location}}</td>
            <td>{{$s->service_status}}</td> 
            <td>
                <a href="{{ route('services.edit',$s->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{route('services.destroy', $s->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection

