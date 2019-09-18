<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Login page</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-sm-5 col-md-5 text-center font-weight-bolder"  id="left-div"> TEAM TGA</div>
            <div class="col-sm-7 col-md-7" id="right-div"> 
                <div class="row">
                    <nav class="col-md-12 navbar navbar-light">
                        <a class="navbar-brand h4 font-weight-bolder tga" href="#">BIEM</a>
                        <button class="navbar-toggler nav-btn" type="button" data-toggle="collapse" data-target="#langList">
                            <span class="navbar-toggler-icon"></span>
                        </button>  
                    </nav>
                    <div class="row">
                        <div class="collapse navbar-collapse langs col-12 mt-4 p-2" id="langList">
                            <ul>
                                <li class="active">ENG</li>
                                <li>ESP</li>
                                <li>FRE</li>
                                <li>GER</li>
                                <li>CHI</li>
                            </ul> 
                        </div>  
                    </div>  
                    <form class="py-5 col-md-12">
                        <p class="h5 text-center">LOGIN DETAILS</p>
                        <div class="form-group row">
                            <div class="col-md-10 mx-auto">
                                <input type="email" placeholder="Email Address" class="form-control"> <br>
                                <input type="password" placeholder="Password" class="form-control"> <br>
    
                                <input class="btn btn-primary btn-block mt-3" type="submit" value="Login" style="background:  #162D7D; border: 1px solid #162D7D;"> <br>
                                <p class="row  text-center">
                                    <a href="signup.html" id="no-account" class="col-sm-12 col-md-7">Dont have an account yet? <span class="underline">Sign Up</span></a>  
                                    <a href="reset.html" id="password-reset" class="underline col-sm-12 col-md-5"> Forgot password?</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>