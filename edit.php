<?php

include_once './partials/header.php';

$car = get_car($_GET['id']);

?>


<h1>Edit Car - <?= $car['name']; ?></h1>

<form class="my-5" method="POST" action="./update.php">

    <input name="id" value="<?= $car['id'] ?>" type="hidden">

    <label for="carName" class="form-label">Name</label>
    <input name="name" value="<?= $car['name'] ?>" type="text" class="form-control" id="carName" ">

    <label for="carManYear" class="form-label">Manf. Year</label>
    <input name="man_year" value="<?= $car['man_year'] ?>" type="number" class="form-control" id="carManYear" aria-describedby="emailHelp" value="$car['man_year']">


    <label for="carSalesQuant" class="form-label">Sales Quantity</label>
    <input name="sales_quantity" value="<?= $car['sales_quantity'] ?>" type="number" class="form-control" id="carSalesQuant" aria-describedby="emailHelp">

    <button type="submit" class="btn btn-primary my-5">Update</button>
</form>

<?php

include_once './partials/footer.php';


?>