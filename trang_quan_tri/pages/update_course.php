<?php
	$id = $_GET['id_course'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "select * from course where id_course = '$id'";
    $qr = mysqli_query($con,$sql);
    $rs = mysqli_fetch_assoc($qr);
   
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa khóa học</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 200px; font-size: 50px; color: red">Cập nhật khóa học</p>
<form action="xl_update_course.php" method="post" style="margin-left: 500px;">
	<input type="hidden" name="id" value = "<?php echo $id;?>"><br>
	<p id="idma">Mã khóa học</p><br><input class="ipdl" id="ma" type="text" name="ma_kh" value = "<?php echo $rs['id_course'];?>"><br>
	<p id="idten">Tên khóa học</p><br><input class="ipdl" id="ten" type="text" name="ten_kh" value = "<?php echo $rs['name_course'];?>"><br>
	<p id="idnn">Ngày bắt đầu</p><br><input   placeholder="yyyy/mm/dd" class="ipdl" id="nn" type="text" name="ngay_bat_dau" value = "<?php echo $rs['date_start'];?>"><br>
	<p id="idma">Ngày kết thúc</p><br><input  placeholder="yyyy/mm/dd" class="ipdl" id="ma" type="text" name="ngay_ket_thuc" value = "<?php echo $rs['date_end'];?>"><br>
	<p id="idten">Ngôn ngữ</p><br><input class="ipdl" id="ten" type="text" name="ngon_ngu" value = "<?php echo $rs['LANGUAGE_nn'];?>"><br>
	<input type="submit" value="Cập nhật" id="btncapnhat">
</form>
</body>
</html>
