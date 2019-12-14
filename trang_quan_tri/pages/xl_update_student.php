<?php
    $id = $_POST['id'];
    $ma_hv = $_POST['ma_hv'];
    $ho_dem = $_POST['ho_dem'];
    $ten = $_POST['ten_hv'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $email = $_POST['email'];
    $dia_chi = $_POST['dia_chi'];
    $trinh_do = $_POST['trinh_do'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "update student set last_name = '$ho_dem', first_name = '$ten', date_of_birth = '$ngay_sinh', sex = '$gioi_tinh', email = '$email', address_st = '$dia_chi', level_st = '$trinh_do' where id_student = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/trang_quan_tri/pages/dshocvien.php");
?>