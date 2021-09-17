<?php
    $con = mysqli_connect("localhost","root","","vikas");
    if($con){
        echo "successfull connection!!<br><br>";
    }
    $q = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES 
    WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='vikas'";
    $data = mysqli_query($con,$q);
    $i = 0;
    while($result = mysqli_fetch_assoc($data)){
        echo $result['TABLE_NAME']."<br>";        
        // echo "hii";
    }

?>