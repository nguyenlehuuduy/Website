<?php
session_start();
require 'db_connection.php';

if (isset($_POST['user_tieude']) && isset($_POST['user_dienthoai']) && isset($_POST['user_email']) && isset($_POST['user_chucdanh'])  && isset($_POST['user_tencongty']) && isset($_POST['user_mota']) && isset($_POST['user_diadiem'])  && isset($_POST['user_dangtuyen']) && isset($_POST['user_noidung']) && isset($_POST['user_dongy'])) {


    if (!empty(trim($_POST['user_tieude']))  && !empty(trim($_POST['user_dienthoai'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_chucdanh']) && !empty(trim($_POST['user_tencongty'])) && !empty(trim($_POST['user_mota'])) && !empty($_POST['user_diadiem']) && !empty(trim($_POST['user_dangtuyen'])) && !empty(trim($_POST['user_noidung'])) && !empty($_POST['user_dongy'])) {

        $user_tieude = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_tieude']));
        $user_dienthoai = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_dienthoai']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
        $user_chucdanh = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_chucdanh']));
        $user_tencongty = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_tencongty']));
        $user_mota = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_mota']));
        $user_diadiem = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_diadiem']));
        $user_dangtuyen = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_dangtuyen']));
        $user_noidung = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_noidung']));
        $user_dongy = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_dongy']));

        $insert_user = mysqli_query($db_connection, "INSERT INTO `baidang` (user_tieude,user_dienthoai,user_email,user_chucdanh,user_tencongty,user_mota,user_diadiem,user_dangtuyen,user_noidung,user_dongy)
                                              VALUES ('$user_tieude','$user_dienthoai', '$user_email', '$user_chucdanh','$user_tencongty', '$user_mota', '$user_diadiem','$user_dangtuyen', '$user_noidung', '$user_dongy')");
        if ($insert_user === TRUE) {
            $success_message = "C???m ??n! B???n ???? g???i th??ng tin th??nh c??ng.";
        } else {
            $error_message = "Gi??o s??! C?? g?? ???? kh??ng ????ng.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Qu???n L?? H??? S??</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- link ic ???nh ?????u website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- link css library hover-min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/hover-min.css">
    <!-- Link css cu???i website  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/topandbottom.css">
    <!-- link css Qu???n l?? h??? s?? ch??nh c???a trang qu???ng l?? h??? s??  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/QuanLiHoSo.css">
    <!-- Script Bi???u ????? th???ng k?? -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Th???ng k?? S??? l?????ng ng?????i g???i ????n xin vi???c N??m 2021 -->
    <script src="/PROJECT_JOB/javascrip/js/nhatuyendung/quanlihoso.js"></script>
    <script src="/PROJECT_JOB/javascrip/js/nhatuyendung/ThongKe1.js"></script>
    <!--Th???ng k?? Kinh nghi???m c???a ng?????i ????ng k?? -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/style.css">
    <!-- link css button  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/job/css/button.css">

</head>

<body>

    <!-- Thanh Menu ??i???u khi???n ????ng K?? - ????ng Nh???p - D??nh cho ???ng vi??n  -->
    <div class="container-fluid">
        <!--------------thanh h??? tr???-------------->
        <nav class="navbar fixed-top animate__animated animate__fadeInDown bg-dark" id="hotro1">
            <a class="nav nav-link disabled animate__animated animate__fadeInDown" id="pic1" href="#" tabindex="-1" aria-disabled="true">
                <i class="fas fa-phone-alt text-white"></i>
                <b>035 865 0975 Li??n h???</b>
            </a>
            <ul class="nav justify-content-end">
                <!-- <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="DangKyChoNhaTuyenDung.php" style="color: rgb(84, 122, 163); ">
                        <button class="btn btn-outline-light hvr-curl-top-left">????ng K??</button>
                    </a>
                </li>
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="DangNhapDanhChoNhaTuyenDung.php" style="color: rgb(84, 122, 163);">
                        <button class="btn btn-outline-light hvr-curl-top-left">????ng Nh???p</button>
                    </a>
                </li> -->
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="logout.php" style="color: rgb(84, 122, 163); ">
                        <button class="btn btn-outline-light hvr-curl-top-left">????ng xu???t</button>
                    </a>
                </li>
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="/PROJECT_JOB/ungtuyen/html/TrangChu.php" style="color: rgb(84, 122, 163);">
                        <button class="btn btn-success hvr-curl-top-left">D??nh cho ???ng vi??n</button>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Thanh ??i???u khi???n c??c li??n k???t t???i Trang ch??? - ????ng tuy???n d???ng - qu???n l?? tuy???n d???ng  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container" style="margin-top: 9vh;">
            <a class="navbar-brand " href="TrangChuNhaTuyenDung.php"><img src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" alt="" style="width: 200px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

                <ul class="nav me-auto mb-2 mb-lg-0 justify-content-end">
                    <li class="nav-item ">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="TrangChuNhaTuyenDung.php">
                            Trang ch???
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="DangTinVaTimUngVien.php">
                            ????ng Tuy???n & T??m ???ng Vi??n
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="QuanLiHoSo.php">
                            Qu???n L?? Tuy???n D???ng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Ph???n gi???a -->
    <div class="container" style="margin-top: 20px;">
        <!-- Tab Th???ng K?? V?? ????ng tuy???n d???ng -->
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <!-- Th???ng K?? -->
            <li class="nav-item" role="presentation">
                <button class="nav-link hvr-icon-forward" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><b>
                        Th???ng K?? <i class="fa fa-chevron-circle-right hvr-icon"></i></b></button>
            </li>
            <!-- ????ng tuy???n d???ng -->
            <li class="nav-item" role="presentation">
                <button class="nav-link active  hvr-icon-back" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><b> <i class="fa fa-chevron-circle-left hvr-icon"></i>????ng Tuy???n D???ng</b></button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- Form ????ng tuy???n d???ng -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-12 col-8">
                        <form method="post" class="row" style="margin-top: 50px;" action="">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Ti??u ?????</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nh???p ti??u ?????" name="user_tieude">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">??i???n Tho???i</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nh???p s??? ??i???n tho???i" name="user_dienthoai">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Nh???p Email c???a b???n" name="user_email">
                            </div>
                            <div class="col-md-4">
                                <label for="inputAddress2" class="form-label">Ch???c Danh C???a B???n</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Ch???c Danh" name="user_chucdanh">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">T??n C??ng Ty</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="T??n C??ng Ty C???a B???n" name="user_tencongty">
                            </div>
                            <div class="col-md-10">
                                <label for="inputCity" class="form-label">M?? T??? C??ng Ty</label>
                                <div class="form-floating">
                                    <textarea name="user_mota" class="form-control" placeholder="M?? T??? C??ng Ty" id="floatingTextarea2" style="height: 100px;"></textarea>
                                    <label for="floatingTextarea2"></label>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 10px;">
                                <label for="inputState" class="form-label">?????a ??i???m</label>
                                <select id="inputState" name="user_diadiem" class="form-select">
                                    <option selected>Ch???n ?????a ??i???m</option>
                                    <option value="???? N???ng">???? N???ng</option>
                                    <option value="H?? N???i">H?? N???i</option>
                                    <option value="Qu???ng Nam">Qu???ng Nam</option>
                                    <option value="Th??i B??nh">Th??i B??nh</option>
                                    <option value="Thanh H??a">Thanh H??a</option>
                                    <option value="Kh??c...">Kh??c...</option>
                                </select>
                            </div>
                            <div class="col-md-6" style="margin-top: 10px;">
                                <label for="inputState" class="form-label">S???n Ph???m D???ch V??? Qu?? Kh??ch Quan T??m</label>
                                <select id="inputState" name="user_dangtuyen" class="form-select">
                                    <option selected>????ng Tuy???n D???ng</option>
                                    <option value="????ng Tuy???n D???ng">????ng Tuy???n D???ng</option>
                                    <option value="T??m H??? S?? ???ng Vi??n">T??m H??? S?? ???ng Vi??n</option>
                                    <option value="Qu???ng C??o Tuy???n D???ng">Qu???ng C??o Tuy???n D???ng</option>
                                    <option value="Kh??c...">Kh??c...</option>
                                </select>
                            </div>
                            <div class="col-md-10" style="margin-top: 10px;">
                                <label for="inputCity" class="form-label text-dark">N???i Dung</label>
                                <div class="form-floating">
                                    <textarea name="user_noidung" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                                    <label for="floatingTextarea2"></label>
                                </div>
                            </div>
                            <div class="col-12" style="margin-top: 10px;">
                                <div class="form-check">
                                    <input name="user_dongy" class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" style="color: rgb(0, 8, 8);" for="gridCheck">
                                        ?????ng ?? ????ng tuy???n
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="button_green" type="submit"> ????ng tuy???n </button>
                            </div>
                        </form>
                        <?php
                        if (isset($success_message)) {
                            echo '<div class="success_message">' . $success_message . '</div>';
                        }
                        if (isset($error_message)) {
                            echo '<div class="error_message">' . $error_message . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Th???ng k??  -->
            <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- Th???ng k?? theo s??? ng?????i g???i ????n xin vi???c -->
                <div class="row" style="margin-top: 20px;">
                    <h2><b><b>S??? l?????ng ng?????i g???i ????n xin vi???c N??m 2021</b></b>
                    </h2>
                    <div id="chartdiv1"></div>
                </div>
                <!-- Th???ng k?? theo kinh nghi???m c???a ng????i ????ng k?? -->
                <div class="row">
                    <h2><b><b>Kinh nghi???m c???a ng?????i ????ng k??</b></b>
                    </h2>
                    <div id="chartdiv"></div>
                </div>
                <!-- G???i ?? c?? -->
                <!-- <div class="row text-center" style="margin-top: 50px;">
                    <h2><b><b>Kinh nghi???m c???a ng?????i ????ng k??</b></b>
                    </h2>
                    <div class="col-md-12">
                        <div class="progress-title">
                            <h3 style="color: blue;">Ch??a C?? kinh nghi???m</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 35%; background-color:blue;">
                                    <div class="progress-value">
                                        35%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: chartreuse;">???? c?? kinh nghi???m 1 n??m</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 25%; background-color:chartreuse;">
                                    <div class="progress-value">
                                        25%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: brown;">???? c?? kinh nghi???m 3 n??m</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%; background-color:brown;">
                                    <div class="progress-value">
                                        20%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: crimson;">???? c?? kinh nghi???p 5 n??m</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%; background-color:crimson;">
                                    <div class="progress-value">
                                        10%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: red;">Kinh nghi???m tr??n 5 n??m</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 5%; background-color:red;">
                                    <div class="progress-value">
                                        5%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Cu???i Trang Web  -->
    <div class="container-fluid bg-dark text-white" style="margin-top: 50px;">
        <section class="top-footer cb-section cb-section-border-bottom">
            <div class="row">
                <div class="col-lg-12 logo"><img class="lazy-bg" src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" height="100px" width="200px" style="float: left; margin-top: 10px;" alt="Tuy???n d???ng &amp; T??m ki???m vi???c l??m nhanh"></div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>D??nh Cho ???ng Vi??n</h3>
                        <ul>
                            <li><a target="_blank" href="#">Vi???c l??m m???i nh???t</a></li>
                            <li><a target="_blank" href="#">CV Hay</a></li>
                            <li><a target="_blank" href="#">L????ng</a></li>
                            <li><a target="_blank" href="#">C???m Nang</a></li>
                            <li><a target="_blank" href="#">IT Blogs</a></li>
                            <li><a target="_blank" href="#">S?? ????? Trang Web</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>Nh?? Tuy???n D???ng</h3>
                        <ul>
                            <li><a target="_blank" href="#">????ng Tuy???n D???ng</a></li>
                            <li><a target="_blank" href="#">T??m H??? S??</a></li>
                            <li><a target="_blank" href="#">Gi???i Ph??p</a></li>
                            <li><a target="_blank" href="#">S???n Ph???m D???ch V???</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>Trung t??m tr??? gi??p</h3>
                        <ul>
                            <li><a target="_blank" href="#">V??? nguyenlehuuduy.vn</a></li>
                            <li><a target="_blank" href="#">Ch??nh S??ch BV Th??ng Tin</a></li>
                            <li><a target="_blank" href="#">Ch??nh s??ch GDPR</a></li>
                            <li><a target="_blank" href="#">Quy ch??? s??n giao d???ch</a></li>
                            <li><a target="_blank" href="#">Th???a thu???n s??? d???ng</a></li>
                            <li><a target="_blank" href="#">Quy ?????nh b???o m???t</a></li>
                            <li><a target="_blank" href="#">QT Gi???i Quy???t Tranh Ch???p</a></li>
                            <li><a target="_blank" href="#">Tr??? gi??p</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>Website ?????i T??c</h3>
                        <ul>
                            <li><a target="_blank" href="#">NguyenLeHuuDuy</a></li>
                            <li><a target="_blank" href="#">Vieclam.Tuoitre.vn</a></li>
                            <li><a target="_blank" href="#">Vieclam.Vietnamnet.vn</a></li>
                            <li><a target="_blank" href="#">Vieclam.Thanhnien.vn</a></li>
                            <li><a target="_blank" href="#">VieclamIT.vn</a></li>
                            <li><a target="_blank" href="#">Li??n H???</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="footer-app-links">
                        <h3>T??m Ki???m M???i L??c M???i N??i</h3>
                        <div class="app-links">
                            <a href="#" target="_blank" style="float: left;">
                                <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/apple.png" alt="app"> </a>
                            <a href="#" target="_blank">
                                <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/android.png" alt="app"> </a>
                        </div>
                    </div>
                    <div class="footer-social-links">
                        <h3>K???t n???i v???i nguyenlehuuduy.vn</h3>
                        <ul>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/facebook.png" alt="" height="30px" width="30px">
                                <b>Facebook.com</b>
                            </li><br>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/instagram.png" alt="" height="30px" width="30px"><b>Instagram</b></li><br>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/zalo.png" alt="" height="30px" width="30px"><b>Zalo</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-footer">
            <div class="left-bottom-footer">
                <p>Tr??? S??? Ch??nh : 470 Tr???n ?????i Ngh??a - Tr?????ng ?????i H???c C??ng Ngh??? Th??ng Tin V?? Truy???n Th??ng Vi???t - H??n - Qu???n Ng?? H??nh S??n</p>
                <p>V??n Ph??ng : K?? T??c X?? Tr?????ng ?????i H???c C??ng Ngh??? Th??ng Tin V?? Truy???n Th??ng Vi???t - H??n </p>
                <p>Email : nlhduy.20it7@vku.udn.vn</p>
                <p>S??? ??i???n Tho???i : 0358650975</p>
                <p>M???i Th??ng Tin Chi Ti???t Xin Vui L??ng Li??n H??? Cho Ch??ng T??i .</p>
            </div>
            <div class="right-bottom-footer">
                <a target="_blank" href="#">
                    <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/dk.png" alt="bct" style="float: right; margin-top: -100px; margin-right: 100px;">
                </a>
            </div>
        </section>

    </div>
    <!-- Th?? vi???n AOS  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--------- Nh??ng JS c???a Bootstrap -------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>