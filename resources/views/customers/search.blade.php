@extends('layouts.customerTemplate')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
   <!--SEARCH section-->

   <div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="text-center" style=color:white;>Let's find service you need </h2>
    </div>

    <div class="panel-body">
        <div class="col-md-3">
            <select class="form-control" name="service_type" id="service_type">
                <option selected="false"> Grab </option>
                <option selected="false"> Housekeeping </option>
                <option selected="false"> Food Catering</option>
                <option selected="false"> Laundry </option>
                <option selected="false"> Nursing</option>
            </select>
        </div>
        
        <div class="col-md-6">
            <select class="form-control" name="service_location" id="service_location">
                <option selected="false">Location... </option>
                <option >Alor Gajah</option>
                <option >Jasin </option>
                <option >Masjid Tanah </option>
                <option >Melaka Tengah</option>
            </select>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary rounded" type="submit" id="search" name="search">Search<i class=fa fa-search></i>
            </button>
        </div>
    </div>
</div>
     <!-- END SEARCH section-->
    
 @endsection
  