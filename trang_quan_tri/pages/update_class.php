<?php
	$id = $_GET['id_class'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "select * from class where id_class = '$id'";
    $qr = mysqli_query($con,$sql);
    $rs = mysqli_fetch_assoc($qr);
   
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa lớp học</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Cập nhật lớp học</p>
<form action="xl_update_class.php" method="post" style="margin-left: 500px;">
	<input type="hidden" name="id" value = "<?php echo $id;?>">
	<p id="idma">Mã lớp học</p><br><input class="ipdl" type="text" name="ma_lop" value = "<?php echo $rs['id_class'];?>">
	<p id="idten">Tên lớp học</p><br><input class="ipdl" type="text" name="ten_lop" value = "<?php echo $rs['name_class'];?>">
	<p id="idnn">Khóa học</p><br><input class="ipdl" type="text" name="khoa_hoc" value = "<?php echo $rs['id_course'];?>">
	<p id="idten">Giáo viên</p><br><input class="ipdl" type="text" name="giao_vien" value = "<?php echo $rs['id_teacher'];?>">
	<p id="idnn">Độ tuổi</p><br><input class="ipdl" type="text" name="do_tuoi" value = "<?php echo $rs['id_kind'];?>"><br>
	<input type="submit" value="Cập nhật" id="btncapnhat">
</form>
</body>
</html>
