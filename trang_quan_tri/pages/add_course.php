

<!DOCTYPE html>
<html>
<head>
	<title>Thêm khóa học</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Thêm khóa học</p>
<form action="xl_add_course.php" method="post" style="margin-left: 500px;">
	<p id="idt2">Mã khóa học</p><br><input type="text" name="ma_kh" class="ipdl"><br>
	<p id="idr3">Tên khóa học</p><br> <input type="text" name="ten_kh" class="ipdl"><br>
	<p id="idt4">Ngày bắt đầu</p><br><input placeholder="yyyy/mm/dd" type="text" name="ngay_bat_dau" class="ipdl"><br>
	<p id="idt5">Ngày kết thúc</p><br><input placeholder="yyyy/mm/dd" type="text" name="ngay_ket_thuc" class="ipdl"><br>
	<p id="idt6">Ngôn ngữ</p><br> <input type="text" name="ngon_ngu" class="ipdl"><br>

	<input type="submit" value="Thêm" id="btnthem">
</form>
</body>
</html>