function upload_background_image(){
    document.getElementById("upload").style.display = "block";
    document.getElementById("what").value = "background";
}
function dismiss_upload(){
    document.getElementById("upload").style.display = "none";
}

function favicon_upload(){
    document.getElementById("upload").style.display = "block";
    document.getElementById("what").value = "favicon";
}
function logo_upload(){
    document.getElementById("upload").style.display = "block";
    document.getElementById("what").value = "logo";
}

function sidelogo_upload(){
    document.getElementById("upload").style.display = "block";
    document.getElementById("what").value = "sidelogo";
}

function you_upload(){
    document.getElementById("upload").style.display = "block";
    document.getElementById("what").value = "you";
}


function change_url_university(){
    document.getElementById("urlchange").style.display = "block";
    document.getElementById("what_url").value = "university_home";
}

function change_url_department(){
    document.getElementById("urlchange").style.display = "block";
    document.getElementById("what_url").value = "department_home";
}

function change_url_about(){
    document.getElementById("urlchange").style.display = "block";
    document.getElementById("what_url").value = "about_url";
}
function change_url_governance(){
    document.getElementById("urlchange").style.display = "block";
    document.getElementById("what_url").value = "governance_url";
}
function change_url_teaching(){
    document.getElementById("urlchange").style.display = "block";
    document.getElementById("what_url").value = "teaching_methodology_url";
}
function change_url_contact(){
    document.getElementById("urlchange").style.display = "block";
    document.getElementById("what_url").value = "contact_url";
}


function dismiss_urlchange(){
    document.getElementById("urlchange").style.display = "none";
}

function change_password(){
    document.getElementById("password").style.display = "block";
    document.getElementById("what_ps").value = "password";
}

function dismiss_password(){
    document.getElementById("password").style.display = "none";
}
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function invalid_email() {
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Invalid email <br><br> Try again!!";
        document.getElementById("blue_message").innerHTML = "Redirecting...";
    }, 1000);
    setTimeout(function () {
        window.history.back();
    }, 4000)
}
function log_access() {
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Checking email...";
        setCookie("access", "AdminTemp", 500);
    }, 1000);
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Accessing pannel...";
        // document.getElementById("blue_message").innerHTML = "Redirecting...";
    }, 2000);
    setTimeout(function () {
        document.getElementById("message").innerHTML = "";
        document.getElementById("blue_message").innerHTML = "Getting you to pannel...";
    }, 3000);
    setTimeout(function () {
        window.location.assign("../access.php");
    }, 5000)
}

function bad_attempt() {
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Checking email...";
    }, 1000);
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Checking Password...";
        // document.getElementById("blue_message").innerHTML = "Redirecting...";
    }, 2000);
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Bad attempt... &nbsp; <i class='fas fa-skull-crossbones'></i><br><br>Incorrect password";
        document.getElementById("blue_message").innerHTML = "Redirecting....";
    }, 3000);
    setTimeout(function () {
        window.location.assign("../index.php");
    }, 5000)
}
function log() {
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Checking email...";
        setCookie("access", "Admin", 5);
    }, 1000);
    setTimeout(function () {
        document.getElementById("message").innerHTML = "Checking Password...";
        // document.getElementById("blue_message").innerHTML = "Redirecting...";
    }, 2000);
    setTimeout(function () {
        document.getElementById("message").innerHTML = "";
        document.getElementById("blue_message").innerHTML = "Redirecting to pannel...";
    }, 3000);
    setTimeout(function () {
        window.location.assign("../access.php");
    }, 5000)
}