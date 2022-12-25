<?php
session_start();
// jika sudah login, alihkan ke halaman home
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Sistem Informasi Perpustakaan Brian</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="post" name="form_login" id="form_login" action="proses-login.php" style="margin-top: 120px;">
		<table class="form">
			<tr>
				<td colspan="2">
					<h1 align="center"> ▷ ▷ ▷ ▷ ▷ ▷ Halaman Login ◁ ◁ ◁ ◁ ◁ ◁ ※ Sistem Informasi Perpustakaan Brian ※ </h1> <hr>
					<h3 align="center"> <img src="css/img/beruang.gif"/> <img src="css/img/school.gif"/> <img src="css/img/doggy.gif"/> </h3>
				</td>
			</tr>
			<tr>
				<td align="center">Username :</td>
				<td>
					<input type="text" name="username" id="username" />
				</td>
			</tr>
			<tr>
				<td align="center">Password :</td>
				<td>
					<input type="password" name="password" id="password" />
				</td>
			</tr>
			<tr style="height:10px"></tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="login" id="login" value="Login" class="btn btn-submit" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
