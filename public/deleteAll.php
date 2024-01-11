<?php
session_start();
if (isset($_SESSION['pizzas'])) {
    unset($_SESSION['pizzas']);
}
header("Location: cartTemplate.php")
?>
