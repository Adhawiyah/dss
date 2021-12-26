@extends('layouts.app')
@section('content')

<!-- CREATE -->
<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    <label>Name : </label>
    <input name="cust_name" type="text"/><br>
   

    <label> Username : </label>
    <input name="cust_username" type="string"/><br>

    <label> Password : </label>
    <input name="password" type="password"/><br>

    <label>Address : </label>
    <input name="cust_address" type="text"/><br>

    <label> Phone Number : </label>
    <input name="cust_username" type="string"/><br>

    <label> Email : </label>
    <input name="cust_email" type="email"/><br>
    
    <button type="submit">Submit</button>
</form>

@endsection