
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/webninja.css">
    <script src="../pannel_js/require.js"></script>
    <script type="text/javascript" src="../pannel_js/webninja.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <style>
        body{
            background-color:#F0F8FF;
        }
    </style>
</head>
<body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>


<?php
include "../database.php";
$table = $_POST['table'];
$data = $_POST['data'];
if($table == "courses"){
    $attribute = "course";
}else{
    $attribute = $table;
}

$con = mysqli_connect($a,$b,$c,$d);
if(!$con){
    echo "Database connection failed... Try again";
}
$q = "INSERT INTO $table ($attribute) VALUES ('$data')";
if(mysqli_query($con,$q)){
    echo "<h1>DATA SAVE SUCCESSFULLY</h1>, <h1 style='color:blue;'>Redirecting...</h1><br>";
    echo "<script>custom_alert_info_one_add_data_special('Success','Your data has been successfully added!!');</script>";
    
}else{
    echo "Something went wrong. Data could not be save in database";
}
?>