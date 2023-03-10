<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta name="keywords" content="">
    <title>Lotteria</title>
    <meta name="description" content="Lotteria">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Lotteria">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Lotteria">
    <link rel="canonical" href="index.html">
    <link rel="shortcut icon" href="Assets/Frontend/100/047/633/themes/517833/Assets/lotteria_logo.png?1481775169361" type="image/x-icon" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='Assets/Frontend/100/047/633/themes/517833/Assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/Frontend/100/047/633/themes/517833/Assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/Frontend/100/047/633/themes/517833/Assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/Frontend/100/047/633/themes/517833/Assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/Frontend/100/047/633/themes/517833/Assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <script src='Assets/Frontend/100/047/633/themes/517833/Assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='Assets/Frontend/100/047/633/themes/517833/Assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='Assets/Frontend/Assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='Assets/Frontend/100/047/633/themes/517833/Assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1780127515631166";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<!-- header -->
<?php
  include "Views/Frontend/HeaderView.php";
?>
<!-- end header -->
<div class="content">
    <div class="container">
        <h1 style="display:none;">Lotteria</h1>
        <!-- category product -->
        <div class="slideshow">
            <div class="row">
                <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
                    <?php
                      //load mvc o day
                      include "Controllers/Frontend/CategoryController.php";
                      $obj = new categoryController();
                      $obj->index();
                    ?>
                </div>
                <div class="col-md-9">
                <!-- slide -->
                <div class="owl-slider">
                    <div class="item">
                        <!-- ============================ -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" >
                            <div class="item active"> <img style="height: 500px;width: 1000px;" src="Assets/frontend/images/a1.jpg" alt="Los Angeles"> </div>
                                <div class="item"> <img style="height: 500px;width: 1000px;" src="Assets/frontend/images/a2.png" alt="Los Angeles"> </div>
                                <div class="item"> <img style="height: 500px;width: 1000px;" src="Assets/frontend/images/a3.jpg" alt="Chicago"> </div>
                                <div class="item"> <img style="height: 500px;width: 1000px;" src="Assets/frontend/images/a4.jpg" alt="New York"> </div>
                            </div>

                            <!-- Left and right controls -->
                        </div>
                        <!-- ============================ -->
                    </div>
                </div>
                <!-- end slide -->
            </div>
            </div>
        </div>
        <!-- end category product -->
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <!-- end support -->
                <div class="online_support block">
                    <div class="new_title">
                        <h2>H??? tr??? tr???c tuy???n</h2>
                    </div>
                    <div class="block-content">
                        <div class="sp_1">
                            <p>T?? v???n b??n h??ng 1</p>
                            <p>Nguy???n Ch?? Th??nh: 0983xxxxxx</p>
                        </div>
                        <div class="sp_1">
                            <p>Email li??n h???</p>
                            <p>thanhnct244@gmail.com</p>
                        </div>
                    </div>
                </div>
                <!-- end support online -->
                <!-- hot news -->
                <div class="home-blog">
                    <h2 class="title"> <span>Tin t???c</span></h2>
                    <div class="row">
                        <div class="owl-home-blog owl-home-blog-sidebar">
                            <!-- list hot news -->
                            <?php
                                $conn = Connection::getInstance();
                                $stmt = $conn->prepare("select * from tbl_news");  
                                $stmt->execute();
                            ?>
                            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
                                <div class="item">
                                    <div class="article"> 
                                        <div class="info">
                                            <h3><a href="#"><?php echo $row["TenTinTuc"];?></a></h3>
                                            <p class="desc">
                                            <p><?php echo $row["NoiDung"];?></p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <!-- end list hot news -->
                        </div>
                    </div>
                </div>
                <!-- end hot news -->
                <!-- adv -->
                <img src="Assets/Frontend/images/221.jpg">
                <!-- end adv -->

            </div>
            <div class="col-xs-12 col-md-9">
                <!-- main -->
                <?php echo $this->view; ?>
                <!-- end main -->
            </div>
        </div>
        <!-- adv -->
        <!-- <div class="widebanner"> <a href=""><img src="Assets/Frontend/100/047/633/themes/517833/Assets/logo221b.png?1481775169361" alt="#" class="img-responsive"></a> </div> -->
        <!-- end adv -->

    </div>
