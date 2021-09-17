<?php
  // error_reporting(0);
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="pannel_js/navbar_controller.js"></script>

    <script src="pannel_js/webninja.js"></script>
    <link rel="stylesheet" href="css/webninja.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/access.css">
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
            <form action="backend/add.php" method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
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
            <form action="backend/add.php" method="POST">
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
            <form action="backend/add.php" method="POST">
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
            <form action="backend/add.php" method="POST">
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
            <form action="backend/add.php" method="POST">
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
            <form action="backend/add.php" method="POST">
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
            <form action="backend/add.php" method="POST">
              <textarea class="input-text" placeholder="Type here..." name="data"></textarea>
              <input type="hidden" name="table" value="publication">
              <input type="submit" class="btn btn-primary add" value="ADD">
            </form>
          </div>
        </div>

        <div class="container-fluid table-div" id="other">
            <!-- FOR PROFILE SETTING -->
            
        </div>


    </section>
    <div class="clear"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

<?php
  mysqli_close($con);
?>