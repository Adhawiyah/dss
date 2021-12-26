@extends('layouts.app')
@section('content')
 
<div class="row">
<div class="col-sm-12">  
  <table class="table table-striped">
    <thead>
        <tr> 
        <td>ID</td>
            <th>Service Type</th></br>
            <th>Service Status</th>   
          <th colspan = 4>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr> 
            <td>{{$service->id}}</td>
            <td>{{$service->service_type}}</td>
            <td>{{$service->service_status}}</td>
            <td>
                <form method="POST" action="{{ route('services.destroy',$service->id)}}">  
                  <a class="btn btn-primary" action="{{ route('services.edit',$service->id)}}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" value="delete">Delete</button>
                </form>
            </td>      
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection
