<?php
	session_start();  
	$con = mysqli_connect("localhost","root","", "qlttnn");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sql = mysqli_query($con, "SELECT account.*, student.* FROM account LEFT JOIN student on account.id_user = student.id_student WHERE username='".$_POST['username']."' AND pass='".$_POST['pass']."' and account.pq = 0");
		if(mysqli_num_rows($sql) > 0)
		{
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['pass'] = $_POST['pass'];
			echo "<script> alert(' Đăng nhập thành công! xin chào'); location.href='infor.php' </script>" ;
		}
		else
		{
			echo "<script> alert(' Bạn đã đăng nhập vào trang quản trị'); location.href='danhsachkhoahoc.php' </script>";
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
		<form class="form-signin" method="POST" action=''>
			<h2 class="form-signin-heading">Đăng nhập hệ thống</h2>
			<div class="form-group" >
				<input type="text" id="user" name="username" class="form-control" id="username" placeholder="Username" minlength="2" maxlength="20" autofocus required>
			</div>
			<div class="form-group">
				<input type="password" id="pass" name="pass" class="form-group" id="password" placeholder="Password" minlength="2" maxlength="20" required>
			</div>
			
			<button class="btn btn-lg btn-primary btn-block" id="btndangnhap" type="submit">Đăng nhập</button>
		</form>
	</div>
</body>
</html>