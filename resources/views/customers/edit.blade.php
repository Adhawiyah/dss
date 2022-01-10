@extends('layouts.customerTemplate')
@section('content')

<!-- EDIT form (profile) -->
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edit Profile</h1>

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
        <form method="post" action="{{ route('customers.update', $customers->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="customer_name"> Name:</label>
                <input type="text" class="form-control" name="customer_name" value={{ $customers->customer_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Username:</label>
                <input type="text" class="form-control" name="seller_username" value={{ $sellers->seller_username }} />
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" value={{ $customers->password }} />
            </div>

            <div class="form-group">
                <label for="serialNo">Serial No.:</label>
                <input type="text" class="form-control" name="serialNo" value={{ $customers->serialNo }} />
            </div>
            
            <div class="form-group">
                <label for="seller_email">Email:</label>
                <input type="text" class="form-control" name="seller_email" value={{ $sellers->seller_email }} />
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" name="location" value={{ $sellers->location }} />
            </div>

            <div class="form-group">
                <label for="seller_phoneNo">Phone Number:</label>
                <input type="text" class="form-control" name="seller_phoneNo" value={{ $sellers->seller_phoneNo }} />
            </div>

            <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
    </div>
</div>
@endsection