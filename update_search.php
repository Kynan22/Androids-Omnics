<?php

require_once('connect.php');

	$title = 'Search for record';
	$style="css/nav.css";
	$style2="css/form.css";
	
include('includes/head.php');

	$query='select * from product';
	$result=mysqli_query($connection, $query);
	$count=mysqli_num_rows($result);
	
	for($i=0;$i<$count;$i++) {
		$row[$i]=mysqli_fetch_array($result);
	}
?>
	<div id="insert">
	<h4>Select a record to update</h4>
	<form action="update_form.php" method="get">
		<select name="id">
			<?php
				foreach($row as $next) {
				echo "<option value='".$next['id']."'>".$next['name']."</option>";
				}	
			?>
		</select>
		<input type="submit" value="submit" name="submit" />
	</form>
	</div>

<?php

include('includes/footer.php');

?>