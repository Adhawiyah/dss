@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edit Service</h1>

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
        <form method="post" action="{{ route('sellers.update', $sellers->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="seller_name"> Name:</label>
                <input type="text" class="form-control" name="seller_name" value={{ $sellers->seller_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Username:</label>
                <input type="text" class="form-control" name="seller_username" value={{ $sellers->seller_username }} />
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" value={{ $sellers->password }} />
            </div>

            <div class="form-group">
                <label for="serialNo">Serial No.:</label>
                <input type="text" class="form-control" name="serialNo" value={{ $sellers->serialNo }} />
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