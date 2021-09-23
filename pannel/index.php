<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login to Pannel</title>
</head>
<body>
    <header class="top-head">
        ADMIN
    </header>
    <div class="container-fluid main-div">
        <h1>
            Login
        </h1>
        <div class="container-fluid for-icon">
            <img src="media/user-2.png" alt="user-login-vikas-hassija" class="myicon">
        </div>
        <form action="backend/security.php" name="loginform" method="POST" onsubmit="return valid();">
            <div class="input-group div-group-1 container-fluid ">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group container-fluid ">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                <input type="password" name="key" class="form-control" placeholder="Password..." aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <input type="submit" class="btn btn-primary btn-block submit" >
        </form>
    </div>
<script>
    function valid() {
        var data1 = document.forms['loginform']['email'].value;
        var data2 = document.forms['loginform']['key'].value;
        if(data1 == ""){
            alert("PLEASE ENTER THE EMAIL...");
            return false;
        }
        if(data2 == ""){
            alert("PLEASE ENTER THE PASSWORD...");
            return false;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>