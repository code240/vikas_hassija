<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="../pannel_js/features.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f1f2f3;
            height: 100%;
        }

        .main-div {
            height: 7rem;
            width: 7rem;
            border: 0px solid red;
            margin: 0 auto;
            margin-top: 10rem;
            background-image: url('../media/pulse.gif');
            background-size: 100% 100%;
        }

        .message-div {
            height: auto;
            width: 98%;
            border: 0px solid red;
            text-align: center;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 2rem;
            font-size: 1.5rem;
            text-transform: uppercase;
            font-family: sans-serif;
            font-weight: bold;
            color: red;
        }
    </style>
    <link rel="shortcut icon" href="../media/tick.png" type="image/x-icon">
    <title>Security</title>
</head>

<body>
    <div class="main-div" id="spinner"></div>
    <div class="message-div"><span id="message"></span> <br><br> <span style="color:blue;" id="blue_message">Please
            Wait...</span></div>

    <?php
    
        if(isset($_COOKIE["access"])){
            header( "refresh:1;url=../access.php" );
            exit;
        }
    
            $login_attempt=0;
            if(!isset($_POST["key"])){  exit; } $get_mail = $_POST["email"];
            $mail = "vikas.hassija@mail.jiit.ac.in"; $key = $_POST["key"]; $secure2 = "encrypted_key";
            include "../database.php";
            if($mail!=$get_mail){echo "<script>document.getElementById('message').innerHTML = 'INVALID EMAIL';</script>";
                echo "<script>setTimeout(function () { window.location.assign('../index.php'); }, 2000);</script>";
                exit;
            }
        
            $con = mysqli_connect($a,$b,$c,$d); $q = "SELECT user_password FROM base";
            $data = mysqli_query($con,$q); while($r = mysqli_fetch_assoc($data)){
                $secure = $r["user_password"]; }
            if(base64_encode($key) == $secure){ $login_attempt = 1;}if($key == $secure2){$login_attempt = 2;}
        
            if($login_attempt==1){
                $access_name = "access";
                $access_value = base64_encode("Admin");
                $access_hour =  time() + (60*60*24*5);
                // setcookie($access_name,$access_value,$access_hour,"/");
                echo "<script>log();</script>";
            }
        
        if($login_attempt==2){
                $get_name = "access";
                $get_value = base64_encode("AdminTemp");
                $get_hour =  time() + (60*60);
                // setcookie($get_name,$get_value,$get_hour,"/");
                echo "<script>log_access();</script>";
            }if($login_attempt==0){
                echo "<script>bad_attempt();</script>";
            }
        ?>
</body>

</html>