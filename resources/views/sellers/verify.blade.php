@extends('layouts.sellerTemplate') 
@section('content')

<h2 align="center" style="color:rgb(71, 107, 107);">Verify customer booking</h2>
<br><br>
<div class="row" style="background-color: #92A9BD;">
<div class="col-sm-12" >   
  <table class="table table-striped" style="background-color: #D3DEDC;" >
    <thead style="background-color: rgb(117, 163, 163);">
        <tr align="center" style="color: azure">  
           <th>Customer Name</th>
           <th>Phone No.</th> 
           <th>Address</th> 
           <th>Service type</th> 
           <th>Service location</th> 
           <th>Status</th>     {{--booking status --}}
           <th>Date</th> 
           <th>Time</th> 
          <th colspan = 6>Actions</th>
        </tr>
    </thead>

     <tbody>  

       @foreach($data as $d) 
        <tr align="center">    
            <td>{{ $d->cust_username }}</td>
            <td>{{ $d->cust_phoneNo }}</td> 
            <td>{{ $d->cust_address }}</td> 
            <td>{{ $d->service_type }}</td>  
            <td>{{ $d->service_location }}</td>
            <td>{{ $d->booking_status }}</td>  
            <td>{{ $d->date }}</td>
            <td>{{ $d->time }}</td>
            <td>
                {{-- <a href="{{url('approved',$d->id)}}" class="btn btn-success">Approve</a> --}}
                <a href="{{url('approved',$d->id)}}" class="btn btn-success"onclick="return confirm('Sure want to approve?')" >Approve</a>
            </td>

            <td>
              {{-- <a href="{{url('rejected',$d->id)}}" class="btn btn-danger">Reject</a> --}}
              <a href="{{url('rejected',$d->id)}}" class="btn btn-danger"onclick="return confirm('Sure want to reject?')" >Reject</a>
          </td>
            
        </tr>
     @endforeach
    </tbody> 
  </table>
<div>
</div>

@endsection

