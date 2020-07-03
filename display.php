<?php
include('includes/head.php');
require_once('connect.php');

$q = @($_GET['product']);
$query = "select * from product where description like '%$q%' or name like '%$q%' OR caption LIKE '%$q%'";

$result = mysqli_query($connection, $query);

$row_count = mysqli_num_rows($result);

for($i = 0; $i < $row_count; $i++){
    $row[$i] = mysqli_fetch_array($result);
}
echo '<div id="phones">';
foreach($row as $next) {
    echo '<section><h2>'.$next['name'].'</h2>';

    echo "<figure><a href='details.php?id=".$next['id']."'><img src = '".$next['image']."' alt = '" . $next['caption']."' />";
    echo "</a>";
    echo '<figcaption id="description">'.$next['description'].'</figcaption></figure>';
    echo '<p>'.$next['caption'].'</p>';
    echo "<a href='details.php?id=".$next['id']."'>Read More</a></section>";
}
echo '</div>';
include('includes/footer.php');
mysqli_close($connection);
