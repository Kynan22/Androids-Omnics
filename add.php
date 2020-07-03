<?php
include('includes/head.php');
require_once('connect.php');

echo"<form action='get.php' method='get'>";
echo"<label>Name</label>";
echo"<input type='text' name='name'/><br><br>";
echo"<label>Description</label>";
echo"<input type='text' name='description'/><br><br>";
echo"<input type='submit' value='submit' name='submit'/></form>";


include('includes/footer.php');
mysqli_close($connection);