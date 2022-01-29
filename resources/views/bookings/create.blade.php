@extends('layouts.customerTemplate')
@section('content')
<!-- REFER YG ADD BOOKING-->
      <div class="page-wrapper">
        <div class="content container-fluid" style="background-color: #92A9BD;">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Create Booking</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Username</label>
                                    <input type="text" class="form-control @error('cust_username') is-invalid @enderror" id="cust_username" name="cust_username" value="{{ old('cust_username',$customer->cust_username) }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Phone Number</label>
                                    <input type="text" class="form-control @error('cust_phoneNo') is-invalid @enderror" id="cust_phoneNo" name="cust_phoneNo" value="{{ old('cust_phoneNo',$customer->cust_phoneNo) }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" class="form-control @error('cust_address') is-invalid @enderror" id="cust_address" name="cust_address" value="{{ old('cust_address', $customer->cust_address) }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Service Type</label>
                                    <input type="text" class="form-control @error('service_type') is-invalid @enderror" id="service_type" name="service_type" value="{{ old('service_type', @$service->service_type) }}">    
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Service location</label>
                                    <input type="text" class="form-control @error('service_location') is-invalid @enderror" id="service_location" name="service_location" value="{{ old('service_location', @$service->service_location) }}">
                                </div>
                            </div>

                            {{-- Booking status --}}
                            <div class="col-md-4">
                                <div class="form-group">   
                                    <input type="textarea" class="form-control @error('booking_status') is-invalid @enderror" id="booking_status" name="booking_status" hidden value="pending">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date</label>
                                    <div class="cal-icon">
                                        <input type="date" class="form-control datetimepicker @error('date') is-invalid @enderror" name="date">
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                   
                </div>
                <p><p>
                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                     <p><p><button type="submit" class="btn btn-primary"onclick="return confirm('Sure want to Submit')" >Submit</button>
        
                       <a class="btn btn-primary" href="{{ route('search.index') }}"> Back</a>
                   </div>         
            </form> 
        </div>
       
    </div>
    
</div>

@endsection