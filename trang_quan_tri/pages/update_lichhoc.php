<?php
	$id = $_GET['id_schedule'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "select * from schedule where id_schedule = '$id'";
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
    margin-top: 50px; font-size: 50px; color: red">Cập nhật lịch học</p>
<form action="xl_update_lichhoc.php" method="post" style="margin-left: 500px; margin-top: -50px">
	<input type="hidden" name="id" value = "<?php echo $id;?>"><br>
	<p id="idma">Mã</p><br><input class="ipdl" id="ma_tkb" type="text" name="ma" value = "<?php echo $rs['id_schedule'];?>"><br>
	<p id="idten">Độ tuổi</p><br><input class="ipdl" id="ten" type="text" name="do_tuoi" value = "<?php echo $rs['id_kind'];?>"><br>
	<p id="idnn">Khóa học</p><br><input  class="ipdl" id="nn" type="text" name="khoa_hoc" value = "<?php echo $rs['id_course'];?>"><br>
	<p id="idma">Phòng học</p><br><input class="ipdl" id="ma" type="text" name="phong_hoc" value = "<?php echo $rs['id_room'];?>"><br>
	<p id="idten">Thứ 2</p><br><input class="ipdl" id="ten" type="text" name="thu_2" value = "<?php echo $rs['monday'];?>"><br>
	<p id="idnn">Thứ 3</p><br><input class="ipdl" id="nn" type="text" name="thu_3" value = "<?php echo $rs['tuesday'];?>"><br>
	<p id="idma">Thứ 4</p><br><input class="ipdl" id="ma" type="text" name="thu_4" value = "<?php echo $rs['wednesday'];?>"><br>
	<p id="idten">Thứ 5</p><br><input class="ipdl" id="ten" type="text" name="thu_5" value = "<?php echo $rs['thursday'];?>"><br>
	<p id="idnn">Thứ 6</p><br><input class="ipdl" id="nn" type="text" name="thu_6" value = "<?php echo $rs['friday'];?>"><br>
	<p id="idma">Thứ 7</p><br><input class="ipdl" id="ma" type="text" name="thu_7" value = "<?php echo $rs['saturday'];?>"><br>
	<input type="submit" value="Cập nhật" id="btncapnhat">
</form>
</body>
</html>