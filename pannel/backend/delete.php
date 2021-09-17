<?php
$id = $_GET['id'];
$table = $_GET['tab'];

$url = "deletequery.php?id=$id&tab=$table";

?>
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
    <script>
        custom_confirm_danger_one('Warning','Are you sure you want to delete it?','yes','no');
        function yes(){
            window.location.assign('<?php echo $url; ?>');
        }
        function no(){
            window.history.back();
        }
    </script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
