@extends('layouts.customerTemplate')
@section('content')
<!-- REFER YG ADD BOOKING-->
      <div class="page-wrapper">
        <div class="content container-fluid">
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
                                    <label> Username:</label>
                                    <input type="text" class="form-control @error('cust_username') is-invalid @enderror" id="sel1" name="cust_username" value="{{ old('cust_username') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Phone Number:</label>
                                    <input type="text" class="form-control @error('cust_phoneNo') is-invalid @enderror" id="sel1" name="cust_phoneNo" value="{{ old('cust_phoneNo') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Service Type</label>
                                    <select class="form-control @error('name') is-invalid @enderror" id="sel2" name="service_type" value="{{ old('service_type') }}">
                                        <option selected disabled> --Service Type-- </option>
                                        @foreach ($ser as $services ) <!--refer bookingController/data auto insert in this after BOOK kat Search page -->
                                        <option value="{{ $services->service_type}}">{{ $services->service_type }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Address :</label>
                                    <input type="textarea" class="form-control @error('cust_address') is-invalid @enderror" id="sel1" name="cust_address">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select class="form-control @error('name') is-invalid @enderror" id="sel3" name="location" value="{{ old('location') }}">
                                        <option selected disabled> --Location-- </option>
                                        @foreach ($sel as $sellers) <!-- refer bookingController/ data auto insert in this after BOOK kat Search page -->
                                        <option value="{{ $sellers->location}}">{{ $sellers->location }}</option>
                                      
                                        <!--<option value="{{ $sellers->location}}">Alor Gajah</option>
                                        <option value="{{ $sellers->location}}">Jasin</option>
                                        <option value="{{ $sellers->location}}">Merlimau</option>
                                        <option value="{{ $sellers->location}}">Masjid Tanah</option> -->
                                        @endforeach
                                    </select>
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
                <button type="submit" class="btn btn-primary">BOOK</button>
            </form>
        </div>
    </div>
</div>

@endsection