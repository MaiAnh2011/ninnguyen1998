<?php
    $id = $_GET['id_course'];

    $con = mysqli_connect("localhost", "root","","qlttnn") or die ("loi ket noi");
    $sql = "DELETE FROM course WHERE id_course = '$id'";
    $qr = mysqli_query($con,$sql);

    if(!$qr)
    {
        echo "<script>alert('Xóa thất bại);</script>";
        header("location: danhsachkhoahoc.php");
    }
    else
    {
        echo "<script>alert('Xóa thành công);</script>";
        header("location: danhsachkhoahoc.php");
    }
        
?>