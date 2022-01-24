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

    <title>DSS</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #93B5C6;">
    <div class="container">
        <a class="navbar-brand" style=color:white; href="#">Daily Services System </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item">
                    <a class="nav-link" style=color:white; href="register">Register</a>
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
                    <div class="card-header">Customer Login</div>
                    <div class="card-body">
                        <form action="{{ route('auth.custCheckReq') }} " method="post">  
                            @csrf

                            <div class="result"> 
                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}} 
                                    </div>
                                @endif

                            </div>


                            <div class="form-group row">
                                <label for="cust_email" class="col-md-4 col-form-label text-md-right" >Email</label>
                                <div class="col-md-6">
                                    <input type="text" id="cust_email" class="form-control" name="cust_email" value="{{ old('cust_email') }}" >
                                    <span class="text-danger">@error('cust_username'){{ $message }} @enderror</span>
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
                                    Login
                                </button>
                                <a href="register" class="btn btn-link">
                                    Register new account
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