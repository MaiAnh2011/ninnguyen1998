<?php
    $stt = $_POST['stt'];
	$ma_khoa = $_POST['ma_khoa'];
	$do_tuoi = $_POST['do_tuoi'];
	$hoc_phi = $_POST['hoc_phi'];
    $luong = $_POST['luong'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into course_kind values('$ma_khoa', '$do_tuoi','$hoc_phi', '$luong', '$stt')";

    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: course_kind.php");
?>