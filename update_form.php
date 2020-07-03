<?php

$productid = $_GET['id'];
require_once('connect.php');
$query = "select * from product where id = '$productid';";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

$productname = $row['name'];
$description = $row['description'];
?>

<fieldset>
    <h3>Update Record Details</h3>
    <form method="post" action="update.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $productid?>"/>
        <div class="row">
            <label for="name">Product Name</label>
            <input type="text" name="name" value="<?php echo $productname?>"/>
        </div>
        <div class ="row">
            <label for="description">Description</label>
            <textarea cols="50" rows="5" name="description"><?php echo $description?></textarea>
        </div>
        <div class ="row">
            <input type="submit" name="submit" value="Update"/>
        </div>
    </form>
</fieldset>
