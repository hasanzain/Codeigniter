<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo base_url() ?>login/aksi_login" method="post" accept-charset="utf">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="Username" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" placeholder="Username" required></td>
		</tr>
		<tr>
			<td rowspan="2"><input type="submit" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>