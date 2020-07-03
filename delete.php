<?php

echo "<div id='container'>";
echo "<div class='data'>";

    $productid = $_GET['id'];
    require_once('connect.php');
    $query = "delete from product where id = $productid";

        if(mysqli_query($connection, $query)){
            echo "<p>Record {$productid} has been deleted";
        } else {
            echo "Error: ".$query."<br>".mysqli_error($connection);
        }

    mysqli_close($connection);

echo '</div>';
echo '</div>';