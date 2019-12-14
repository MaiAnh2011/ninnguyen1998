<?php
	$id = $_GET['stt'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "select * from account where stt = '$id'";
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
<form action="xl_update_user.php" method="post" style="margin-left: 500px; margin-top: 50px;">
	<input type="hidden" name="id" value = "<?php echo $id;?>">
	<p id="idma">STT</p><br><input class="ipdl" type="text" name="stt" value = "<?php echo $rs['STT'];?>">
	<p id="idten">UserName</p><br><input class="ipdl" type="text" name="userName" value = "<?php echo $rs['username'];?>">
	<p id="idnn">Pass</p><br><input class="ipdl" type="text" name="passWord" value = "<?php echo $rs['pass'];?>">
	<br>
	<input type="submit" value="Cập nhật" id="btncapnhat">
</form>
</body>
</html>
