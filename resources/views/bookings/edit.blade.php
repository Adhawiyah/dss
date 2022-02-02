@extends('layouts.customerTemplate')
@section('content')

<!-- EDIT BOOKING-->
      <div class="page-wrapper">
        <div class="content container-fluid" style="background-color: #92A9BD;">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Edit Booking</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('bookings.update',$booking->id) }}" method="POST" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Id</label>                                                                             
                                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="book_id" name="book_id" value="{{ old('book_id',$booking->id) }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Service Type</label>
                                    <input type="text" class="form-control @error('service_type') is-invalid @enderror" id="service_type" name="service_type" value="{{ $booking->service_type }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Service Location </label>
                                    <input type="text" class="form-control @error('service_location') is-invalid @enderror" id="service_location" name="service_location" value="{{ $booking->service_location }}">
                                </div>
                            </div>
                            
                             {{-- Date --}}
                            <div class="col-md-4">
                              <div class="form-group">
                                  <label>Date</label>
                                  <div class="cal-icon">
                                      <input type="date" class="form-control datetimepicker @error('date') is-invalid @enderror" name="date" value="{{$booking->date}}">
                                  </div>
                              </div>
                          </div>     
                          
                            {{-- Time --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Time</label>
                                    <div class="cal-icon">
                                        <input type="Time" class="form-control datetimepicker @error('time') is-invalid @enderror" name="time" value="{{$booking->time}}">
                                    </div>
                                </div>
                            </div> 

                            {{-- Booking status --}}
                            <div class="col-md-4">
                                <div class="form-group">   
                                    <input type="textarea" class="form-control @error('booking_status') is-invalid @enderror" id="booking_status" name="booking_status" hidden value="pending">
                                </div>
                            </div>  
                        </div>
                    </div>
                   
                </div>
                <p><p>
                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      
                     <p><p><button type="submit" class="btn btn-primary"onclick="return confirm('Sure want to Submit')" >Save</button>
        
                       <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
                   </div>         
            </form> 
        </div>
       
    </div>
    
</div>

@endsection