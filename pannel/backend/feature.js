
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