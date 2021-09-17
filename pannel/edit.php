<?php
    $table = $_GET['tab'];
    if($table == "courses"){
        $attribute = "course";
    }else{
        $attribute = $table;
    }
    $data = "";
    $id = $_GET['id'];
    include "database.php";
    $con = mysqli_connect($a,$b,$c,$d);
    $q = "SELECT $attribute FROM $table WHERE id = $id";
    $d = mysqli_query($con,$q);
    $count = mysqli_num_rows($d);
    if($count == 1){
        while($r = mysqli_fetch_array($d)){
            $data = $r[$attribute];
        }
    }else{
        echo "Duplicacy error!! Please make the database id as primary key.";
        exit;
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edit.css">
    <title>Edit</title>
</head>
<body>
    <header>Update data</header>
    <div class="container-fluid box">
        <form action="backend/update.php" method="post">
            <input type="hidden" name="table" value="<?php echo $table; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <textarea name="data" placeholder="Enter data to update..." class="data-input" id="textarea"><?php echo $data; ?></textarea>
            <input type="submit" value="UPDATE" class="btn btn-primary btn-save">
        </form>
    </div>    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>