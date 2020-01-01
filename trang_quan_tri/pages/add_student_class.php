
<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký lớp học</title>
	<link rel="stylesheet" type="text/css" href="add_class.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Đăng ký lớp học</p>
	<form action="xl_add_student_class.php" method="post" style="margin-left: 500px;">
		<p>Mã lớp học</p><input type="text" name="ma_lop" class="indl">	
		<p>Mã học viên</p><input type="text" name="ma_hv" class="indl">
		<p>Tình trạng nộp</p> <input type="text" name="nop" class="indl">
		<br>
		<input type="submit" value="Thêm" id="btnthem">
	</form>
</body>
</html>