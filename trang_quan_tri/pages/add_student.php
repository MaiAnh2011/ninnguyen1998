
<!DOCTYPE html>
<html>
<head>
	<title>Thêm học viên</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Thêm học viên</p>
<form action="xl_add_student.php" method="post" style="margin-left: 500px;">
	<p>Mã học viên</p><br><input type="text" name="ma_hv" class="ipdl">	
	<p>Họ đệm</p><br><input type="text" name="ho_dem" class="ipdl">
	<p>Tên</p> <br><input type="text" name="ten_hv" class="ipdl">
	<p>Ngày sinh</p><br><input placeholder="yyyy/mm/dd" type="text" name="ngay_sinh" class="ipdl">
	<p>Giới tính</p><br> <input type="text" name="gioi_tinh" class="ipdl">
	<p>Email</p><br><input type="text" name="email" class="ipdl">	
	<p>Địa chỉ</p><br><input type="text" name="dia_chi" class="ipdl">
	<p>Trình độ</p> <br><input type="text" name="trinh_do" class="ipdl"><br>
	<input type="submit" value="Thêm" id="btnthem">
</form>
</body>
</html>