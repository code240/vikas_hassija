function changeTo(page) {
    if (page == "experience") {
        document.getElementById("experience").style.display = "block";
        document.getElementById("course").style.display = "none";
        document.getElementById("project").style.display = "none";
        document.getElementById("award").style.display = "none";
        document.getElementById("collabration").style.display = "none";
        document.getElementById("conference").style.display = "none";
        document.getElementById("publication").style.display = "none";
        document.getElementById("other").style.display = "none";

        // Change class
        document.getElementById("opt1").classList.add("active");
        document.getElementById("opt2").classList.remove("active");
        document.getElementById("opt3").classList.remove("active");
        document.getElementById("opt4").classList.remove("active");
        document.getElementById("opt5").classList.remove("active");
        document.getElementById("opt6").classList.remove("active");
        document.getElementById("opt7").classList.remove("active");
        document.getElementById("opt8").classList.remove("active");



    }
    if (page == "course") {
        document.getElementById("experience").style.display = "none";
        document.getElementById("course").style.display = "block";
        document.getElementById("project").style.display = "none";
        document.getElementById("award").style.display = "none";
        document.getElementById("collabration").style.display = "none";
        document.getElementById("conference").style.display = "none";
        document.getElementById("publication").style.display = "none";
        document.getElementById("other").style.display = "none";

        // Change class
        document.getElementById("opt1").classList.remove("active");
        document.getElementById("opt2").classList.add("active");
        document.getElementById("opt3").classList.remove("active");
        document.getElementById("opt4").classList.remove("active");
        document.getElementById("opt5").classList.remove("active");
        document.getElementById("opt6").classList.remove("active");
        document.getElementById("opt7").classList.remove("active");
        document.getElementById("opt8").classList.remove("active");


    }
    if (page == "project") {
        document.getElementById("experience").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("project").style.display = "block";
        document.getElementById("award").style.display = "none";
        document.getElementById("collabration").style.display = "none";
        document.getElementById("conference").style.display = "none";
        document.getElementById("publication").style.display = "none";
        document.getElementById("other").style.display = "none";

        // Change class
        document.getElementById("opt1").classList.remove("active");
        document.getElementById("opt2").classList.remove("active");
        document.getElementById("opt3").classList.add("active");
        document.getElementById("opt4").classList.remove("active");
        document.getElementById("opt5").classList.remove("active");
        document.getElementById("opt6").classList.remove("active");
        document.getElementById("opt7").classList.remove("active");
        document.getElementById("opt8").classList.remove("active");

    }
    if (page == "award") {
        document.getElementById("experience").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("project").style.display = "none";
        document.getElementById("award").style.display = "block";
        document.getElementById("collabration").style.display = "none";
        document.getElementById("conference").style.display = "none";
        document.getElementById("publication").style.display = "none";
        document.getElementById("other").style.display = "none";

        // Change class
        document.getElementById("opt1").classList.remove("active");
        document.getElementById("opt2").classList.remove("active");
        document.getElementById("opt3").classList.remove("active");
        document.getElementById("opt4").classList.add("active");
        document.getElementById("opt5").classList.remove("active");
        document.getElementById("opt6").classList.remove("active");
        document.getElementById("opt7").classList.remove("active");
        document.getElementById("opt8").classList.remove("active");

    }
    if (page == "collabration") {
        document.getElementById("experience").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("project").style.display = "none";
        document.getElementById("award").style.display = "none";
        document.getElementById("collabration").style.display = "block";
        document.getElementById("conference").style.display = "none";
        document.getElementById("publication").style.display = "none";
        document.getElementById("other").style.display = "none";

        // Change class
        document.getElementById("opt1").classList.remove("active");
        document.getElementById("opt2").classList.remove("active");
        document.getElementById("opt3").classList.remove("active");
        document.getElementById("opt4").classList.remove("active");
        document.getElementById("opt5").classList.add("active");
        document.getElementById("opt6").classList.remove("active");
        document.getElementById("opt7").classList.remove("active");
        document.getElementById("opt8").classList.remove("active");


    }
    if (page == "conference") {
        document.getElementById("experience").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("project").style.display = "none";
        document.getElementById("award").style.display = "none";
        document.getElementById("collabration").style.display = "none";
        document.getElementById("conference").style.display = "block";
        document.getElementById("publication").style.display = "none";
        document.getElementById("other").style.display = "none";

        // Change class
        document.getElementById("opt1").classList.remove("active");
        document.getElementById("opt2").classList.remove("active");
        document.getElementById("opt3").classList.remove("active");
        document.getElementById("opt4").classList.remove("active");
        document.getElementById("opt5").classList.remove("active");
        document.getElementById("opt6").classList.add("active");
        document.getElementById("opt7").classList.remove("active");
        document.getElementById("opt8").classList.remove("active");

    }
    if (page == "publication") {
        document.getElementById("experience").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("project").style.display = "none";
        document.getElementById("award").style.display = "none";
        document.getElementById("collabration").style.display = "none";
        document.getElementById("conference").style.display = "none";
        document.getElementById("publication").style.display = "block";
        document.getElementById("other").style.display = "none";

        // Change class
        document.getElementById("opt1").classList.remove("active");
        document.getElementById("opt2").classList.remove("active");
        document.getElementById("opt3").classList.remove("active");
        document.getElementById("opt4").classList.remove("active");
        document.getElementById("opt5").classList.remove("active");
        document.getElementById("opt6").classList.remove("active");
        document.getElementById("opt7").classList.add("active");
        document.getElementById("opt8").classList.remove("active");

    }

    if (page == "other") {
        document.getElementById("experience").style.display = "none";
        document.getElementById("course").style.display = "none";
        document.getElementById("project").style.display = "none";
        document.getElementById("award").style.display = "none";
        document.getElementById("collabration").style.display = "none";
        document.getElementById("conference").style.display = "none";
        document.getElementById("publication").style.display = "none";
        document.getElementById("other").style.display = "block";

        // Change class
        document.getElementById("opt1").classList.remove("active");
        document.getElementById("opt2").classList.remove("active");
        document.getElementById("opt3").classList.remove("active");
        document.getElementById("opt4").classList.remove("active");
        document.getElementById("opt5").classList.remove("active");
        document.getElementById("opt6").classList.remove("active");
        document.getElementById("opt7").classList.remove("active");
        document.getElementById("opt8").classList.add("active");

    }


}