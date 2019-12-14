<?php
	$id = $_GET['id_teacher'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "select * from teacher where id_teacher = '$id'";
    $qr = mysqli_query($con,$sql);
    $rs = mysqli_fetch_assoc($qr);
   
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa giáo viên</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 600px;
    margin-top: 50px; font-size: 50px; color: red">Cập nhật thông tin giáo viên</p>
<form action="xl_update_teacher.php" method="post" style="margin-left: 500px; margin-top: 50px;">
	<input type="hidden" name="id" value = "<?php echo $id;?>">
	<p id="idma">Mã giáo viên</p><br><input class="ipdl" type="text" name="ma_gv" value = "<?php echo $rs['id_teacher'];?>">
	<p id="idten">Họ đệm</p><br><input class="ipdl" type="text" name="ho_dem" value = "<?php echo $rs['last_name'];?>">
	<p id="idnn">Tên</p><br><input class="ipdl" type="text" name="ten_hv" value = "<?php echo $rs['first_name'];?>">
	<p id="idten">Ngày sinh</p><br><input placeholder="yyyy/mm/dd" class="ipdl" type="text" name="ngay_sinh" value = "<?php echo $rs['date_of_birth'];?>">
	<p id="idnn">Giới tính</p><br><input class="ipdl" type="text" name="gioi_tinh" value = "<?php echo $rs['sex'];?>">
	<p id="idten">Email</p><br><input class="ipdl" type="text" name="email" value = "<?php echo $rs['email'];?>">
	<p id="idnn">Điện thoại</p><br><input class="ipdl" type="text" name="dien_thoai" value = "<?php echo $rs['phone'];?>">
	<p id="idten">Ngày vào làm</p><br><input placeholder="yyyy/mm/dd" class="ipdl" type="text" name="ngay_vao_lam" value = "<?php echo $rs['date_start_working'];?>">
	<p id="idnn">Địa chỉ</p><br><input class="ipdl" type="text" name="dia_chi" value = "<?php echo $rs['address_tc'];?>">
	<p id="idten">Trình độ</p><br><input class="ipdl" type="text" name="trinh_do" value = "<?php echo $rs['level_tc'];?>"><br>
	<input type="submit" value="Cập nhật" id="btncapnhat">
</form>
</body>
</html>
