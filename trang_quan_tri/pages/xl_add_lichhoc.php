<?php
	$ma_tkb = $_POST['ma_tkb'];
	$dotuoi = $_POST['dotuoi'];
	$khoahoc = $_POST['khoahoc'];
    $phonghoc = $_POST['phonghoc'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    $t5 = $_POST['t5'];
    $t6 = $_POST['t6'];
    $t7 = $_POST['t7'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into schedule values('$ma_tkb','$dotuoi','$khoahoc', '$phonghoc','$t2','$t3','$t4','$t5','$t6','$t7')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dslichhoc.php");
?>