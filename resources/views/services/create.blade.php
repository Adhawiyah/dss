@extends('layouts.sellerTemplate')
@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create Service</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('services.store') }}">
          @csrf
          <div class="form-group">    
              <label for="service_type">Service Type:</label>
              <input type="text" class="form-control" name="service_type"/>
          </div>

          <div class="col-md-4">
              <div class="form-group">
                 <label>Location</label>
                    <select class="form-control @error('name') is-invalid @enderror" id="sel3" name="location" value="{{ old('location') }}">
                       <option selected disabled> --Location-- </option>
                      @foreach ($sell as $sellers)  <!-- Location ni ambik dr seller profile ,auto insert here-->
                          <option value="{{ $sellers->location}}">{{ $sellers->location }}</option>
                      @endforeach
                    </select>
                </div>
           </div>

          <div class="col-md-4">
            <div class="form-group">
              <label> Service Status</label> <!--Active/Not Active -->
               <input type="text" class="form-control @error('service_status') is-invalid @enderror" id="" name="service_status">
            </div>
          </div> 
                     
          <button type="submit" class="btn btn-primary-outline">CREATE</button>
      </form>
  </div>
</div>
</div>

@endsection