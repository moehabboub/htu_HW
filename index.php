
<?php 

include_once './partials/header.php';

$connection = connection();

$sql = "SELECT * FROM CARS_INFO";

$result = mysqli_query($connection, $sql);

// var_dump($result);

// $car = mysqli_fetch_assoc($result);

// var_dump($car);

// $cars = array();

if(mysqli_num_rows($result) > 0) {
  while($car = mysqli_fetch_assoc($result)){
    $cars[] = array(
        'id' => $car['id'],
        'name' => $car['name'],
        'man_year' => $car['man_year'],
        'sales_quantity' => $car['sales_quantity'],
        'reg_date' => $car['reg_date'],
    );
  }
} else {
  echo false;
}





mysqli_close(connection());



?>

<div class="d-flex justify-content-between align-items-center">
    <h1>Car Sales</h1>
    <a href="./create.php" class="btn btn-success">Add New Car</a>
</div>
<hr class="my-5">

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Man. Year</th>
            <th scope="col">Sales Quantity</th>
            <th scope="col">Registration Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ( $cars as $car ) : ?>
            <tr>
                <td><?= $car['id'] ?></td>
                <td><?= $car['name'] ?></td>
                <td><?= $car['man_year'] ?></td>
                <td><?= $car['sales_quantity'] ?></td>
                <td><?= $car['reg_date'] ?></td>
                <td>
                    <a href="./customer.php?id=<?= $car['id'] ?>">View Car</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>




<?php 
include_once './partials/footer.php';


?>

