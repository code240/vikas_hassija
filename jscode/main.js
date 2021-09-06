function menubar(){
    currentSituation = `Profile &nbsp<i class="fas fa-caret-down"></i>`;
    document.getElementById("currentheading").innerHTML = currentSituation;
    document.getElementById("mobi-menubar").style.display = "block";
    document.getElementById("showmenu").style.display = "none";
    document.getElementById("hidemenu").style.display = "block";
}
function hide_menubar(){
    currentSituation = `Profile &nbsp<i class="fas fa-caret-right"></i>`;
    document.getElementById("currentheading").innerHTML = currentSituation;
    document.getElementById("mobi-menubar").style.display = "none";
    document.getElementById("showmenu").style.display = "block";
    document.getElementById("hidemenu").style.display = "none";
}