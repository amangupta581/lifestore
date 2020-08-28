<!DOCTYPE html>
<html>
    <head>
        <title>User Registration form</title>
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
          <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       
        <style>
            body, html{
                height: 100%;
            }
            .top_margin{
                margin-top:100px;
            }
            .image{
                 background: url("imge/intro-bg_1.png") no-repeat center;
                 height: 100%;
                 background-size: cover;
            }
            footer{
    background: transparent;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    position: fixed;
    text-align: center;
    width: 100%;
    height: 50px;
}
.para{
    color: white;
    position: relative;
    margin-top: 15px;
   }
        </style>
    </head>
</head>
<body>
    <div class="image">
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Facebook Registration</div>
                    <div class="panel-body">
                        <form class="form" method="POST" action="user_data.php">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                              <div class="form-group">
                                <label for="pwd">password:</label>
                                <input type="password" class="form-control" id="pwd" name="password">
                                <input type="checkbox" onclick="myFunction()">Show Password
                                <script>
                                    function myFunction(){
                                        var x = document.getElementById("pwd");
                                        if(x.type === "password"){
                                            x.type="text";
                                        }else{
                                            x.type="password";
                                        }
                                    }
                                      </script>       
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        </form>
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
