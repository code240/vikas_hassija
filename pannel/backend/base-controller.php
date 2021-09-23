<?php
    $what = $_POST["what"];
    $image_type = ["background","favicon","logo","sidelogo","you"];
    $url_type = ["university_home","department_home","about_url","governance_url","teaching_methodology_url","contact_url"];
    if(in_array($what,$image_type)){
        image();
    }
    if($what == "password"){
        change_password();
    }
    if(in_array($what,$url_type)){
        url();
    }


    function url(){
        include "../database.php";
        $what = $_POST["what"];
        $con = mysqli_connect($a,$b,$c,$d);
        $url = $_POST["url"];
        $q = "UPDATE base SET $what = '$url' WHERE id = 1";
        if(mysqli_query($con,$q)){
            echo "<h1> Change Successfully !!! <span style='color:blue;'>Redirecting...</span></h1>";
            header("Refresh:2; url=../access.php");
            exit;
        }
    }






    // for change in password
    function change_password(){
        include "../database.php";
        $old = $_POST["old"];
        $new = $_POST["new"];
        $confirm = $_POST["confirm"];
        $what = $_POST["what"];
        $con = mysqli_connect($a,$b,$c,$d);
        
        $q = "SELECT * FROM base";
        $data = mysqli_query($con,$q);
        while($r = mysqli_fetch_assoc($data)){
            $password = base64_decode($r["password"]);
        }
        if($password != $old){
            echo "<h1>Old Password Dismatch!!! <span style='color:blue;'>Redirecting...</span></h1>";
            header("Refresh:2; url=../access.php");
            exit;
        }
        if($new != $confirm){
            echo "<h1> Password Dismatch!!! <span style='color:blue;'>Redirecting...</span></h1>";
            header("Refresh:2; url=../access.php");
            exit;
        }
        $encode_password = base64_encode($new);
        $q = "UPDATE base SET password = '$encode_password' WHERE id = 1";
        if(mysqli_query($con,$q)){
            echo "<h1> Change Successfully !!! <span style='color:blue;'>Redirecting...</span></h1>";
            header("Refresh:2; url=../access.php");
            exit;
        }
        echo $password;
    }


    // for image uploadation
    function getnewname($getname){
        $extension_array = explode(".",$getname);
        $array_len = count($extension_array);
        $extension = $extension_array[$array_len-1];
        date_default_timezone_set('Asia/Kolkata');
        $time = date("d_m_y_h_i_s_");
        $explode = explode(".",microtime());
        $microtime = $explode[1];
        $imagename = "vikas-hassija-".$time.$microtime.".".$extension;
        return $imagename;
    }
    
    function image(){
        include "../database.php";
        $con = mysqli_connect($a,$b,$c,$d);
        $what = $_POST["what"];
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"]; 
        if($filename==""){
            echo "<h1> SELECT A FILE PLEASE! <span style='color:blue;'>Redirecting...</span></h1>";
            header("Refresh:2; url=../access.php");
            exit;
        }
        $newname = getnewname($filename);
        $folder = "../../media/".$filename;
        if(move_uploaded_file($tempname,$folder)){
            $filePath = '../../media/'.$filename;    
            $destinationFilePath = '../../media/'.$newname; 
            if(rename($filePath,$destinationFilePath)){
                $q = "UPDATE base SET $what = '$newname' WHERE id = 1";
                if(mysqli_query($con,$q)){
                    echo "<h1> Upload Successfully!!! <span style='color:blue;'>Redirecting...</span></h1>";
                    header("Refresh:1; url=../access.php");
                    exit;
                }
            }
        }
    }
    
?>