<?php
include "header.php";
?>

<div id="main-content">	
	<div id="record">
	<h2>ALL RECORDS</h2>
	
	</div>
<hr>
	
	<?php
		include "connection.php";
		
		$sql = "SELECT * FROM student";
		$result = mysqli_query($conn,$sql) or die ("query unsuccessful.");
		
		if(mysqli_num_rows($result) > 0)
		{
		?>
			<table cellpadding="7px">
			<thead id="th">
			<th>Id</th>
			<th>Name</th>
			<th>Address</th>
			<th>Class</th>
			<th>Phone</th>
			<th>Action</th>
			</thead>
			
			<tbody>
			<?php
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
						<td><?php echo $row['sid']; ?></td>
						<td><?php echo $row['sname']; ?></td>
						<td><?php echo $row['saddress']; ?></td>
						<td><?php echo $row['sclass']; ?></td>
						<td><?php echo $row['sphone']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['sid']; ?>">Edit</a>
							<a href="delete-inline.php?id=<?php echo $row['sid']; ?>">Delete</a>
						</td>
					</tr>	
			<?php	} ?>
			</tbody>
		  </table>
                   <?php }
			else
			{
				echo "<h2> no Record Found</h2>";
			}
			mysqli_close($conn);
			?>
</div>
</body>
</html>