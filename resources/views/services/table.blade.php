
@extends('layouts.sellerTemplate') 
@section('content')

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


<!--
<div>
    <a style="margin: 19px;" href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>
    </div>  </br>

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">List Service</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
       
        @endif

  <table class="table table-striped">
    
        <tr> 
            <td>ID</td>
            <td>Service Type</td>
            <td>Service Status</td>   
            <td>Options</td>
        </tr>
    
        @foreach($services as $service)
        <tr> 
            <td>{{$service->id}}</td>
            <td>{{$service->service_type}}</td>
            <td>{{$service->service_status}}</td>
            <td>
                <form  action="{{ route('services.destroy',$service->id)}}" method="POST">  
                  
                  <a class="btn btn-primary" href="{{ route('services.edit', $service->id) }}">Edit</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" value="delete">Delete</button>
                </form>
            </td>      
        </tr>
        @endforeach
</table>
</div>
</div>

@endsection -->
