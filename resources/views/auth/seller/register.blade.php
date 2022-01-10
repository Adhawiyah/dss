<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Laravel</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li> 
            </ul>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Seller Registration</div>
                    <div class="card-body">
                        <form action="{{ route('auth.create') }} " method="post">
                            @csrf
                            <div class="result">
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}} 
                                    </div>
                                @endif

                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}} 
                                    </div>
                                @endif

                            </div>

                            <div class="form-group row">
                                <label for="seller_name" class="col-md-4 col-form-label text-md-right" >Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="seller_name" class="form-control" name="seller_name" value="{{ old('seller_name') }}" >
                                    <span class="text-danger">@error('seller_name'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="serialNo" class="col-md-4 col-form-label text-md-right" value="{{ old('serialNo') }}">Serial No.</label>
                                <div class="col-md-6">
                                    <input type="text" id="serialNo" class="form-control" name="serialNo" >
                                    <span class="text-danger">@error('serialNo'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right" value="{{ old('location') }}">Location</label>
                                <div class="col-md-6">
                                    <input type="text" id="location" class="form-control" name="location" >
                                    <span class="text-danger">@error('location'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seller_phoneNo" class="col-md-4 col-form-label text-md-right" value="{{ old('seller_phoneNo') }}">Phone Number</label>
                                <div class="col-md-6">
                                    <input type="text" id="seller_phoneNo" class="form-control" name="seller_phoneNo" >
                                    <span class="text-danger">@error('seller_phoneNo'){{ $message }} @enderror</span>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="seller_username" class="col-md-4 col-form-label text-md-right" >Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="seller_username" class="form-control" name="seller_username" value="{{ old('seller_username') }}" >
                                    <span class="text-danger">@error('seller_username'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seller_email" class="col-md-4 col-form-label text-md-right" value="{{ old('seller_email') }}">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="seller_email" class="form-control" name="seller_email" >
                                    <span class="text-danger">@error('seller_email'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right" value="{{ old('password') }}">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password"  >
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="login" class="btn btn-link">
                                    Already have an account? Login now
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>







</body>
</html>