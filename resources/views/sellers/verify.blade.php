@extends('layouts.sellerTemplate') 
@section('content')

<h2 align="center" style="color:rgb(71, 107, 107);">Verify your customer's booking</h2>
<br><br>
<div class="row" style="background-color: #92A9BD;">
<div class="col-sm-12" >   
  <table class="table table-striped" style="background-color: #D3DEDC;" >
    <thead style="background-color: rgb(102, 153, 153);">
        <tr align="center" style="color: azure"> 
          <th>Id</th>  
           <th>Customer Name</th>
           <th>Phone No.</th> 
           <th>Address</th> 
           <th>Service type</th> 
           <th>Service location</th> 
           <th>Status</th>     {{--booking status --}}
           <th>Date</th> 
          <th colspan = 6>Actions</th>
        </tr>
    </thead>

     <tbody>  

       @foreach($data as $d) 
        <tr align="center">
            <td>{{ $d->id }}</td>  
            <td>{{ $d->cust_username }}</td>
            <td>{{ $d->cust_phoneNo }}</td> 
            <td>{{ $d->cust_address }}</td> 
            <td>{{ $d->service_type }}</td>  
            <td>{{ $d->service_location }}</td>
            <td>{{ $d->booking_status }}</td>  
            <td>{{ $d->date }}</td>
            <td>
                <a href="{{url('approved',$d->id)}}" class="btn btn-success">Approve</a>
            </td>

            <td>
              <a href="{{url('rejected',$d->id)}}" class="btn btn-danger">Reject</a>
          </td>
            
        </tr>
     @endforeach
    </tbody> 
  </table>
<div>
</div>

@endsection

