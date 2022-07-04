<?php

include "./functions.php";


// var_dump($_GET);

$id = $_GET['id'];

$connection = connection();

$sql = "DELETE FROM CARS_INFO WHERE id=$id";

$result = mysqli_query($connection, $sql);

mysqli_close($connection);

if($result) {
    header("Location: ./");
} else {
    header("Location: ./customer.php?id=$id");
}