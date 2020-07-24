<?php
$connn = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($connn));
$query="select * from users";
$res = mysqli_query($connn, $query);
$rows = mysqli_fetch_assoc($res);
 echo $rows['first_name'] ;

 
        ?>