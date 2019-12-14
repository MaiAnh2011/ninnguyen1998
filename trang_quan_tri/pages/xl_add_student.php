<?php
	$ma_hv = $_POST['ma_hv'];
	$ho_dem = $_POST['ho_dem'];
	$ten = $_POST['ten_hv'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $email = $_POST['email'];
    $dia_chi = $_POST['dia_chi'];
    $trinh_do = $_POST['trinh_do'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into student values('$ma_hv','$ho_dem','$ten','$ngay_sinh','$gioi_tinh','$email','$dia_chi','$trinh_do')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dshocvien.php");
?>