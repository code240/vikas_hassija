<?php
include "database.php";
$d_con = mysqli_connect($aa,$bb,$cc,$dd);
date_default_timezone_set('Asia/Kolkata');
$today = (int)date("d");
$d_q = "SELECT today,date_control FROM base";
$d_data = mysqli_query($d_con,$d_q);
while($d_result = mysqli_fetch_assoc($d_data)){
    $date_control = (int)$d_result['date_control'];
    $date_today = (int)$d_result['today'];
}
if($date_today != $today){
    $z = $date_control + 1;
    if($z==6){
        $z=1;
        $d_today = date("d");
        $d_month = date("m");
        $d_year = "20".date("y");
        $d_day = date("l");
        if($d_month == "01" ){
            $d_month = "January";
        }
        if($d_month == "02" ){
            $d_month = "February";
        }
        if($d_month == "03" ){
            $d_month = "March";
        }
        if($d_month == "04" ){
            $d_month = "April";
        }
        if($d_month == "05" ){
            $d_month = "May";
        }
        if($d_month == "06" ){
            $d_month = "June";
        }
        if($d_month == "07" ){
            $d_month = "July";
        }
        if($d_month == "08" ){
            $d_month = "August";
        }
        if($d_month == "09" ){
            $d_month = "September";
        }
        if($d_month == "10" ){
            $d_month = "October";
        }
        if($d_month == "11" ){
            $d_month = "November";
        }
        if($d_month == "12" ){
            $d_month = "December";
        }
        $date = $d_day.", ".$d_month." ".$d_today.", ".$d_year;
        $d_q = "UPDATE base SET main_date = '$date',today = $today,date_control = $z WHERE id = 1";
        mysqli_query($d_con,$d_q);   
    }else{
        $d_q = "UPDATE base SET today = $today,date_control = $z WHERE id = 1";
        mysqli_query($d_con,$d_q);   
        $d_q = "SELECT main_date FROM base";
        $d_data = mysqli_query($d_con,$d_q);
        while($d_r = mysqli_fetch_assoc($d_data)){
            $date = $d_r["main_date"];
        } 
    }
}
if($date_today == $today){
    $d_q = "SELECT main_date FROM base";
    $d_data = mysqli_query($d_con,$d_q);
    while($d_r = mysqli_fetch_assoc($d_data)){
        $date = $d_r["main_date"];
    } 
}


mysqli_close($d_con);
?>