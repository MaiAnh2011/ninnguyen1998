

<!DOCTYPE html>
<html>
<head>
	<title>Thêm khóa học</title>
	<link rel="stylesheet" type="text/css" href="add_course.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 200px; font-size: 50px; color: red">Thêm khóa học</p>
<form action="xl_add_course.php" method="post" style="margin-left: 500px;">
	<span id="idma">Mã khóa học</span><input type="text" name="ma_kh" id="ma"><br>
	<span id="idten">Tên khóa học</span><input type="text" name="ten_kh" id = "ten"><br>
	<p>Ngày bắt đầu</p><br><input placeholder="yyyy/mm/dd" type="text" name="ngay_bat_dau" class="ipdl">
	<p>Ngày kết thúc</p><br><input placeholder="yyyy/mm/dd" type="text" name="ngay_ket_thuc" class="ipdl">
	<span id="idnn">Ngôn ngữ</span> <input type="text" name="ngon_ngu" id="nn"><br>
	<input type="submit" value="Thêm" id="btnthem">
</form>
</body>
</html>