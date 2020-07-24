<!doctype html>
<html>
    <head>
        <title>
            login
        </title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
          <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            body, html{
    height: 100%;
    width: 100%;
    margin: 0px;
    padding: 0px;
}
body{
    background: url("imge/xnx.jpg") no-repeat center;
    background-size: cover;
    background-attachment: fixed;
    font-family: new time roman;
}
h1{
    font-size: 50px;
    color: black;
    padding-top: 70px;
    margin:100px,0px,70px,0px;
}
.input-group{
    margin-top: 30px;
}
.input-group-addon{
    background: transparent;
    border-radius: 0px;
    border: 0px;
    border-bottom: 1px solid grey;
    font-size: 20px;
    color: black;
}
.form-control{
    background: transparent;
    border-radius: 0px;
    border:0px;
    border-bottom: 1px solid #ffc0cb;
    font-size: 22px;
    height: 40px;
    padding: 21px;
}
input[type="checkbox"]{
    margin-top: 23px;
    color: black;
    font-size: 15px;
}
p, small{
    margin-top: 20px;
    color: black;
    font-size: 15px;
    
}
.btn-success{
    margin-top: 40px;
    margin-left: 200px;
    align-items: center;
    width: 200px;
    background:#A9A9A9; 
}
h2{
    font-size: 33px;
    background: grey;
    width: 65px;
    border-radius: 100px;
    margin-left: 270px;
    padding-top: 10px;
}
.btn-info{
    margin-top: 20px;
    width: 50%;
    
}
.btn-primary{
    margin-top: 20px;
    width: 50%;
    margin-left: 140px;
}
footer{
    background: transparent;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    position: fixed;
    text-align: center;
    width: 100%;
    
}
.para{
    color: white;
}
       </style>
        
 
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">Login</h1>
                <form class="form" method="POST" action="login_user.php">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" name="email" placeholder="Email id">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="checkbox"><small>Remember me</small>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><p class="text-right">Forget Password?</p></a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success" value="login_submit">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
                     <h2 class="text-center">OR</h2>
                      <div class="row">
                        <div class="col-md-6">
                            <a href="#"><div class="btn btn-info">Facebook</div></a>
                        </div>
                           <div class="col-md-6">
                             <a href="#"><div class="btn btn-primary">Google</div></a>
                            </div>
                      </div>
                </div>
              </div>
            </div>
        </div>
         <footer>
    <div class="container">
        <p class="para">
            Copyright © Lifestyle Store. All Rights
Reserved | Contact Us: +91 95750 37200 | Aman Kumar Gupta
        </p>
        
    </div>
    </footer>
      </body>
</html>

    
  
    
