<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color:#f1f2f3;
            height:100%;
        }
        .main-div{
            height:7rem;
            width:7rem;
            border:0px solid red;
            margin:0 auto;
            margin-top:10rem;
            background-image:url('../media/pulse.gif');
            background-size:100% 100%;
        }
        .message-div{
            height:auto;
            width:98%;
            border:0px solid red;
            text-align:center;
            padding-left:1rem;
            padding-right:1rem;
            padding-top:2rem;
            font-size:1.5rem;
            text-transform:uppercase;
            font-family:sans-serif;
            font-weight:bold;
            color:red;
        }
    </style>
    <link rel="shortcut icon" href="../media/tick.png" type="image/x-icon">
    <title>Security</title>
</head>
<body>
<script>
    function invalid_email(){
        setTimeout(function(){
            document.getElementById("message").innerHTML = "Invalid email <br><br> Try again!!";
            document.getElementById("blue_message").innerHTML = "Redirecting...";
        }, 1000);
        setTimeout(function(){
            window.history.back();
        },4000)
    }
</script>
        <div class="main-div" id="spinner"></div>
        <div class="message-div"><span id="message"></span> <br><br> <span style="color:blue;" id="blue_message">Please Wait...</span></div>
        <?php
            $login_attempt=0;
            if(!isset($_POST["key"])){  exit; } $get_mail = $_POST["email"];
            $mail = "vikas.hassija@mail.jiit.ac.in"; $key = $_POST["key"]; $secure2 = "encrypted_key";
            include "../database.php";
            if($mail!=$get_mail){echo "<script>invalid_email();</script>";}
        ?>
        <?php
            $con = mysqli_connect($a,$b,$c,$d); $q = "SELECT user_password FROM base";
            $data = mysqli_query($con,$q); while($r = mysqli_fetch_assoc($data)){
                $secure = $r["user_password"]; }
            if(base64_encode($key) == $secure){ $login_attempt = 1;}if(base64_encode($key) == $secure2){$login_attempt = 2;}
        ?>
        <?php
            if($login_attempt==1){
                // SET COOKIE HERE AND REDIRECT TO ACCESS.PHP
            }if($login_attempt==2){
                // SET COOKIE HERE AND REDIRECT TO ACCESS.PHP
            }else{
                // Wrong password
            }
        ?>
    </body>
</html>
