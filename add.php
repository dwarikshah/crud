<?php 
	include "header.php";
?>
<div id="main-content">
	<h2>Add new record</h2>
	
	<form class="post-form" action="savedata.php" method="post">
	
	<div class="form-group">
<label>Name</label>
<input type="text" name="name" required/>
	</div>
<br>
	
	<div class="form-group">
		<label>Address </label>
		<input type="text" name="saddress" required/>
    </div>
<br>
	
	<div class="form-group">
		<label>Class </label>
		<input type="text" name="sclass" required/>
	</div>
<br>
	
	<div class="form-group">
		<label>phone </label>
		<input type="text" name="sphone" required/>
	</div>
	<br>
		<input class="submit" type="submit" value="save"/> 
	
	</form>
	</div>
	