<?php
  // error_reporting(0);
  if(!isset($_COOKIE["access"])){
    header( "refresh:0;url=index.php" );
    exit;
}
  include "database.php";
   $con = mysqli_connect($a,$b,$c,$d);
   if(!$con){
    echo "<h1>Something Went Wrong!! Database could not be access !! <br> Please Reload the page <br><br></h1>";
    exit;
  } 
  $q = "SELECT * FROM experience";
  $data = mysqli_query($con,$q);
  $num_exp = mysqli_num_rows($data);
  if($num_exp!=0){
    $experience = "";
    $i=1;
    while($result = mysqli_fetch_assoc($data)){
        $result['experience'] = str_replace("<","&lt;",$result['experience']);
        $result['experience'] = str_replace(">","&gt;",$result['experience']);
        $experience .= '
        <tr>
          <th scope="row">'.$i.'</th>
          <td class="data">'.$result["experience"].'</td>
          <td><a href="edit.php?tab=experience&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="backend/delete.php?tab=experience&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-danger">Delete</button></a></td>
        </tr>';
        $i++;

    }
  }


?>

<?php
  $q2 = "SELECT * FROM courses";
  $data = mysqli_query($con,$q2);
  $num_course = mysqli_num_rows($data);
  if($num_course!=0){
    $course = "";
    $i=1;
    while($result = mysqli_fetch_assoc($data)){
        $result['course'] = str_replace("<","&lt;",$result['course']);
        $result['course'] = str_replace(">","&gt;",$result['course']);
        $course .= '
        <tr>
          <th scope="row">'.$i.'</th>
          <td class="data">'.$result["course"].'</td>
          <td><a href="edit.php?tab=courses&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="backend/delete.php?tab=courses&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-danger">Delete</button></a></td>
        </tr>';
        $i++;

    }
  }


?>


<?php
  $q2 = "SELECT * FROM project";
  $data = mysqli_query($con,$q2);
  $num_project = mysqli_num_rows($data);
  if($num_course!=0){
    $project = "";
    $i=1;
    while($result = mysqli_fetch_assoc($data)){
        $result['project'] = str_replace("<","&lt;",$result['project']);
        $result['project'] = str_replace(">","&gt;",$result['project']);
        $project .= '
        <tr>
          <th scope="row">'.$i.'</th>
          <td class="data">'.$result["project"].'</td>
          <td><a href="edit.php?tab=project&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="backend/delete.php?tab=project&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-danger">Delete</button></a></td>
        </tr>';
        $i++;

    }
  }


?>



<?php
  $q2 = "SELECT * FROM awards";
  $data = mysqli_query($con,$q2);
  $num_awards = mysqli_num_rows($data);
  if($num_awards!=0){
    $awards = "";
    $i=1;
    while($result = mysqli_fetch_assoc($data)){
        $result['awards'] = str_replace("<","&lt;",$result['awards']);
        $result['awards'] = str_replace(">","&gt;",$result['awards']);
        $awards .= '
        <tr>
          <th scope="row">'.$i.'</th>
          <td class="data">'.$result["awards"].'</td>
          <td><a href="edit.php?tab=awards&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="backend/delete.php?tab=awards&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-danger">Delete</button></a></td>
        </tr>';
        $i++;

    }
  }


?>




<?php
  $q2 = "SELECT * FROM collabration";
  $data = mysqli_query($con,$q2);
  $num_collabration = mysqli_num_rows($data);
  if($num_collabration!=0){
    $collabration = "";
    $i=1;
    while($result = mysqli_fetch_assoc($data)){
        $result['collabration'] = str_replace("<","&lt;",$result['collabration']);
        $result['collabration'] = str_replace(">","&gt;",$result['collabration']);
        $collabration .= '
        <tr>
          <th scope="row">'.$i.'</th>
          <td class="data">'.$result["collabration"].'</td>
          <td><a href="edit.php?tab=collabration&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="backend/delete.php?tab=collabration&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-danger">Delete</button></a></td>
        </tr>';
        $i++;

    }
  }


?>



