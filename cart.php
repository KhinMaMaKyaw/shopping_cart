<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "shopping_cart");

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $session_array_id = array_column($_SESSION['cart'], "id");
        if(!in_array($_GET['id'], $session_array_id)){
            $session_array = [
                "id" => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            ];
            $_SESSION['cart'][] = $session_array; 
        }
    }else{
        $session_array = [
            "id" => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        ];
        $_SESSION['cart'][] = $session_array; 
    }

}
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
    <h1>Your shopping cart</h1>
    <div class="wrap">
        <div>
            <?php
            $total = 0;

            $output = "";
            $output .= "
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                
            ";

            if(!empty($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $key => $value){
                    $output .= "
                        <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['name']."</td>
                            <td>".number_format($value['price'])." mmk</td>
                            <td>".$value['quantity']."</td>
                            <td>".number_format($value['price'] * $value['quantity'])." mmk</td>
                            <td><a href='cart.php?action=remove&id= ".$value['id']."'>Remove</a></td>
                    ";

                    $total = $total + $value['price'] * $value['quantity'];
                }
            }
            $output .= "
                <tr>
                    <td colspan='3'></td>
                    <td><b>Total Price</b></td>
                    <td>".number_format($total)." mmk</td>
                    <td><a class='clear' href='cart.php?action=clearall'>Clear All</a></td>
            ";

            echo $output;
            ?>
            <?php
                if(isset($_GET['action'])){
                    if($_GET['action'] == "clearall"){
                        unset($_SESSION['cart']);
                    }

                    if($_GET['action'] == 'remove'){
                        foreach($_SESSION['cart'] as $key => $value){
                            if($value['id'] == $_GET['id']){
                                unset($_SESSION['cart'][$key]);
                            }
                        }
                    }
                }
            ?>
        <a href='index.php'>Shopping continue</a>
        </div>
    </div>

</body>
</html>