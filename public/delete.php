<?php
session_start();
if (isset($_GET['key'])) {
    echo $_GET['key'];
    $keyToDelete = $_GET['key'];

    if (isset($_SESSION['pizzas'][$keyToDelete])) {
        unset($_SESSION['pizzas'][$keyToDelete]);
    }
}

header("Location: cartTemplate.php");

?>
