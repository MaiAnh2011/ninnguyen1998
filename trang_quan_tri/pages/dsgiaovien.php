
<?php
    

    $con = mysqli_connect("localhost", "root","","qlttnn");

        $sql = "select * from teacher";
        if(isset($_POST['search']))
        {
            $tk = $_POST['search'];
            $sql = "select * from teacher where id_teacher like '%$tk%' or last_name like N'%$tk%' or first_name like N'%$tk%'
            or date_of_birth like '%$tk%' or sex like N'%$tk%' or email like N'%$tk%' or phone like '%$tk%'
            or date_start_working like '%$tk%' or address_tc like N'%$tk%' or level_tc like N'%$tk%'";
        }
        $qr = mysqli_query($con,$sql);

?>

<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Trang chủ</p>
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-link" href="danhsachkhoahoc.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Khóa học</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="dslichhoc.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Lịch học</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="dshocvien.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Học viên</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="dsgiaovien.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Giáo viên</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="dsnguoidung.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Người dùng</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="dslophoc.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Lớp học</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="student_class.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Học viên - lớp học</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="course_kind.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Học phí_lương</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row">

                            <form action="" method="POST" role="form">
                                <span style="height: 40px;font-size: 28px;margin-right: 10px;margin-left: 18px;">Tìm kiếm:</span><input class="ipdl" type="text" name="search" style="height: 40px;border: 1px solid black;border-radius: 10px;width: 400px;">
                                <button style="height: 40px;border-radius: 5px; margin-left: 10px" type="submit">Search</button>
                            </form>
                        </div>
                        <h1 style="text-align: center; margin-left: 400px">Danh sách giáo viên</h1>
                        <br><br><br>

                        <table border="1" style="width: 100%;text-align: center; margin: 50px; border-radius: 5px">
                            <tr>
                                <th style="text-align: center;">STT</th>
                                <th style="text-align: center;">Mã GV</th>
                                <th style="text-align: center;">Họ đệm</th>
                                <th style="text-align: center;">Tên</th>
                                <th style="text-align: center;">Ngày sinh</th>
                                <th style="text-align: center;">Giới tính</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Điện thoại</th>
                                <th style="text-align: center;">Ngày vào làm</th>
                                <th style="text-align: center;">Địa chỉ</th>
                                <th style="text-align: center;">Trình độ</th>
                                <th style="text-align: center;">Thêm sửa</th>
                                <th style="text-align: center;">Xóa</th>
                            </tr>
                            <?php
                                $i = 1;
                                while ($stt = mysqli_fetch_array($qr, MYSQLI_ASSOC)) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $stt['id_teacher']; ?></td>
                                <td><?php echo $stt['last_name']; ?></td>
                                <td><?php echo $stt['first_name']; ?></td>
                                <td><?php echo $stt['date_of_birth']; ?></td>
                                <td><?php echo $stt['sex']; ?></td>
                                <td><?php echo $stt['email']; ?></td>
                                <td><?php echo $stt['phone']; ?></td>
                                <td><?php echo $stt['date_start_working']; ?></td>
                                <td><?php echo $stt['address_tc']; ?></td>
                                <td><?php echo $stt['level_tc']; ?></td>
                                <td>
                                    <a href='add_teacher.php'>Thêm</a>
                                    <a href='update_teacher.php?id_teacher=<?php echo $stt['id_teacher']; ?>'> | Sửa</a>
                                </td>
                                <td>
                                    <a href="javascript:confirmDelete('delete_teacher.php?id_teacher=<?php echo $stt['id_teacher']; ?>')">Xóa</a>
                                </td>
                            </tr>
                            <?php                     
                                    $i++;
                                }
                            ?>
                        </table>
                        
                    </div>
                    
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
    function confirmDelete(delUrl) 
    { 
        if (confirm("Bạn có chắc là muốn xóa?")) 
        { 
        document.location = delUrl; 
        } 
    } 
</script>

</html>

    

