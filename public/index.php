<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výběr přísad na pizzu</title>
</head>

<body>

    <h1>Výběr přísad na pizzu</h1>

    <form action="submit.php" method="post">
        <div>
            <label for="base">Base:</label>
            <select name="base" id="base">
                <option value="rajčatový">tomato</option>
                <option value="smetanový">cream cheese</option>
            </select>
        </div>

        <div>
            <label for="cheese">cheese:</label>
            <input type="checkbox" id="cheese" name="topping[]" value="sýr">

        </div>
        <div>
            <label for="pepperoni">Pepperoni:</label>
            <input type="checkbox" id="pepperoni" name="topping[]" value="pepperoni">

        </div>
        <div>
            <label for="mushrooms">mushrooms:</label>
            <input type="checkbox" id="mushrooms" name="topping[]" value="houby">

        </div>
        <div>
            <label for="olives">olives:</label>
            <input type="checkbox" id="olives" name="topping[]" value="olivy">

        </div>
        <div>
            <label for="onions">onion:</label>
            <input type="checkbox" id="onions" name="topping[]" value="cibule">

        </div>
        <div>
            <label for="bellPeppers">peppers:</label>
            <input type="checkbox" id="bellPeppers" name="topping[]" value="paprika">

        </div>
        <div>
            <label for="sausage">sausage</label>
            <input type="checkbox" id="sausage" name="topping[]" value="klobása">

        </div>
        <div>
            <label for="tomatoes">tomatoes:</label>
            <input type="checkbox" id="tomatoes" name="topping[]" value="rajčata">

        </div>

        <input type="submit" value="Add to cart">
    </form>


    <a href="cartTemplate.php">cart</a>




</body>

</html>
