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
                    <option >Car wash</option>
                    <option >Eldercare</option>
                    <option >Food Catering </option>
                    <option >Grab</option>
                    <option >House cleaning</option>
                    <option >Laundry</option>
                    <option >Nursing </option>
                    <option >Skincare product</option>        
                 </select>   
              <p><p>

                
                <strong>Service Location  :</strong>
                <select class="custom-select" value="{{$service->service_location}}" name="service_location">
                        @foreach ($service as $s)      
                        @endforeach
                              <option >Alor Gajah</option>
                              <option >Masjid Tanah</option>
                              <option >Melaka Tengah</option>
                              <option >Jasin</option>
                       
                 </select><p><p>

                <strong>Service Status  :</strong>
                <select class="custom-select" name="service_status">  
                    @foreach ($service as $s)      
                    @endforeach
                            <option >Active</option>
                            <option >Not Active</option>
                    
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

