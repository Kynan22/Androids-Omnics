<?php
include('includes/head.php');
require_once('connect.php');
$productid = $_GET['id'];
$query = "select * from product where id = '$productid'";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

echo '<section id="details"><h2>'.$row['name'].'</h2>';
echo '<p>'.$row['description'].'</p>';
echo "<img src = '".$row['image']."' alt = '" . $row['caption']."' />";
echo '<p>'.$row['caption'].'</p></section>';
include('includes/footer.php');
mysqli_close($connection);