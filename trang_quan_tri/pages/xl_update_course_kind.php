<?php
    $id = $_POST['id'];
    $ma_khoa = $_POST['ma_khoa'];
    $do_tuoi = $_POST['do_tuoi'];
    $fee = $_POST['fee'];
    $salary = $_POST['salary'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "update course_kind set id_course = '$ma_khoa', id_kind = '$do_tuoi', fee = '$fee', salary = '$salary' where stt = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: course_kind.php");
?>