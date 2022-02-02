@extends('layouts.adminTemplate') 
@section('content')

<h2 align="center" style="color:rgb(71, 107, 107);">Verify seller profile</h2>
<br><br>
<div class="row" style="background-color: #92A9BD;">
<div class="col-sm-12" >   
  <table class="table table-striped" style="background-color: #D3DEDC;" >
    <thead style="background-color: rgb(102, 153, 153);">
        <tr align="center" style="color: azure"> 
          <th>Id</th>  
           <th>Seller Name</th>
           <th>Seller Username</th>
           <th>Location</th> 
           <th>Serial.No (OKU)</th> 
           <th>Email</th> 
           <th>Phone No.</th> 
           <th>Status</th>     {{--seller register status --}}
          <th colspan = 6>Actions</th>
        </tr>
    </thead>

     <tbody>  

       @foreach($seller as $s)  
        <tr align="center">
            <td>{{ $s->id }}</td>  
            <td>{{ $s->seller_name }}</td>
            <td>{{ $s->seller_username }}</td> 
            <td>{{ $s->location }}</td> 
            <td>{{ $s->serialNo }}</td>  
            <td>{{ $s->seller_email }}</td>
            <td>{{ $s->seller_phoneNo }}</td>  
            <td>{{ $s->seller_status }}</td>
            <td>
                <a href="{{url('approved',$s->id)}}" class="btn btn-success">Approve</a> 
            </td>

            <td>
              <a href="{{url('rejected',$s->id)}}" class="btn btn-danger">Reject</a>
          </td>
            
        </tr>
      @endforeach 
    </tbody> 
  </table>
<div>
</div>

@endsection

