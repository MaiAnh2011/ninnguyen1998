<?php
	$id = $_GET['id_student'];
	

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "delete from student where id_student = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dshocvien.php");
?>