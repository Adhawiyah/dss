@extends('layouts.customerTemplate')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Filter Example | CodeChief') }}</div>

           <!--Search service type -->
	    		<form action="{{ route('filter') }}" method="GET" style="margin-top: 20px;">
    			<select name="service_id" id="input">  
    				<option value="0">Select Service</option>
    				@foreach (\App\Service::select('id','service_type')->get() as $service)
    					<option value="{{ $service->id }}" {{ $service->id == $selected_id['service_id'] ? 'selected' : '' }}>
    					{{ $service['service'] }}
    				    </option>
    				@endforeach
    			</select>

          <!--Search Location -->
    			<select name="seller_id" id="input">   
    				<option value="0">Select Location</option>
    				@foreach (\App\Seller::select('id','location')->get() as $seller)
					<option value="{{ $seller->id }}" {{ $seller->id == $selected_id['seller_id'] ? 'selected' : '' }}>
					{{ $seller['location'] }}
				    </option>
				    @endforeach
    			</select>
	    		<input type="submit" class="btn btn-danger btn-sm" value="Filter">
	    		</form>

	    	<!-- Display of data table-->
	    		<table class="table table-stripped">
	    			<thead>
	    				<tr>
	    					<th>Id</th>
	    					<th>Service type</th>
	    					<th>Location</th>
	    					<th>Status</th>
                <th>Action</th>  <!-- Insert BOOK button -->
	    				</tr>
	    			</thead>

	    			<tbody>
	    				@forelse($service as $ser )  <!-- Confuse yang ni-->
	    				<tr>
	    					<td>{{ $loop->index+1 }}</td>
	    					<td>{{ $service->name }}</td>
	    					<td>{{ $service->price->price }}</td>
	    					<td>{{ $service->color->name }}</td>
	    				</tr>
	    				@empty
	    				<p> No data Found </p>
	    				@endforelse

	    			</tbody>

	    		</table>
	    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
