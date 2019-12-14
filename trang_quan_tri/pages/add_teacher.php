

<!DOCTYPE html>
<html>
<head>
	<title>Thêm giáo viên</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Thêm giáo viên</p>
<form action="xl_add_teacher.php" method="post" style="margin-left: 500px;">
	<p>Mã giáo viên</p><br><input type="text" name="ma_gv" class="ipdl">	
	<p>Họ đệm</p><br><input type="text" name="ho_dem" class="ipdl">
	<p>Tên</p><br> <input type="text" name="ten_hv" class="ipdl">
	<p>Ngày sinh</p><br><input placeholder="yyyy/mm/dd" type="text" name="ngay_sinh" class="ipdl">
	<p>Giới tính</p> <br><input type="text" name="gioi_tinh" class="ipdl">
	<p>Email</p><br><input type="text" name="email" class="ipdl">
	<p>Số điện thoại</p><br><input type="text" name="dien_thoai" class="ipdl">	
	<p>Ngày vào làm</p><br><input placeholder="yyyy/mm/dd" type="text" name="ngay_vao_lam" class="ipdl">	
	<p>Địa chỉ</p><br><input type="text" name="dia_chi" class="ipdl">
	<p>Trình độ</p> <br><input type="text" name="trinh_do" class="ipdl"><br>
	<input type="submit" value="Thêm" id="btnthem">
</form>
</body>
</html>