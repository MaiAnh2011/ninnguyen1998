<?php
	$ma_gv = $_POST['ma_gv'];
	$ho_dem = $_POST['ho_dem'];
	$ten = $_POST['ten_hv'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $email = $_POST['email'];
    $sdt = $_POST['dien_thoai'];
    $ngay_vao_lam = $_POST['ngay_vao_lam'];
    $dia_chi = $_POST['dia_chi'];
    $trinh_do = $_POST['trinh_do'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "insert into teacher values('$ma_gv','$ho_dem','$ten','$ngay_sinh','$gioi_tinh','$email','$sdt','$ngay_vao_lam','$dia_chi','$trinh_do')";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dsgiaovien.php");
?>