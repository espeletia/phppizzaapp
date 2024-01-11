
<?php
session_start();
    
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["name"])){
        $_POST["name"] = trim($_POST["name"]);
        if(preg_match("/[0-9]/", $_POST["name"]) || !preg_match("/ /", $_POST["name"])){
            if(!isset($_SESSION["error"])) $_SESSION["error"] = array();
            $_SESSION["error"][] = "Invalid name and last name.";
        }
    }
    
    if(isset($_POST["street"])){
        $_POST["street"] = trim($_POST["street"]);
        if(preg_match("/[0-9]/", $_POST["street"])){
            if(!isset($_SESSION["error"])) $_SESSION["error"] = array();
            $_SESSION["error"][] = "invalid address.";
        }
    }
    if(isset($_POST["city"])){
        $_POST["city"] = trim($_POST["city"]);
        if(preg_match("/[0-9]/", $_POST["city"])){
            if(!isset($_SESSION["error"])) $_SESSION["error"] = array();
            $_SESSION["error"][] = "Invalid city.";
        }
    }

    if(isset($_POST["housenr"])){
        $_POST["housenr"] = trim($_POST["housenr"]);
        if(preg_match_all("/[0-9]/", $_POST["housenr"]) !== strlen($_POST["housenr"])){
            if(!isset($_SESSION["error"])) $_SESSION["error"] = array();
            $_SESSION["error"][] = "Invalid house number.";
        } 
    }

    if(isset($_POST["email"])){
        $_POST["email"] = trim($_POST["email"]);
        if(!preg_match("/[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,}/", $_POST["email"])){
            if(!isset($_SESSION["error"])) $_SESSION["error"] = array();
            $_SESSION["error"][] = "invalid email.";
        }
    }
    if(isset($_POST["postalcode"])){
        $_POST["postalcode"] = trim($_POST["postalcode"]);
        if(!preg_match("/[0-9]{3} [0-9]{2}/", $_POST["postalcode"])){
            if(!isset($_SESSION["error"])) $_SESSION["error"] = array();
            $_SESSION["error"][] = "Invalid postal code.";
        }
    }
    if(isset($_SESSION["error"])){
        header("Location: orderForm.php");
        exit;
    }
    if (isset($_SESSION['pizzas'])) {
        unset($_SESSION['pizzas']);
    }
    header("Location: index.php");
    
}
else{
    echo "<p>There was no form submitted.</p>";
}




?>


