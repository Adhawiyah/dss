@extends('layouts.sellerTemplate')
@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3" style=font-family:courier;>Create Service</h1>
  <div>

   @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  

  <form action="{{ route('services.store') }}" method="POST">
    @csrf
  
    <div class="row" style="background-color: #D3DEDC;">
          {{-- <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong style=font-family:courier;> Service Type:</strong>
                
                <input style="text-transform:uppercase" type="text" name="service_type" class="form-control" placeholder="service type" required>
            </div>
          </div> --}}
          
          <br>
                 <strong >Service Type  :</strong>
                 <select class="custom-select" name="service_type">
                 <option selected disabled>select service type...</option>
                 <option >Food Catering</option>
                     <option >Grab</option>
                     <option >Nursing</option>
                      <option >Laundry</option>
                      <option >Skincare product</option>
                 </select>  <br><br>
                 <p>
                 <strong >Service Status  :</strong>
                 <select class="custom-select" name="service_status">
                 <option selected disabled>select service status...</option>
                 <option >Active</option>
                 <option >Not Active</option>
                 </select>   <br>
             <p>
              
        <strong >Service Location  :</strong>
        <select class="custom-select" name="service_location">
        <option selected disabled>select service location...</option>
          <option >Alor Gajah</option>
          <option >Masjid Tanah</option>
          <option >Melaka Tengah</option>
          <option >Jasin</option>
        </select>  
            <P>
            {{-- @foreach ($seller as $id => $location )
            <option></option>
                    <option
                        value="{{$id}}" {{ (isset($ervices['seller_id']) && $services['seller_id'] == $id) ? ' selected' : '' }}>{{$location}}</option>
                @endforeach --}}
      </select><p><p>


      <p><p>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p><p><button type="submit" class="btn btn-primary"onclick="return confirm('Sure want to Submit')" >Submit</button>
        
                <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
        </div>
    </div>
   </form>
  </div>
</div>
</div>

@endsection