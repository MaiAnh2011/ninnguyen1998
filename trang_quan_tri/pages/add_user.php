

<!DOCTYPE html>
<html>
<head>
	<title>Thêm người dùng</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Thêm người dùng</p>
<form action="xl_add_user.php" method="post" style="margin-left: 500px;">
	<p>STT</p><br><input type="text" name="stt" class="ipdl">	
	<p>UserName</p><br><input type="text" name="userName" class="ipdl">
	<p>Pass</p><br> <input type="text" name="passWord" class="ipdl">
	<p>Phân quyền</p><br> <input type="text" name="pq" class="ipdl">
	<br>
	<input type="submit" value="Thêm" id="btnthem">
</form>
</body>
</html>