<?php
  $q2 = "SELECT * FROM conference"; 
  $data = mysqli_query($con,$q2);
  $num_conference = mysqli_num_rows($data);
  if($num_conference!=0){
    $conference = "";
    $i=1;
    while($result = mysqli_fetch_assoc($data)){
        $result['conference'] = str_replace("<","&lt;",$result['conference']);
        $result['conference'] = str_replace(">","&gt;",$result['conference']);
        $conference .= '
        <tr>
          <th scope="row">'.$i.'</th>
          <td class="data">'.$result["conference"].'</td>
          <td><a href="edit.php?tab=conference&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="backend/delete.php?tab=conference&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-danger">Delete</button></a></td>
        </tr>';
        $i++;

    }
  }


?>



<?php
  $q2 = "SELECT * FROM publication";
  $data = mysqli_query($con,$q2);
  $num_publication = mysqli_num_rows($data);
  if($num_publication!=0){
    $publication = "";
    $i=1;
    while($result = mysqli_fetch_assoc($data)){
        $result['publication'] = str_replace("<","&lt;",$result['publication']);
        $result['publication'] = str_replace(">","&gt;",$result['publication']);
        $publication .= '
        <tr>
          <th scope="row">'.$i.'</th>
          <td class="data">'.$result["publication"].'</td>
          <td><a href="edit.php?tab=publication&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="backend/delete.php?tab=publication&id='.$result['id'].'" style="text-decoration:none;"><button class="btn btn-danger">Delete</button></a></td>
        </tr>';
        $i++;

    }
  }


