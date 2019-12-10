<?php
    session_start();
    require_once '../../common/db.php';

    $user_id = $_SESSION['account']['id'];
    $product_id = $_POST['id'];
    $issetProductincart = executequery("select * from carts where `product_id` = $product_id and `user_id` = $user_id");
    if ($issetProductincart) {
        $quantity = $issetProductincart['quantity']+1;
        executequery("update carts set `quantity` = $quantity where `product_id` = $product_id and `user_id` = $user_id");
    }
     else{
         $product = executequery("select * from products where `id` = $product_id");
         $name = $product['name'];
         $image = $product['image'];
         $price = $product['price'];
         executequery("insert into carts (`image`, `name`, `quantity`, `total`, `price`, `account_id`, `product_id`) 
                                  values ( '$image', '$name', 1, '$price', '$price', '$user_id', '$product_id')");
     }
?>