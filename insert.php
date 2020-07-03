<?php
require_once ('connect.php');

$name = mysqli_real_escape_string($connection, $_POST['name']);
$description = mysqli_real_escape_string($connection, $_POST['description']);
$image = "images/".$_FILES['image']['name'];
$caption = mysqli_real_escape_string($connection, $_POST['caption']);

$query="INSERT INTO product(name, description, image, caption) VALUES('$name', '$description', '$image', '$caption')";

if(mysqli_query($connection, $query)){
    echo "<p>New record added successfully</p>";
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
} else {
    echo "SQL Query Error: ".mysqli_error($connection);

}
mysqli_close($connection);