?>
<?php
$q3 = "SELECT * FROM base";
$data = mysqli_query($con,$q3);
while($result = mysqli_fetch_assoc($data)){
  $department = $result["department_home"];
  $university = $result["university_home"];
  $favicon = $result["favicon"];
  $logo = $result["logo"];
  $sidelogo = $result["sidelogo"];
  $you = $result["you"];
  $background = $result["background"];
  $about_url = $result["about_url"];
  $contact_url = $result["contact_url"];
  $governance_url = $result["governance_url"];
  $teaching_method_url = $result["teaching_methodology_url"];
  // $password = $result["user_password"];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="pannel_js/navbar_controller.js"></script>
    <script src="pannel_js/form-validation.js"></script>
    <script src="pannel_js/webninja.js"></script>
    <link rel="stylesheet" href="css/webninja.css">
    <script src="pannel_js/features.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/access.css">
    <style>.background-img{background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('../media/<?php echo $background; ?>');}</style>
    <title>Admin Pannel</title>
</head>
<body>
    <header class="top-head">
        ADMIN Pannel
    </header>
    
    <section class="navbar-section">
      <span class="opt opt1 active" id="opt1" onclick="changeTo('experience')">Experience</span>
      <span class="opt opt2" id="opt2" onclick="changeTo('course')">Courses</span>
      <span class="opt opt3" id="opt3" onclick="changeTo('project')">Projects</span>
      <span class="opt opt4" id="opt4" onclick="changeTo('award')">Awards</span>
      <span class="opt opt5" id="opt5" onclick="changeTo('collabration')">Collabrations</span>
      <span class="opt opt6" id="opt6" onclick="changeTo('conference')">Conferences</span>
      <span class="opt opt7" id="opt7" onclick="changeTo('publication')">Publications</span>
      <span class="opt opt8" id="opt8" onclick="changeTo('other')">Profile setting</span>


    </section>
    <section class="container-fluid whole">
        
        <div class="container-fluid table-div" id="experience">
        <h2>
            Experience
        </h2>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Experience</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($num_exp != 0){
                  echo $experience;
                }
              ?>
            </tbody>
          </table>
          <div class="container-fluid my-groups">
            <span class="new-data-span">ADD NEW DATA : </span>
            <form action="backend/add.php"   onsubmit="return valid_form_1();" name="form1" method="POST">
              <textarea class="input-text" minlength="5" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="experience">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
          </div>
        </div>

        
         

        
        <div class="container-fluid table-div" id="course">
        <h2>
            Courses
        </h2>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Courses</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  if($num_course != 0){
                    echo $course;
                  }
                ?>
            </tbody>
          </table>
          <div class="container-fluid my-groups">
            <span class="new-data-span">ADD NEW DATA : </span>
            <form  action="backend/add.php"  onsubmit="return valid_form_2();" name="form2"  method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="courses">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
          </div>
        </div>

         

        
        <div class="container-fluid table-div" id="project">
        <h2>
            Project
        </h2>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Project</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  if($num_project != 0){
                    echo $project;
                  }
                ?>
            </tbody>
          </table>
          <div class="container-fluid my-groups">
            <span class="new-data-span">ADD NEW DATA : </span>
            <form  action="backend/add.php" onsubmit="return valid_form_3();" name="form3" method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="project">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
          </div>
        </div>

        
         

       
        <div class="container-fluid table-div" id="award">
        <h2>
            Awards / Honours
        </h2>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Awards / Honours</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  if($num_awards != 0){
                    echo $awards;
                  }
            ?>
            </tbody>
          </table>
          <div class="container-fluid my-groups">
            <span class="new-data-span">ADD NEW DATA : </span>
            <form action="backend/add.php" onsubmit="return valid_form_4();" name="form4" method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="awards">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
          </div>
        </div>

        
         

        
        <div class="container-fluid table-div" id="collabration">
        <h2>
            International Collabrations
        </h2>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Collabration</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  if($num_collabration != 0){
                    echo $collabration;
                  }
                ?>
            </tbody>
          </table>
          <div class="container-fluid my-groups">
            <span class="new-data-span">ADD NEW DATA : </span>
            <form action="backend/add.php" onsubmit="return valid_form_5();" name="form5" method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="collabration">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
            
          </div>
        </div>

        
         

      
        <div class="container-fluid table-div" id="conference">
        <h2>
            Conferences
        </h2>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Experience</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  if($num_conference != 0){
                    echo $conference;
                  }
                ?>
            </tbody>
            </tbody>
          </table>
          <div class="container-fluid my-groups">
            <span class="new-data-span">ADD NEW DATA : </span>
            <form action="backend/add.php" onsubmit="return valid_form_6();" name="form6" method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="conference">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
          </div>
        </div>

        
         

        
        <div class="container-fluid table-div" id="publication">
        <h2>
            Publications
        </h2>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Experience</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  if($num_publication != 0){
                    echo $publication;
                  }
                ?>
            </tbody>
          </table>
          <div class="container-fluid my-groups">
            <span class="new-data-span">ADD NEW DATA : </span>
            <form action="backend/add.php" onsubmit="return valid_form_7();" name="form7" method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="publication">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
          </div>
        </div>

        <div class="container-fluid table-div" id="other">
            <!-- FOR PROFILE SETTING -->
            <div class="countainer-fluid background-division">
              <div class="background-img"></div>
              <button class="btn btn-success edit-btn-background" onclick="upload_background_image();">Edit</button>
            </div>
                
            <div class="container-fluid other-table-div">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Data</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>University Home</td>
                    <td><?php echo $university; ?></td>
                    <td><button class="btn btn-success btn-edit" onclick="change_url_university();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Department Home</td>
                    <td><?php echo $department; ?></td>
                    <td><button class="btn btn-success btn-edit" onclick="change_url_department();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>About University Url</td>
                    <td><?php echo $about_url; ?></td>
                    <td><button class="btn btn-success btn-edit" onclick="change_url_about();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Governance url</td>
                    <td><?php echo $governance_url; ?></td>
                    <td><button class="btn btn-success btn-edit" onclick="change_url_governance();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Teaching Methodology</td>
                    <td><?php echo $teaching_method_url; ?></td>
                    <td><button class="btn btn-success btn-edit" onclick="change_url_teaching();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Contact Page url</td>
                    <td><?php echo $contact_url; ?></td>
                    <td><button class="btn btn-success btn-edit" onclick="change_url_contact();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>favicon</td>
                    <td><img src="../media/<?php echo $favicon; ?>" alt="vikas hassija" class="fav-logo-img"></td>
                    <td><button class="btn btn-success btn-edit" onclick="favicon_upload();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>logo</td>
                    <td><img src="../media/<?php echo $logo; ?>" alt="vikas hassija" class="logo-img"></td>
                    <td><button class="btn btn-success btn-edit" onclick="logo_upload();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Side logo</td>
                    <td><img src="../media/<?php echo $sidelogo; ?>" alt="vikas hassija" class="side-logo-img"></td>
                    <td><button class="btn btn-success btn-edit" onclick="sidelogo_upload();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>You</td>
                    <td><img src="../media/<?php echo $you; ?>" alt="vikas hassija" class="you-img"></td>
                    <td><button class="btn btn-success btn-edit" onclick="you_upload();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Password</td>
                    <td>**********</td>
                    <td><button class="btn btn-success btn-edit" onclick="change_password();">Edit</button></td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Information</td>
                    <td>
                      &lt;b&gt;<b>FOR BOLD</b>&lt;/b&gt; <br>
                      &lt;d&gt;<b  style="color:#ff6600;">Dec 2015 – July 2018(date)</b>&lt;/d&gt; <br>
                      &lt;o&gt;<span style="color:#ff6600;font-weight:bold">impact factor</span>&lt;/o&gt; <br>
                      <!-- &lt;b&gt;<b>FOR BOLD</b>&lt;/b&gt; <br> -->
                      <!-- &lt;b&gt;<b>FOR BOLD</b>&lt;/b&gt; <br> -->
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td>Logout</td>
                    <td>Log out from pannel</td>
                    <td><button class="btn btn-danger btn-edit" onclick="logout('access');">Logout</button></td>
                  </tr>
                </tbody>
              </table>
            </div>

        </div>


    </section>
    <div class="clear"></div>



    <div class="black-fix" id="upload">
        <div class="upload-div">
        <span class="cut-sign" onclick="dismiss_upload();"><i class="far fa-times-circle"></i></span>
        <div class="dotted-div">
                <form action="backend/base-controller.php" name="form_img" onsubmit="return img_valid();" method="POST" enctype="multipart/form-data">
                  <div class="cloud-div"><img src="media/cloud.png" alt="cloud" class="cloud-img"></div>
                  <input type="file" name="image" accept="image/*" id="img" autocomplete="off" class="input-file">
                  <input type="hidden" name="what" id="what">
                  <input type="submit" value="Upload" class="btn btn-upload">
                </form>
          </div>
        </div>
    </div>

    
    <div class="black-fix" id="urlchange">
        <div class="upload-div">
        <span class="cut-sign" onclick="dismiss_urlchange();"><i class="far fa-times-circle"></i></span>
        <div class="dotted-div">
                <form action="backend/base-controller.php" name="form_url" onsubmit="return url_valid();" method="POST">
                  <div class="cloud-div"><img src="media/www.png" alt="cloud" class="cloud-img"></div>
                  <input type="text" autocomplete="off" placeholder="Enter the url" style="padding-left:0.6rem;" name="url"  class="input-file">
                  <input type="hidden"  name="what" id="what_url">
                  <input type="submit" value="Update" class="btn btn-upload">
                </form>
          </div>
        </div>
    </div>
  <script>
    function logout(name) {
      document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
      window.location.assign("index.php");
    }
  </script>
    <div class="black-fix" id="password">
        <div class="upload-div ps-div">
        <span class="cut-sign" onclick="dismiss_password();"><i class="far fa-times-circle"></i></span>
        <div class="dotted-div dotted-for-ps">
                <form action="backend/base-controller.php" name="form_ps" onsubmit="return password_valid();" method="POST">
                  <div class="cloud-div"><img src="media/shield.png" alt="cloud" class="cloud-img"></div>
                  <input type="password" placeholder="Old password" style="padding-left:0.6rem;" name="old"  class="input-file input-ps input-1">
                  <input type="password" placeholder="New Password" style="padding-left:0.6rem;" name="new"  class="input-file input-ps">
                  <input type="password" placeholder="Confirm Password" style="padding-left:0.6rem;" name="confirm"  class="input-file input-ps">
                  <input type="hidden" name="what" id="what_ps">
                  <input type="submit" value="Change password" class="btn btn-upload btn-change">
                </form>
          </div>
        </div>
    </div>


    <!-- <div class="black-fix" id="urlchange">
        <div class="upload-div">
        <span class="cut-sign" onclick="dismiss_urlchange();"><i class="far fa-times-circle"></i></span>
        <div class="dotted-div">
                <form action="backend/base-controller.php" method="POST">
                  <div class="cloud-div"><img src="media/www.png" alt="cloud" class="cloud-img"></div>
                  <input type="text" placeholder="Enter the url" style="padding-left:0.6rem;" name="url"  class="input-file">
                  <input type="hidden" name="what" id="what_url">
                  <input type="submit" value="Update" class="btn btn-upload">
                </form>
          </div>
        </div>
    </div> -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

<?php
  mysqli_close($con);
?>