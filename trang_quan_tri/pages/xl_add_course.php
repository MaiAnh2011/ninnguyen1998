<?php
	$ma_khoa = $_POST['ma_kh'];
	$ten_khoa = $_POST['ten_kh'];
	$nn = $_POST['ngon_ngu'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into course values('$ma_khoa','$ten_khoa','$nn')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/trang_quan_tri/pages/danhsachkhoahoc.php");
?>