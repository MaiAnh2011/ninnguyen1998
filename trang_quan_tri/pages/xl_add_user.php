<?php
	$stt = $_POST['stt'];
	$user = $_POST['userName'];
	$pass = $_POST['passWord'];
    $pq = $_POST['pq'];
    $id_user = $_POST['id_user'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into account values('$stt','$user','$pass', '$id_user', '$pq')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: dsnguoidung.php");
?>