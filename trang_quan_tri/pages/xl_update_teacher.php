<?php
    $id = $_POST['id'];
    $ma_gv = $_POST['ma_gv'];
    $ho_dem = $_POST['ho_dem'];
    $ten = $_POST['ten_hv'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $email = $_POST['email'];
    $phone = $_POST['dien_thoai'];
    $ngay_vao_lam = $_POST['ngay_vao_lam'];
    $dia_chi = $_POST['dia_chi'];
    $trinh_do = $_POST['trinh_do'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "update teacher set last_name = '$ho_dem', first_name = '$ten', date_of_birth = '$ngay_sinh', sex = '$gioi_tinh', email = '$email', phone = '$phone', date_start_working = '$ngay_vao_lam',  address_tc = '$dia_chi',level_tc = '$trinh_do' where id_teacher = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dsgiaovien.php");
?>