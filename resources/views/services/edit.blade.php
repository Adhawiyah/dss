@extends('layouts.sellerTemplate') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edit Service</h1>

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

                <label for="service_type">Service Type:</label>
                <input type="text" class="form-control" name="service_type" value="{{$service->service_type}}" />
            </div>

            <strong>Location  :</strong>
             <select class="custom-select" name="seller_id">
              <option selected disabled>Select location</option>
                 @foreach ($seller as $id => $location )
                    <option
                        value="{{$id}}" {{ (isset($service['seller_id']) && $service['seller_id'] == $id) ? ' selected' : '' }}>{{$location}}</option>
                  @endforeach
      </select><p><p>

            <div class="form-group">
              <label for="service_status">status:</label>
              <input type="text" class="form-control" name="service_status" value="{{$service->service_status}}"/>
          </div>

            <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
    </div>
</div>
@endsection