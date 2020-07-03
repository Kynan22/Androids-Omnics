<?php
require_once('connect.php');
if(!isset($_POST['submit'])){
    echo "Unauthorised access";
}
else {
    $productid = mysqli_real_escape_string($connection, $_POST['id']);
    $productname = mysqli_real_escape_string($connection, $_POST['name']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);

    $query = "update product set name = '$productname',
    description = '$description' where id = '$productid'";

    if(mysqli_query($connection, $query)){
        echo "<p>You have successfully updated {$productname}</p>";
    }
    else{
        echo '<p>There was a problem updating the record</p>';
        echo "Error: ".$query."<br>".mysqli_error($connection);
    }
}