</div>
<div class="privacy">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="image"> <img src="Assets/Frontend/100/047/633/themes/517833/Assets/ico-service-1221b.png?1481775169361" alt="Giao h??ng mi???n ph??" title="Giao h??ng mi???n ph??" class="img-responsive"> </div>
                <div class="info">
                    <h3>Giao h??ng mi???n ph??</h3>
                    <p>Mi???n ph?? giao h??ng trong n???i th??nh H?? N???i</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"> <img src="Assets/Frontend/100/047/633/themes/517833/Assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuy???n m???i" title="Khuy???n m???i"> </div>
                <div class="info">
                    <h3>Khuy???n m???i</h3>
                    <p>Khuy???n m???i s???n ph???m n???u ????n h??ng tr??n 1.000.000??</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"> <img src="Assets/Frontend/100/047/633/themes/517833/Assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Ho??n tr??? l???i ti???n" title="Ho??n tr??? l???i ti???n"> </div>
                <div class="info">
                    <h3>Ho??n tr??? l???i ti???n</h3>
                    <p>N???u s???n ph???m kh??ng ?????m b???o ch???t l?????ng ho???c s???n ph???m kh??ng ????ng mi??u t???</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <h3>V??? ch??ng t??i</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Trang ch???</a></li>
                        <li><a href="gioi-thieu">Gi???i thi???u</a></li>
                        <li><a href="tin-tuc">Tin t???c</a></li>
                        <li><a href="gioi-thieu">Li??n h???</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>H?????ng d???n</h3>
                    <ul class="list-unstyled">
                        <li><a href="huo-ng-da-n-mua-ha-ng">H?????ng d???n mua h??ng</a></li>
                        <li><a href="huong-dan">Giao nh???n v?? thanh to??n</a></li>
                        <li><a href="do-i-tra-va-ba-o-ha-nh">?????i tr??? v?? b???o h??nh</a></li>
                        <li><a href="account/register">????ng k?? th??nh vi??n</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Ch??nh s??ch</h3>
                    <ul class="list-unstyled">
                        <li><a href="chinh-sach">Ch??nh s??ch thanh to??n</a></li>
                        <li><a href="chi-nh-sa-ch-va-n-chuye-n">Ch??nh s??ch v???n chuy???n</a></li>
                        <li><a href="chi-nh-sa-ch-do-i-tra">Ch??nh s??ch ?????i tr???</a></li>
                        <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Ch??nh s??ch b???o h??nh</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>??i???u kho???n</h3>
                    <ul class="list-unstyled">
                        <li><a href="dieu-khoan">??i???u kho???n s??? d???ng</a></li>
                        <li><a href="die-u-khoa-n-giao-di-ch">??i???u kho???n giao d???ch</a></li>
                        <li><a href="di-ch-vu-tie-n-i-ch">D???ch v??? ti???n ??ch</a></li>
                        <li><a href="quye-n-so-hu-u-tri-tue">Quy???n s??? h???u tr?? tu???</a></li>
                    </ul>
                </div>
            </div>
            <div class="payments-method"> <img src="Assets/Frontend/100/047/633/themes/517833/Assets/payments-method221b.png?1481775169361" alt="Ph????ng th???c thanh to??n" title="Ph????ng th???c thanh to??n"> </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5"> ?? B???n quy???n thu???c v??? Nguy???n Ch?? Th??nh</div>
                <div class="col-xs-12 col-sm-7">
                    <ul class="list-unstyled">
                        <li><a href="http://localhost/QLBanDoAn/index.php">Trang ch???</a></li>
                        <li><a href="gioi-thieu">Gi???i thi???u</a></li>
                        <li><a href="tin-tuc">Tin t???c</a></li>
                        <li><a href="lien-he">Li??n h???</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src='Assets/Frontend/100/047/633/themes/517833/Assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script>
<script src='Assets/Frontend/100/047/633/themes/517833/Assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script>
<script src='Assets/Frontend/100/047/633/themes/517833/Assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script>
<script src='Assets/Frontend/100/047/633/themes/517833/Assets/main221b.js?1481775169361' type='text/javascript'></script>
<script src='Assets/Frontend/100/047/633/themes/517833/Assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
<div class="ajax-error-modal modal">
    <div class="modal-inner">
        <div class="ajax-error-title">L???i</div>
        <div class="ajax-error-message"></div>
    </div>
</div>
<div class="ajax-success-modal modal">
    <div class="overlay"></div>
    <div class="content col-xs-12">
        <div class="ajax-left"> <img class="ajax-product-image" alt="&nbsp;" src="#" style="max-width:65px; max-height:100px"/> </div>
        <div class="ajax-right">
            <p class="ajax-product-title"></p>
            <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> ???? ???????c th??m v??o gi??? h??ng.</p>
            <div class="actions">
                <button class="button" onclick="window.location='cart'">??i t???i gi??? h??ng</button>
                <button class="button" onclick="window.location='checkout'">Thanh to??n</button>
            </div>
        </div>
        <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a> </div>
</div>
</body>
</html>