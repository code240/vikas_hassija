<?php
include "pannel/database.php";
include "code/ui.php";
include "code/date-controller.php";
$con = mysqli_connect($a,$b,$c,$d);
$query = "SELECT * FROM publication";
$data = mysqli_query($con,$query);
$row = mysqli_num_rows($data);
$i=0;
if($row!=0){
    while($r = mysqli_fetch_assoc($data)){
        $publication[$i] = $r["publication"];
        $publication[$i] = str_replace("<o>",'<span class="impact-factor">',$publication[$i]);
        $publication[$i] = str_replace("</o>",'</span>',$publication[$i]);
        $x = $i+1;
        $readydata[$i] = "<b>".$x.".</b> ";
        $readydata[$i] .= $publication[$i];
        $readydata[$i] .= "<br><br>";
        $i++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <script async src="https://cse.google.com/cse.js?cx=a883e2441a124e650"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1200px.css">
    <link rel="stylesheet" href="css/style768px.css">
    <link rel="stylesheet" href="css/logoAllPx.css">
    <link rel="stylesheet" href="css/style576px.css">
    <link rel="stylesheet" href="css/style500px.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/content500px.css">
    <link rel="shortcut icon" href="media/<?php echo $favicon; ?>" type="image/x-icon">
    <title>Publications</title>
    <style>
        .sidenavbar{
            height:45rem;
        }
        .sidesection{
            height: 45rem;
        }
        .profile-div-main{ background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("media/<?php echo $background; ?>"); }

        @media  screen and (max-width:500px) {
            .sidesection{
                height: fit-content;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="top-section" id="Top">
        <div class="container-fluid row top-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 top-col top-col-1">
                
                <div class="top-logo-div">
                    <img src="media/<?php echo $logo; ?>" onclick="window.location.assign('<?php echo $university_home; ?>');" alt="jiit" class="logo-img">
                </div>
                <div class="top-logotext-div">
                    <img src="media/<?php echo $sidelogo; ?>" alt="jiit" class="logo-img-text">
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 top-col top-col-2 top-col-right">
                <div class="top-options-div">
                    <a href="<?php echo $university_home; ?>" target="_blank" style="text-decoration: none;color:inherit"><span class="opt">University Home</span></a>
                    <!-- <span class="opt">Campus Home</span> -->
                    <a href="<?php echo $department_home; ?>" target="_blank" style="text-decoration: none;color:inherit"><span class="opt">Department Home</span></a>
                </div>
                <div class="search-div">
                    <!-- <input type="text" autocomplete="off" placeholder="Search..." name="search" > -->
                    <!-- <button class="searchbtn"><i class="fas fa-search"></i></button> -->
                    <div class="gcse-search" id="searchbox"></div>
                </div>
                <div class="updation-info-div">
                    <span class="updation-info">
                        Page last updated on <b><?php  echo $date; ?></b>
                    </span>
                </div>
                <div class="colors-div">
                    <div class="color color-yellow"></div>
                    <div class="color color-blue"></div>
                    <div class="color color-red"></div>
                </div>
            </div>
        </div>
    </header>
    <div class="area-line"></div>
    <div class="location-div">
        <span class="font-location">You are here: 
        &nbsp;
        <i class="fas fa-home"></i> &nbsp; 
        <a href="index.php" style="text-decoration: none; color:inherit">Home </a> &rsaquo; Publications &rsaquo;
    </span> &nbsp;
    </div>

    <section class="profile-div-main">
        <div class="row profile-inner-section">
            <div class="col-sm-2 col-0"></div>
            <div class="col-sm-4 col-5 for-image-section">
                <div class="image-container">
                    <img src="media/<?php echo $you; ?>" alt="vikas hassija jiit" class="profile-photo">
                </div>
            </div>
            <div class="col-sm-6 col-6 for-detail-section">
                <span class="profilename">Vikas Hassija,</span><br><span class="acm">ACM Member</span><br>
                <span class="profilepost"><u><i>Assistant Professor, <br> Department of CSE and IT </i></u></span>
            </div>
        </div>
    </section>
<div class="start-banner">
    <span class="word-start" id="currentheading">Publications &nbsp<i class="fas fa-caret-right" id="arrowicon"></i></span>
    <span class="menu-bars-line" onclick="menubar();" id="showmenu"><i class="fas fa-bars"></i></span>
    <span class="menu-bars-line" onclick="hide_menubar();" id="hidemenu"><i class="fas fa-bars"></i></span>

</div>
<div class="mobi-option-div" id="mobi-menubar">
    <a href="index.php" style="text-decoration: none;"><span class="mobi-opt mobi-opt-1 ">Profile</span></a>
    <a href="course.php" style="text-decoration: none;"><span class="mobi-opt mobi-opt-2">Courses</span></a>
    <a href="projects.php" style="text-decoration: none;"><span class="mobi-opt mobi-opt-3">Projects & Awards</span></a>
    <a href="collabration.php" style="text-decoration: none;"><span class="mobi-opt mobi-opt-4">Collabration</span></a>
    <a href="conferences.php" style="text-decoration: none;"><span class="mobi-opt mobi-opt-5">Conferences</span></a>
    <a href="publications.php" style="text-decoration: none;"><span class="mobi-opt mobi-opt-6 active">Publications</span></a>
</div>


<nav class="sidenavbar">
    <a href="index.php" style="text-decoration:none;"><span class="navbar-options nav-1">Profile <b>&#8250;</b></span></a>
    <a href="course.php" style="text-decoration:none;"><span class="navbar-options nav-2">Course <b>&#8250;</b></span></a>
    <a href="projects.php" style="text-decoration:none;"><span class="navbar-options nav-3">Projects / Awards <b>&#8250;</b></span></a>
    <a href="collabration.php" style="text-decoration:none;"><span class="navbar-options nav-4">Collabration <b>&#8250;</b></span></a>
    <a href="conferences.php" style="text-decoration:none;"><span class="navbar-options nav-5">Conferences <b>&#8250;</b></span></a>
   <span class="navbar-options nav-6"><b>Publications &#8250;</b></span>
</nav>
<!-- ####################### CONTENT SECTION ####################### -->
<section class="sidesection">
    <h1 class="main_name">
        Vikas Hassija, Assistant Professor
    </h1>
    <span class="info email-info">
        <i class="fas fa-envelope"></i> &nbsp; vikas.hassija@jiit.ac.in
    </span><br>
    <span class="info email-info">
        <i class="fas fa-phone-alt"></i> &nbsp; +91 8826140111
    </span><br>
    <span class="info email-info">
        <i class="fab fa-skype"></i> &nbsp; vikas.hassija@gmail.com
    </span><br>
    <span class="info web-info text-truncate">
        <span class="scholar-url text-truncate"> <i class="fas fa-graduation-cap"></i> &nbsp; <a href="https://scholar.google.com/citations?user=MMkXe-IAAAAJ&hl=en" style="text-decoration: none;"> https://scholar.google.com/citations?user=MMkXe-IAAAAJ&hl=en </a> </span>
    </span><br>
    <span class="info dob-info">
       <b>Date of Birth:</b> 19 April 1987
    </span><br>
    <span class="info dob-info">
       <b>Gender: </b>Male
    </span>

    <h2 class="info-subheading">
        Publications Summary
    </h2>
    <p class="education-info coursename project-text">
        &bull; No. of SCI journals: 26, <br>
        &bull; No. of papers in IEEE Journals/ Magazines (total): 16, <br>
        &bull; No. of papers in IEEE Magazines (e.g. IEEE Communications mag., IEEE Network): 4, <br>
        &bull; No. of papers in IEEE Transactions (e.g. TVT,TNSE,IoT Journal): 8, <br>
        &bull; No. of papers in IEEE Communications survey and tutorial (Impact factor 22): 1 <br>
        &bull; No. of citations in google scholar: 1067
       
    </p>
   
    <h2 class="info-subheading">
        Publications
    </h2>
    <span class="taught-heading">Journals (SCI indexed, IF: Impact factor) : Published</span>

    <p class="education-info coursename project-text">
        <?php
            if($row != 0){
                for($j=0;$j<$i;$j++){
                    echo $readydata[$j];
                }
            }
        ?> 
        
    </p>
  

</section>
<!-- ####################### CONTENT SECTION OVER ####################### -->

<div class="area-line2">
    <div class="getintouch">
       <span>Get In Touch</span>
    </div>
</div>
<footer class="foot">
    <div class="container-fluid row footer-row">
        <div class="col-xl-6 col-lg-8 col-md-12 col-12 adressive-block">
            <div class="for-bottom-logo">
                <div class="for-bottom-image">
                    <img src="media/<?php echo $logo; ?>" onclick="window.location.assign('<?php echo $university_home; ?>');"  alt="Jiit-logo" class="bottom-logo">
                </div>
                <div class="for-bottom-textimage">
                    <img src="media/<?php echo $sidelogo; ?>" alt="jiit" class="bottom-textlogo">
                </div>
            </div>
            <address class="address-text">
                A-10, Sector-62, ,Noida-201 309,
                Uttar Pradesh, India.<br>
                <span class="address-text-2">Vikas Hassija,<br>
                    <i class="fas fa-phone-alt"></i> <a href="tel:8826140111" style="text-decoration: none;color:inherit">+91 8826140111</a><br>
                    <i class="fas fa-envelope"></i><a href="mailto:vikas.hassija@mail.jiit.ac.in" style="text-decoration: none;color:inherit"> vikas.hassija@mail.jiit.ac.in</a> </span><br>
            </address>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 links-block-1">
            <span class="quick-heading">Quick Links</span>
            <span class="bolts">&compfn;</span><a href="index.php" ><span class="quick-item quick-1">Profile</span></a><br>
            <span class="bolts">&compfn;</span><a href="course.php" ><span class="quick-item quick-2">Course</span></a><br>
            <span class="bolts">&compfn;</span><a href="projects.php" ><span class="quick-item quick-3">Projects</span></a><br>
            <span class="bolts">&compfn;</span><a href="collabration.php" ><span class="quick-item quick-4">Collabration</span></a><br>

        </div>
        <div class="col-xl-2 col-lg-4  col-md-4 col-sm-4 col-12 links-block-1">
            <span class="quick-heading">Main Links</span>
            <span class="bolts">&compfn;</span><a href="<?php echo $about_url; ?>" target="_blank" ><span class="quick-item quick-1">About</span></a><br>
            <span class="bolts">&compfn;</span><a href="<?php echo $governance_url; ?>"  target="_blank"><span class="quick-item quick-2">Governance</span></a><br>
            <span class="bolts">&compfn;</span><a href="<?php echo $teaching_methodology; ?>"  target="_blank"><span class="quick-item quick-3">Teaching Methodology</span></a><br>
            <span class="bolts">&compfn;</span><a href="<?php echo $contact_url; ?>"  target="_blank"><span class="quick-item quick-4">Contact Us</span></a><br>

        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 links-block-1">
            <span class="quick-heading">Home</span>
            <span class="bolts">&compfn;</span><a href="<?php echo $university_home; ?>"  target="_blank"><span class="quick-item quick-1">University Home</span></a><br>
            <span class="bolts">&compfn;</span><a href="<?php echo $department_home; ?>"  target="_blank"><span class="quick-item quick-2">Department Home</span></a><br>
            <span class="bolts">&compfn;</span><a href="#Top"  ><span class="quick-item quick-3">Back To Top</span></a><br>
        </div>
    </div>
</footer>
<footer class="last">
    © Copyright 2021 - JIIT - All Rights Reserved | Disclaimer
</footer>


<script src="jscode/main.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>