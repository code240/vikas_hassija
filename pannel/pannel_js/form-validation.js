function valid_form_1(){
    var data = document.forms['form1']['data'].value;
    if(data == ""){
        alert("PLEASE ENTER THE EXPERIENCE DATA...");
        return false;
    }
}
function valid_form_2(){
    var data = document.forms['form2']['data'].value;
    if(data == ""){
        alert("PLEASE ENTER THE COURSES DATA...");
        return false;
    }
}
function valid_form_3(){
    var data = document.forms['form3']['data'].value;
    if(data == ""){
        alert("PLEASE ENTER THE PROJECTS DATA...");
        return false;
    }
}
function valid_form_4(){
    var data = document.forms['form4']['data'].value;
    if(data == ""){
        alert("PLEASE ENTER THE AWARDS DATA...");
        return false;
    }
}
function valid_form_5(){
    var data = document.forms['form5']['data'].value;
    if(data == ""){
        alert("PLEASE ENTER THE COLLABRATIONS DATA...");
        return false;
    }
}
function valid_form_6(){
    var data = document.forms['form6']['data'].value;
    if(data == ""){
        alert("PLEASE ENTER THE CONFERENCE DATA...");
        return false;
    }
}
function valid_form_7(){
    var data = document.forms['form7']['data'].value;
    if(data == ""){
        alert("PLEASE ENTER THE PUBLICATION DATA...");
        return false;
    }
}
function password_valid(){
    var old = document.forms['form_ps']['old'].value;
    var newps = document.forms['form_ps']['new'].value;
    var confirm = document.forms['form_ps']['confirm'].value;
    if(old == ""){
        alert("PLEASE ENTER THE OLD PASSWORD...");
        return false;
    }
    if(newps == ""){
        alert("PLEASE ENTER THE NEW PASSWORD...");
        return false;
    }
    if(confirm == ""){
        alert("PLEASE CONFIRM THE PASSWORD ...");
        return false;
    }

}

function url_valid(){
    var url = document.forms['form_url']['url'].value;
    if(url == ""){
        alert("PLEASE ENTER THE URL ...");
        return false;
    }
}
function img_valid(){
    var img = document.forms['form_img']['image'].value;
    if(img == ""){
        alert("PLEASE SELECT A IMAGE");
        return false;
    }
}



















