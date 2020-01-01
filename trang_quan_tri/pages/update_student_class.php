<?php
	$id = $_GET['stt'];
	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "select * from student_class where stt = '$id'";
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
    margin-top: 50px; font-size: 50px; color: red">Cập nhật đăng ký lớp học</p>
<form action="xl_update_student_class.php" method="post" style="margin-left: 500px;">
	<input type="hidden" name="id" value = "<?php echo $id;?>">
	<p id="idma">Mã lớp học</p><br><input class="ipdl" type="text" name="ma_lop" value = "<?php echo $rs['id_class'];?>">
	<p id="idten">Mã học viên</p><br><input class="ipdl" type="text" name="ma_hv" value = "<?php echo $rs['id_student'];?>">
	<p id="idnn">Tình trạng nộp học phí</p><br><input class="ipdl" type="text" name="nop" value = "<?php echo $rs['status_n'];?>">
	<input type="submit" value="Cập nhật" id="btncapnhat">
</form>
</body>
</html>
