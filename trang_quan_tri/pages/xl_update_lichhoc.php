<?php
    $id = $_POST['id'];
    $ma_tkb = $_POST['ma'];
    $do_tuoi = $_POST['do_tuoi'];
    $ma_khoa = $_POST['khoa_hoc'];
    $ph_hoc = $_POST['phong_hoc'];
    $thu_2 = $_POST['thu_2'];
    $thu_3 = $_POST['thu_3'];
    $thu_4 = $_POST['thu_4'];
    $thu_5 = $_POST['thu_5'];
    $thu_6 = $_POST['thu_6'];
    $thu_7 = $_POST['thu_7'];

    $con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
    $sql = "update schedule set id_kind = '$do_tuoi', id_course = '$ma_khoa', id_room = '$ph_hoc', monday = '$thu_2', tuesday = '$thu_3', wednesday = '$thu_4', thursday = '$thu_5', friday = '$thu_6', saturday = '$thu_7' where id_schedule = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
        echo "123";
    }
    else
        header("location: http://localhost:8081/btl_php/light-bootstrap-dashboard-master/examples/dslichhoc.php");
?>