<?php
$title="Insert";
include('includes/head.php');
?>
<div id="insert">
<form method="post" action="insert.php" enctype="multipart/form-data">
	<fieldset>
	<legend>Insert a new record:</legend>
		<label>Name:</label>
		<input type="text" name="name" />
		<br><br>
		<label>Description:</label>
		<textarea cols="50" rows="5" name="description"></textarea>
		<br><br>
        <label>Image:</label>
        <input type="file" name="image"/>
        <br><br>
        <label>Caption:</label>
        <input type="text" name="caption">
        <br><br>
		<input type="submit" name="submit" value="Add" />
	</fieldset>	
</form>
</div>
<?php
include('includes/footer.php');
?>	


