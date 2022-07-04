<?php

include "./functions.php";


$id = $_POST['id'];
$newName = $_POST['name'];
$newManYear = $_POST['man_year'];
$newSalesQuantity = $_POST['sales_quantity'];

$connection = connection();

$sql = "UPDATE CARS_INFO
            SET name='$newName', man_year=$newManYear, sales_quantity=$newSalesQuantity
            WHERE id=$id
        ";

$result = mysqli_query($connection, $sql);

mysqli_close($connection);

if($sql){
    header("Location: ./customer.php?id=$id");
} else {
    header("Location: ./edit.php");
}





