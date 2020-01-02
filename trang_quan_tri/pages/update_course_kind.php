<?php
	$id = $_GET['stt'];
	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "select * from course_kind where stt = '$id'";
    $qr = mysqli_query($con,$sql);
    $rs = mysqli_fetch_assoc($qr);
   
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật lương và học phí</title>
	<link rel="stylesheet" type="text/css" href="add_lichhoc.css">
</head>
<body>
	<p style="margin-left: 680px;
    margin-top: 50px; font-size: 50px; color: red">Cập nhật đăng ký lớp học</p>
<form action="xl_update_course_kind.php" method="post" style="margin-left: 500px;">
	<input type="hidden" name="id" value = "<?php echo $id;?>">
	<p id="idma">Mã khóa học</p><br><input class="ipdl" type="text" name="ma_khoa" value = "<?php echo $rs['id_course'];?>">
	<p id="idten">Độ tuổi</p><br><input class="ipdl" type="text" name="do_tuoi" value = "<?php echo $rs['id_kind'];?>">
	<p id="idnn">Học phí</p><br><input class="ipdl" type="text" name="fee" value = "<?php echo $rs['fee'];?>">
	<p id="idnn">Lương</p><br><input class="ipdl" type="text" name="salary" value = "<?php echo $rs['salary'];?>">
	<input type="submit" value="Cập nhật" id="btncapnhat">
</form>
</body>
</html>
