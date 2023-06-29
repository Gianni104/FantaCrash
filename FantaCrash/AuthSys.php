<?php
   
   session_start();

    function RulePage(){
        header("Location: http://gdp.kozow.com/FantaCrash/BackUPFlip.php");
        //header("Location: http://127.0.0.1/Project_pHp/FantaCrash/BackUPFlip.php");
    }

    function AccessPage(){
        header("Location: http://gdp.kozow.com/FantaCrash/");
        //header("Location: http://127.0.0.1/Project_pHp/FantaCrash/accesso.php");
    }

    function Caricameto(){
        header("Location: http://gdp.kozow.com/PagCaricamento/check.php");
        //header("Location: http://127.0.0.1/Project_pHp/PagCaricamento/HtmlCode.php");

    }

    $Ballerini_L = [
        "username" => "FatCEO",
        "password" => "admin"
    ];

    $Fiesoli_F = [
        "username" => "Fededj",
        "password" => "Fe14de11ri05co!"
    ];
    
    $Ceccarelli_L = [
        "username" => "Jeff",
        "password" => "Bezos"
    ];

    $Santarelli_F = [
        "username" => "fili06",
        "password" => "f28102006"
    ];

    $Santini_A = [
        "username" => "Santo19741",
        "password" => "cadi"
    ];

    $Fiesoli_D = [
        "username" => "acquilone_invasore",
        "password" => "Ronesexyporcoilpapa"
    ];

    $Pozzi_M = [
        "username" => "sbrugna",
        "password" => "hostatoio2"
    ];

    $Grandi_A = [
        "username" => "infinite_racist",
        "password" => "andreag05"
    ];

        if ($_POST["nome"] === $Ballerini_L["username"]){
        if($Ballerini_L["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
        }
        else{
            AccessPage(); 
        }
    }
    else if($_POST["nome"] == $Fiesoli_F["username"]){
        if($Fiesoli_F["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
        }
        else{
            AccessPage();
        }
    }
    else if($_POST["nome"] == $Ceccarelli_L["username"]){
        if($Ceccarelli_L["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
           
        }
        else{
            AccessPage();
        }
    }

    else if($_POST["nome"] == $Santarelli_F["username"]){
        if($Santarelli_F["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
           
        }
        else{
            AccessPage();
        }
    }

    else if($_POST["nome"] == $Santini_A["username"]){
        if($Santini_A["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
           
        }
        else{
            AccessPage();
        }
    }

    else if($_POST["nome"] == $Fiesoli_D["username"]){
        if($Fiesoli_D["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
           
        }
        else{
            AccessPage();
        }
    }

    else if($_POST["nome"] == $Pozzi_M["username"]){
        if($Pozzi_M["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
           
        }
        else{
            AccessPage();
        }
    }

    else if($_POST["nome"] == $Grandi_A["username"]){
        if($Grandi_A["password"] == $_POST["pass"]){
            $_SESSION["online"] = true;
            Caricameto();
           
        }
        else{
            AccessPage();
        }
    }
    
    else{
        AccessPage();
    }


?>
