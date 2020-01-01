<?php
    $id = $_POST['id'];
    $ma_lop = $_POST['ma_lop'];
    $ma_hv = $_POST['ma_hv'];
    $nop = $_POST['nop'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "update student_class set id_class = '$ma_lop', id_student = '$ma_hv', status_n = '$nop' where stt = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: student_class.php");
?>