<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doručovací informace</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["pizzas"]) || count($_SESSION["pizzas"]) == 0) { header("Location: cartTemplate.php");
    } if (isset($_SESSION["error"]))
        foreach ($_SESSION["error"] as $error): ?>
            <script>
                alert("<?= $error ?>");
            </script>
        <?php endforeach;
    ?>
    <h1>Doručovací informace</h1>

    <form action="process_order.php" method="post">
        <label for="name">Jméno a příjmení:</label>
        <input type="text" id="name" name="name" required>

        <label for="street">Ulice:</label>
        <input type="text" id="street" name="street" required>

        <label for="city">Město:</label>
        <input type="text" id="city" name="city" required>

        <label for="housenr">Číslo popisné:</label>
        <input type="text" id="housenr" name="housenr" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="postalcode">PSČ:</label>
        <input type="text" id="postalcode" name="postalcode" required>

        <input type="submit" value="Objednat">
    </form>
</body>

</html>
