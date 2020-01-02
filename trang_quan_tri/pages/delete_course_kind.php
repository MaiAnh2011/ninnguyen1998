<?php
	$id = $_GET['stt'];
	

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "delete from course_kind where stt = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "Thất bại";
    }
    else
    	header("location: course_kind.php");
?>