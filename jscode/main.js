function menubar(){
    var SituationTeller = document.getElementById("arrowicon");
    SituationTeller.classList.remove("fa-caret-right");
    SituationTeller.classList.add("fa-caret-down");
    document.getElementById("currentheading").innerHTML = currentSituation;
    document.getElementById("mobi-menubar").style.display = "block";
    document.getElementById("showmenu").style.display = "none";
    document.getElementById("hidemenu").style.display = "block";
}
function hide_menubar(){
    var SituationTeller = document.getElementById("arrowicon");
    SituationTeller.classList.add("fa-caret-right");
    SituationTeller.classList.remove("fa-caret-down");
    document.getElementById("currentheading").innerHTML = currentSituation;
    document.getElementById("mobi-menubar").style.display = "none";
    document.getElementById("showmenu").style.display = "block";
    document.getElementById("hidemenu").style.display = "none";
}