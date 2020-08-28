<?php
session_start();



$conn = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($conn));
 
if(isset($_POST['email'])){
    
    $ema=$_POST['email'];
    $pass=$_POST['password'];
  
    $sql="select * from users where email='".$ema."'AND password='".$pass."' limit 1";
   
    $result= mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)===1){
            
           
$query="select * from users";
$res = mysqli_query($conn, $query);
$rows = mysqli_fetch_assoc($res);
$rows['first_name'] = 
            
            $_SESSION['logged'] = true;
            $_SESSION['name'] = $name;
            
            
        header('Location:http://localhost/form/main.php');
        exit();
        
    }
 else {
        echo "you have entered Incorrect password";
        exit();
    }
}

?>


