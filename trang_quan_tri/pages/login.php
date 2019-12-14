<?php
	session_start();
	$name; $pass; $error;
	if (isset($_POST['submit']))
	{
		$name = $_POST['username'];
		$pass = $_POST['password'];

		require 'connect.php';
		$query = "SELECT * FROM account WHERE username = :name";
		$record = $db->prepare($query);
		$record->bindParam(':name', $name);
		$record->execute();

		//tra ve mang hoac doi tuong de xu ly
		$user = $record->fetch(PDO::FETCH_ASSOC);

		if(count($user)>0 and $user['pass'] == $pass)
		{
			#login successful
			$_SESSION['user'] = $user['username'];
			header('location: danhsachkhoahoc.php');
		}
		else
		{
			$error = 'loi';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="container" style="background: url(../img/banner1.jpg)">
		<?php if(isset($error)): ?>
			<div class="alert alert-danger error">
			<strong>Lỗi</strong>Tài khoản hoặc mật khẩu sai.
		</div>
		<?php endif ?>
		

		<form class="form-signin" method="post">
			<h2 class="form-signin-heading">Đăng nhập hệ thống</h2>
			<div class="form-group" >
				<input type="text" id="user" name="username" class="form-control" id="username" placeholder="Username" minlength="2" maxlength="20" autofocus required>
			</div>
			<div class="form-group">
				<input type="password" id="pass" name="password" class="form-group" id="password" placeholder="Password" minlength="2" maxlength="20" required>
			</div>
			
			<button class="btn btn-lg btn-primary btn-block" id="btndangnhap" type="submit" name="submit">Đăng nhập</button>
		</form>
	</div>
</body>
</html>