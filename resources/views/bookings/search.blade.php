@extends('layouts.customerTemplate')
@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row">
     <div class="col-md-6">
        <h1>SEARCH PAGE</h1>
    </div>
    
    <div class="col-md-4">   
        <form action="/search" method="get">
         <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="service type">
            </div>
            <div class="col-lg-5">
                <input  name="finish_date"  class="form-control m-input start_date" autocomplete="off">
             </div>
            <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
         </div>
     </form>
    </div> 
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Seller Name</th>
            <th>Service type</th>
            <th>Location</th>
            <th>Status</th>
            <th width="250">Action</th>
        </tr>
    </thead>
    <tbody>
         @foreach($services as $service)
            <tr> 
             <td>{{$service->id}}</td>
             <td>{{$service->seller_name}}</td>
             <td>{{$service->service_type}}</td>
             <td>{{$service->location}}</td>
             <td>{{$service->service_status}}</td>
            <td>
                <form  action="{{ route('services.destroy',$service->id)}}" method="POST">  
                  
                  <a class="btn btn-primary" href="{{ route('services.edit', $service->id) }}">Edit</a>
                  <a class="btn btn-info" href="{{ route('services.edit', $service->id) }}">Show</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" value="delete">Delete</button>
                </form>
            </td>      
        </tr>
        @endforeach

    </tbody>
   

@endsection
