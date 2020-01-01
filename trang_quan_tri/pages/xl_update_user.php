<?php
    $id = $_POST['id'];
    $stt = $_POST['stt'];
    $user = $_POST['userName'];
    $pass = $_POST['passWord'];
    $pq = $_POST['pq'];
    $id_user = $_POST['id_user'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "update account set username = '$user', pass = '$pass', pq = '$pq', id_user = '$id_user' where stt = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: dsnguoidung.php");
?>