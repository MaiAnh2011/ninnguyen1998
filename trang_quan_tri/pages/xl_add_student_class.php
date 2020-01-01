<?php
	$ma_lop = $_POST['ma_lop'];
	$ma_hv = $_POST['ma_hv'];
	$nop = $_POST['nop'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into student_class values('$ma_hv', '$ma_lop','$nop')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: student_class.php");
?>