<html>
<head>

  
	<title>Data User</title>
</head>
<body>
<br>
<br>


</form>
</center>

</table>
</form>
	<center>
	
	<table border="2">
		<br>
		<br>
		<tr>
			<th>Username</th>			
			<th>Password</th>
			
	
			
		</tr>
		<?php foreach($direktur as $u): 
		?>
		<tr>
			<td><?php echo $u->username?></td>		
			<td><?php echo $u->password?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>

	<?= anchor('c_direktur/edit_direktur', 'edit') ?>
	</center>
</body>
</html>
