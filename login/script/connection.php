<?php      
    $host = "localhost";  
    $user = "aaron";
    $db_name = "otpphp";  
      
    $con = mysqli_connect($host, $user, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>