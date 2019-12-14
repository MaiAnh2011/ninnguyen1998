
<!DOCTYPE html>
<html>
<head>
	<title>Thêm lớp học</title>
	<link rel="stylesheet" type="text/css" href="add_class.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Thêm lớp học</p>
<form action="xl_add_class.php" method="post" style="margin-left: 500px;">
	<p>Mã lớp học</p><input type="text" name="ma_lop" class="indl">	<p>Tên lớp học</p><input type="text" name="ten_lop" class="indl">
	<p>Khóa học</p> <input type="text" name="ma_khoa" class="indl">
	<p>Giáo viên</p><input type="text" name="giao_vien" class="indl">
	<p>Độ tuổi</p> <input type="text" name="do_tuoi" class="indl"><br>
	<input type="submit" value="Thêm" id="btnthem">
</form>
</body>
</html>