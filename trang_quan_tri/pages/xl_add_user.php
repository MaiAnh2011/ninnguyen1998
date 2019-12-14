<?php
	$stt = $_POST['stt'];
	$user = $_POST['userName'];
	$pass = $_POST['passWord'];
    

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into account values('$stt','$user','$pass')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dsnguoidung.php");
?>