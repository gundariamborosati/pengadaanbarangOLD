<!DOCTYPE html>
<html>
<head>
	<title>Kelola Profil</title>
</head>
<body>
	<center>
		<h3>Edit</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'c_direktur/edit_direktur'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>username</td>
				<td>
					<input type="text" name="username" value="<?php echo $u->username ?>" disabled>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password" value="<?php echo $u->Password ?>" required placeholder=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>