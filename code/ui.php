<?php
    include "database.php";
    $ui_con = mysqli_connect($aa,$bb,$cc,$dd);
    $ui_q = "SELECT * FROM base WHERE id = 1";
    $ui_data = mysqli_query($ui_con,$ui_q);
    while($ui_result = mysqli_fetch_assoc($ui_data)){
        $logo = $ui_result["logo"];
        $favicon = $ui_result["favicon"];
        $background = $ui_result["background"];
        $sidelogo = $ui_result["sidelogo"];
        $university_home = $ui_result["university_home"];
        $department_home = $ui_result["department_home"];
        $you = $ui_result["you"];
        $governance_url = $ui_result["governance_url"];
        $about_url = $ui_result["about_url"];
        $teaching_methodology = $ui_result["teaching_methodology_url"];
        $contact_url = $ui_result["contact_url"];

    }

    
?>













<?php
    mysqli_close($ui_con);

?>