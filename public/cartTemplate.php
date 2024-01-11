<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Košík</title>
</head>

<body>
    <a href="index.php">Back to ingredient selection</a>
    <h1>Items in your cart:</h1>
    <?php
    spl_autoload_register(function ($class_name) { include $class_name . '.php'; });
    session_start();
    if (isset($_SESSION['pizzas'])):
        foreach ($_SESSION['pizzas'] as $key => $pizza): ?>

            <h2>Pizza <?= $key + 1 ?></h2>
            <a class="delete-link" href="delete.php?key=<?= $key ?>">delete</a>
            <ul>
                <li>base:
                    <?= $pizza->getBase() ?>
                </li>
                <li>toppings:
                    <ul>
                        <?php foreach ($pizza->getToppings() as $topping): ?>
                            <li>
                                <?= $topping ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        <?php endforeach;

    endif;
    ?>
    <a class="delete-all-link" href="deleteAll.php">empty cart</a>
    <a class="order-link" href="orderForm.php">order</a>
</body>

</html>
