<?php
spl_autoload_register(function ($class_name) { include $class_name . '.php'; });
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['topping']) && isset($_POST['base'])) {
                $_SESSION['pizzas'][] = new Pizza($_POST['topping'], $_POST['base']);
                header("Location: index.php");
        } else {
                header("Location: index.php");
        }
} else { header("Location: index.php"); }
?>
