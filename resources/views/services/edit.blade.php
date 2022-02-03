@extends('layouts.sellerTemplate') 
@section('content')

<h2 align="center" style="color: #336ea1;">Edit Service</h2>

<div class="row" style="background-color: #92A9BD;">
    <div class="col-sm-8 offset-sm-2">    
       <table class="table table-striped" style="background-color: #92A9BD;">
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
        <form  action="{{ route('services.update', $service->id) }}" method="POST">
            @method('PUT') 
            @csrf
            <div class="form-group">
  
                <br>
                <strong>Service Type  :</strong>
                <select class="custom-select" value="{{$service->service_type}}"  name="service_type">
                    @foreach ($service as $s)   

                    @endforeach  
                    <option value="Car Wash" {{$service->service_type == 'Car wash' ? 'selected' : ''}}>Car wash</option>
                    <option value="Eldercare" {{$service->service_type == 'Eldercare' ? 'selected' : ''}}>Eldercare</option>
                    <option value="Food Catering" {{$service->service_type == 'Food Catering' ? 'selected' : ''}}>Food Catering </option>
                    <option value="Grab" {{$service->service_type == 'Grab' ? 'selected' : ''}}>Grab</option>
                    <option value="House cleaning" {{$service->service_type == 'House cleaning' ? 'selected' : ''}}>House cleaning</option>
                    <option value="Laundry" {{$service->service_type == 'Laundry' ? 'selected' : ''}}>Laundry</option>
                    <option value="Nursing" {{$service->service_type == 'Nursing' ? 'selected' : ''}}>Nursing </option>
                    <option value="Skincare product" {{$service->service_type == 'Skincare product' ? 'selected' : ''}}>Skincare product</option>      
                 </select>   
              <p><p>

                
                <strong>Service Location  :</strong>
                <select class="custom-select" value="{{$service->service_location}}" name="service_location">
                        @foreach ($service as $s)      
                        @endforeach
                              <option value="Alor Gajah" {{$service->service_location == 'Alor Gajah' ? 'selected' : ''}}>Alor Gajah</option>
                              <option value="Masjid Tanah" {{$service->service_location == 'Masjid Tanah' ? 'selected' : ''}}>Masjid Tanah</option>
                              <option value="Melaka Tengah" {{$service->service_location == 'Melaka Tengah' ? 'selected' : ''}}>Melaka Tengah</option>
                              <option value="Jasin" {{$service->service_location == 'Jasin' ? 'selected' : ''}}>Jasin</option> 
                 </select><p><p>

                <strong>Service Status  :</strong>
                <select class="custom-select" name="service_status">  
                    @foreach ($service as $s)      
                    @endforeach
                            <option value="Active" {{$service->service_status == 'Active' ? 'selected' : ''}}>Active</option>
                            <option value="Not Active" {{$service->service_status == 'Not Active' ? 'selected' : ''}}>Not Active</option>
                    
                 </select><p><p>
         </select><p><p>

           {{-- <center> <button type="submit" class="btn btn-primary">SAVE</button> </center> --}}


           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <p><p><button type="submit" class="btn btn-primary"onclick="return confirm('Sure want to Submit')" >Submit</button>
    
            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
          </div>
        </form>
    </div>
</div>

@endsection

