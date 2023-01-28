<?php      
    $host = "containers-us-west-167.railway.app:8055";  
    $user = "root";  
    $password = 'FU67ldenYyvLkbMEHCPz';  
    $db_name = "railway";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  