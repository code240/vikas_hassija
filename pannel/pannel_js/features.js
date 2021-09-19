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