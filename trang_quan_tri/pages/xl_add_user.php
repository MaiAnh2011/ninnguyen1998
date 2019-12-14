<?php
	$stt = $_POST['stt'];
	$user = $_POST['userName'];
	$pass = $_POST['passWord'];
    $pq = $_POST['pq'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into account values('$stt','$user','$pass', '$pq')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/trang_quan_tri/pages/dsnguoidung.php");
?>