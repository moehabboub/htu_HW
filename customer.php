<?php 

include_once './partials/header.php';

$car = get_car($_GET['id']);

?>


<h1>Car - <?= $car['name'];?></h1>

<div class="row">
    <div class="col-6">
        <p><strong>ID: </strong> <?= $car['id'] ?></p>
        <p><strong>Name: </strong> <?= $car['name'] ?></p>
        <p><strong>Man. Year: </strong> <?= $car['man_year'] ?></p>
        <p><strong>Sales Quantity: </strong> <?= $car['sales_quantity'] ?></p>
        <p><strong>Registration: </strong> <?= $car['reg_date'] ?></p>
    </div>
    <div class="col-6">
        <a href="./edit.php?id=<?= $car['id'] ?>" class="btn btn-warning">Edit</a>
        <a href="./delete.php?id=<?= $car['id'] ?>" class="btn btn-danger ml-5">Delete</a>
    </div>
</div>

<?php 

include_once './partials/footer.php';


?>



