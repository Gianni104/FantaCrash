<?php

    function RulePage(){
        header("Location: http://gdp.kozow.com/FantaCrash/BackUPFlip.html");
    }

    function AccessPage(){
        header("Location: http://gdp.kozow.com/FantaCrash/accesso.html");
    }

    $Ballerini_L = [
        "username" => "ruler",
        "password" => "admin"
    ];

    $Fiesoli_F = [
        "username" => "Ibbiondo",
        "password" => "macchina"
    ];
    
    $Ceccarelli_L = [
        "username" => "Jeff",
        "password" => "Bezos"
    ];

    if ($_POST["nome"] === $Ballerini_L["username"]){
        if($Ballerini_L["password"] == $_POST["pass"]){
            RulePage();
        }
        else{
            AccessPage();
        }
    }
    else if($_POST["nome"] == $Fiesoli_F["username"]){
        if($Fiesoli_F["password"] == $_POST["pass"]){
            RulePage();
        }
        else{
            AccessPage();
        }
    }
    else if($_POST["nome"] == $Ceccarelli_L["username"]){
        if($Ceccarelli_L["password"] == $_POST["pass"]){
            RulePage();
        }
        else{
            AccessPage();
        }
    }
    else{
        AccessPage();
    }


?>
