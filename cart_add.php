<?php
    require 'db_connection.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($con,$add_to_cart_query);
    if ($add_to_cart_result) {
        ?> <script> alert("Item Added to cart") </script>  <?php
    }
    header('location: shop.php');
?>