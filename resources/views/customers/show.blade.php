@extends('layouts.app')  <!-- View list details of Customer // this page???-->
@section('content')

<h1>CUSTOMER</h1>

<table>
    <tbody>
        <tr>
            <th> Name :</th></br>
            <th> Username :</th>
            <th>Password :</th></br>
            <th>Address :</th>
            <th>Phone Number :</th></br>
            <th>Email :</th>
            <th>Action</th>
        </tr>
@foreach ($customers as $customer)
<tr>
    <td>{{$customer->cust_name}}</td>
    <td>{{$customer->cust_username}}</td>
    <td>{{$customer->cust_password}}</td>
    <td>{{$customer->cust_address}}</td>
    <td>{{$customer->cust_phoneNo}}</td>
    <td>{{$customer->cust_email}}</td>
    <td><form action="{{ route('customers.destroy', $customer->id)}}" method="POST">
        @csrf
        <button type="submit">Delete</button>
    </form></td>
</tr>
@endforeach

</tbody>
</table>
<a href="{{ route('customers.create') }}">Create Profile</a>
@endsection