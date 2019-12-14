<?php
	$ma_lop = $_POST['ma_lop'];
	$ten_lop = $_POST['ten_lop'];
	$khoa_hoc = $_POST['ma_khoa'];
    $giao_vien = $_POST['giao_vien'];
    $do_tuoi = $_POST['do_tuoi'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into class values('$ma_lop','$ten_lop','$khoa_hoc','$giao_vien','$do_tuoi')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dslophoc.php");
?>