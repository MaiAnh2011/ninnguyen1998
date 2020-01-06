<?php
    // $con = mysqli_connect("localhost", "root","","qlttnn");
    // $sql = "select email from student";
                                
    // $qr = mysqli_query($con,$sql);
    $to  = "noodat1995@gmail.com";
    $chu_de = $_POST['title'];
    $noi_dung = $_POST['content'];
    $header = "From: ninnguyenthi250698@gmail.com";
    if(mail($to, $chu_de, $noi_dung, $header) == true)
    {
        echo "successful";
    }
    else 
    echo "Fail";
?>