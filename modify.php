<?php
include('includes/head.php');
require_once('connect.php');
$q = @($_GET['product']);
$query = "select * from product";

$result = mysqli_query($connection, $query);

$row_count = mysqli_num_rows($result);

for($i = 0; $i < $row_count; $i++){
    $row[$i] = mysqli_fetch_array($result);
}
echo '<div id="modifyphones">';
echo '<table width="100%"><tr><th>ID</th><th>Name</th><th>Image</th><th>Description</th><th>Caption</th><th>Update</th><th>Delete</th></tr>';
foreach($row as $next) {

    echo '<tr><div class="modify"><td>'.$next['id'].'</td>';
    echo '<td>'.$next['name'].'</td>';

    echo "<td><img src = '".$next['image']."' alt = '" . $next['caption']."' /></td>";
    echo '<td>'.$next['description'].'</td>';
    echo '<td>'.$next['caption'].'</td><td><a href="update_form.php?id='.$next['id'].'">Update</a></td><td><a href="delete_confirm.php?id='.$next['id'].'">Delete</a></td></tr>';
}
echo '</div>';
include('includes/footer.php');
mysqli_close($connection);
