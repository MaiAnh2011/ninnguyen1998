<?php
    $id = $_POST['id'];
    $ma_lop = $_POST['ma_lop'];
    $ten_lop = $_POST['ten_lop'];
    $khoa_hoc = $_POST['khoa_hoc'];
    $giao_vien = $_POST['giao_vien'];
    $do_tuoi = $_POST['do_tuoi'];

	$con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
	$sql = "update class set name_class = '$ten_lop', id_course = '$khoa_hoc', id_teacher = '$giao_vien', id_kind = '$do_tuoi' where id_class = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
    	echo "123";
    }
    else
    	header("location: http://localhost:8081/btl_php/trang_quan_tri/pages/dslophoc.php");
?>