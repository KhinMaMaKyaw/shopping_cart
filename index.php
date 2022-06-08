<?php

$connect = mysqli_connect("localhost", "root", "", "shopping_cart");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Available Juice</h1>
    <div class="container">
    
    <?php
    $query = "SELECT * FROM cart_item";
    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result)){?>
        <form method="POST" action="cart.php?id=<?=$row['id']?>" class="card" enctype="multipart/form-data">
                <div class="image"><img src="./images/<?=$row['image']?>" alt="photo"></div>
                <p class="product_name"><?=$row['name']?></p>
                <p class="price"><?=$row['price']?> MMK</p>
                <input type="hidden" name="name" value="<?=$row['name']?>">
                <input type="hidden" name="image" value="<?=$row['image']?>">
                <input type="hidden" name="price" value="<?=$row['price']?>">
                <input type="num" value="1" min="1" max="10" name="quantity">
                <input type="submit" value="BY NOW" name="add_to_cart">
        </form>
        <?php
    }
    ?>

    </div>
</body>
</html>