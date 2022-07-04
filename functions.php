<?php 


function connection(){
    $connection = mysqli_connect('localhost','root','root','CARS_FACTORY');

    if(!$connection) {
        die('DB Connection Failed');
    }

    return $connection;
}


function get_car($id){
    $connection = connection();
    $sql = "SELECT * FROM CARS_INFO WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    $cars = array();
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
    return $cars[0];
}
