@extends('layouts.customerTemplate')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
   <!--SEARCH section-->
<form action="{{route('search.index')}}" method="get">
    
   <div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="text-center" style=color:white;>Let's find service you need </h2>
    </div>

    <div class="panel-body">
        <div class="col-md-3">
            <select class="form-control" name="service_type" id="service_type"> 
                <option selected="false">service type... </option>
                <option >Grab</option>
                <option >Food Catering </option>
                <option >Laundry</option>
                <option >Nursing </option>
                <option >Skincare product</option>
            </select>
        </div>
        
        <div class="col-md-6">
            <select class="form-control" name="service_location" id="service_location">
                <option selected="false">location... </option>
                <option >Alor Gajah</option>
                <option >Jasin </option>
                <option >Masjid Tanah </option>
                <option >Melaka Tengah</option>
            </select>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary rounded" type="submit" id="search">Search<i class=fa fa-search></i>
            </button>
        </div>
    </div>
    </div>
</form>
     <!-- END SEARCH section-->

     <!-- Start List-->

    <div class="row" style="background-color: #92A9BD;">
    <div class="col-sm-12">   
      <table class="table table-striped" style="background-color: #D3DEDC;">
        <thead>
            <tr> <!-- List after Search -->
              <th>ID</th>  
               <th>Seller Name</th>
               <th>Service Type</th> 
               <th>Service location</th> 
               <th>Service Status</th>   
              <th colspan = 6>Actions</th>
            </tr>
        </thead>
         <tbody>
            @foreach($services as $s)
            <tr>
                <td>{{$s->id}}</td>  
                <td>{{$s->seller->seller_name}}</td>  
                 <td>{{$s->service_type}}</td>
                <td>{{$s->service_location}}</td>  
                <td>{{$s->service_status}}</td> 
                <td>
                    <a href="{{ route('bookings.create',$s->id)}}" class="btn btn-primary">BOOK</a>
                </td>     
            </tr>
            @endforeach
        </tbody> 
      </table>
    <div>
    </div>
    
    <!--End List -->
 @endsection
  