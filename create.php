<?php
include_once "./partials/header.php"



?>


<h1 class="text-center">Add new car</h1>

<form method="POST" action="./store.php">
  <div class="mb-3">    
    <label for="carName" class="form-label">Car Name</label>
    <input name="name" type="text" class="form-control" id="carName">
  </div>
<div class="mb-3">
    <label for="carManYear" class="form-label">Manf. Year</label>
    <input name="man_year" type="number" class="form-control" id="carManYear" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="carSalesQuant" class="form-label">Sales Quantity</label>
    <input name="sales_quantity" type="number" class="form-control" id="carSalesQuant" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Add Car</button>
</form>





<?php
include_once "./partials/footer.php"



?>
