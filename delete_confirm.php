<?php
    require_once('connect.php');
    include('includes/head.php');
    $productid = $_GET['id'];
    $query = "select * from product where id = $productid";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    echo "<div id='modifyconfirm'><div><section class='data'><h3>Delete Record</h3>";

    echo '<p><span class="infotext">Product ID: </span><span>'.$row['id'].'</span></p>';
    echo '<p><span class="infotext">Product Name: </span><span>'.$row['name'].'</span></p>';
    echo '<p><span class="infotext">Description: </span><span>'.$row['description'].'</span></p>';
    echo '<p><span class="infotext">Image: </span><span>'.$row['image'].'</span></p>';
    echo '<p><span class="infotext">Caption: </span><span>'.$row['caption'].'</span></p>';

        echo "<p class='confirm'>Are you sure you want to delete this record?</p><p>";
        echo "<a href='delete_search.php'>Cancel</a>&nbsp;";
        echo "<a href='delete.php?id={$row['id']}'>Delete</a></p>";
    echo '</selection>';
    echo '</div></div>';
    mysqli_close($connection);
include('includes/footer.php');