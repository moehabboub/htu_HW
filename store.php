<?php

include "./functions.php";


$name = $_POST['name'];
$man_year = $_POST['man_year'];
$sales_quantity = $_POST['sales_quantity'];

$connection = connection();

$sql = "INSERT INTO CARS_INFO (name,man_year,sales_quantity) VALUES ('$name','$man_year','$sales_quantity')";

$addition = mysqli_query($connection, $sql);

// var_dump($addition);


if($addition) {
    header("Location: ./");
} else {
    header("Location: ./create.php");
}