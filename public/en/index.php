<?php
include("../includes/query_contents.php");
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['redirect_url']="/en/";
	header('Location: /admin/login');
	exit;
}

if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 1800) {
    // session started more than 30 minutes ago
    session_unset();    // change session ID for the current session and invalidate old session ID
    $_SESSION['redirect_url']= "/en/";
	header('Location: /admin/login');
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Eurofilm</title>
    <meta name="description" content="EuroFilm" />
    <meta name="viewport" content="width=1140" charset="UTF-8" />
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/common.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../icon/logo-web.png" />
    <link rel="stylesheet" href="../css/s.css" />
</head>

<body id="web-body">
    <?php include "./components/navbar.html" ?>

    <div id="index" class="home-video pt-5 pb-5" style="background: linear-gradient(to bottom, #ebebeb 50%, #fff 50%)">
        <div class="container p-0">
            <div class="row">
                <img src="../images/main.jpg">
            </div>
        </div>
    </div>
    <div class="home-why">
        <div class="container pl-0 pr-0">
            <div class="row">
                <div class="col-6" style="padding-right: 40px;">
                    <div id="why-euro" class="home-why-text euro-font-content-book">
                        <h1 class="euro-font-title ">
                            WHY EURO FILM
                        </h1>
                        <img src="../icon/slide-white-active.png" style="width: 200px; margin-top: -30px;">
                        <?php
                            echo $fetchData[0]["content"];
                        ?>
                    </div>
                </div>
                <div class="col-6">
                    <div id="why-slide" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/why/1.1.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/why/1.2.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="../images/why/1.3.jpg">
                            </div>
                        </div>
                        <!-- <a class="carousel-control-prev" href="#why-slide" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#why-slide" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="euro-text-background-vertical">

        <div id="pro-slide" class="carousel slide" data-ride="carousel"
            style="top: -100px; position: relative; overflow-y: wrap !important;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container home-img pl-0 pr-0">
                        <div class="row">
                            <div class="col-5 big-img" style="padding-right: 10px;">
                                <div class="img img12">
                                    <!-- <img src="../ext/img/1.4.jpg" style='width: 100%; object-fit: contain'> -->
                                </div>
                            </div>
                            <div class="col-7">
                                <div style="align-self: flex-end; width: 100%;">
                                    <div>
                                        <h2 class="euro-font-title">SẢN PHẨM</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 small-img">
                                            <div class="img img13" style="margin-right: 10px;">
                                            </div>
                                        </div>
                                        <div class="col-6 small-img ">
                                            <div class="img img14">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container home-img pl-0 pr-0">
                        <div class="row">
                            <div class="col-5 big-img" style="padding-right: 10px;">
                                <div class="img img12-2">
                                    <!-- <img src="../ext/img/1.4.jpg" style='width: 100%; object-fit: contain'> -->
                                </div>
                            </div>
                            <div class="col-7">
                                <div style="align-self: flex-end; width: 100%;">
                                    <div>
                                        <h2 class="euro-font-title">SẢN PHẨM</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 small-img">
                                            <div class="img img13-2" style="margin-right: 10px;">
                                            </div>
                                        </div>
                                        <div class="col-6 small-img ">
                                            <div class="img img14-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <a class="carousel-control-prev" href="#pro-slide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#pro-slide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
        <div class="d-flex justify-content-center" style="margin-top: -80px; margin-bottom: 50px;">
            <a class="" href="#pro-slide" role="button" data-slide="next">
                <img src="../icon/slide-black.png" style="width: 160px; margin-bottom: 10px;">
            </a>
        </div>
        <!-- <div class="container home-img pl-0 pr-0">
            <div class="row" style="top: -100px; position: relative;">
                <div class="col-5 big-img" style="padding-right: 10px;">
                    <div class="img img12">
                    </div>
                </div>
                <div class="col-7">
                    <div style="align-self: flex-end; width: 100%;">
                        <div>
                            <h2 class="euro-font-title">SẢN PHẨM</h2>
                        </div>
                        <div class="row">
                            <div class="col-6 small-img">
                                <div class="img img13" style="margin-right: 10px;">
                                </div>
                            </div>
                            <div class="col-6 small-img ">
                                <div class="img img14">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="home-big-text">
            <div class="container pl-0 pr-0">
                <div class="row" style="padding: 0;">
                    <div class="col-12 p-0">
                        <h1>
                            CƠ SỞ VẬT CHẤT
                        </h1>
                        <img src="../icon/slide-white-active.png"
                            style="width: 200px; margin-top: -20px; margin-bottom: 20px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="home-img-2 container" style="padding: 0;">
            <div class="row">
                <div class="col-12 p-0">
                    <div id="csvc-slide" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="img-2-holder row">
                                    <div class="col-6 img-1">
                                        <img src="../images/csvc/1.jpg" alt="">
                                    </div>
                                    <div class="col-6 img-2">
                                        <img src="../images/csvc/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-2-holder row">
                                    <div class="col-6 img-1">
                                        <img src="../images/csvc/3.jpg" alt="">
                                    </div>
                                    <div class="col-6 img-2">
                                        <img src="../images/csvc/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-2-holder row">
                                    <div class="col-6 img-1">
                                        <img src="../images/csvc/5.jpg" alt="">
                                    </div>
                                    <div class="col-6 img-2">
                                        <img src="../images/csvc/6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-2-holder row">
                                    <div class="col-6 img-1">
                                        <img src="../images/csvc/7.jpg" alt="">
                                    </div>
                                    <div class="col-6 img-2">
                                        <img src="../images/csvc/8.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-2-holder row">
                                    <div class="col-6 img-1">
                                        <img src="../images/csvc/9.jpg" alt="">
                                    </div>
                                    <div class="col-6 img-2">
                                        <img src="../images/csvc/10.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-2-holder row">
                                    <div class="col-6 img-1">
                                        <img src="../images/csvc/5.jpg" alt="">
                                    </div>
                                    <div class="col-6 img-2">
                                        <img src="../images/csvc/11.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="carousel-control-prev" href="#csvc-slide" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#csvc-slide" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center" style="margin-top: -50px; z-index: 50;">
                    <a href="#csvc-slide" role="button" data-slide="next">
                        <img src="../icon/slide-white.png" style="width: 200px; display: block;">
                    </a>

                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 justify-content-center">
                    <h2 class="d-block euro-font-title">BRUCKNER</h2>
                    <div class="d-flex justify-content-center">
                        <div>
                            <p>
                                * There are two Production lines BOPP - Bruckner brand Name
                            </p>
                            <p>
                                * The process capacity is about 48000 tons of products per year.
                            </p>
                            <p>
                                * Total width of semi-product: 8.4met
                            </p>
                            <p>
                                * Total area: (WS1: 10.752m2, WS2: 10,227.32sqm)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-contact">
            <div>
                <h1 class="text-blue euro-font-title">
                    PARTNER COMPANIES
                </h1>
                <div class="row logos">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <div id="doitac-slide" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <ul class="row img-sli justify-content-between">
                                        <li class="">
                                            <img src="../images/doitac/ampacking copy-01.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/bao bi trung son copy.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/bao tin copy-01-01.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/batico.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/bunzl.jpg" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/dai luc copy.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <ul class="row img-sli justify-content-between">
                                        <li class="">
                                            <img src="../images/doitac/dica.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/goda.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/lo duc.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/Logo-HMT-V-01 copy.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/logo1.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/saphia copy.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <ul class="row img-sli justify-content-between">
                                        <li class="">
                                            <img src="../images/doitac/tan dai hung.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/tan hiep loi.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/tien phat.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/viet hoa.png" alt="">
                                        </li>
                                        <li class="">
                                            <img src="../images/doitac/vinapacking.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <ul class="row img-sli justify-content-between">
                                        <li class="col-6">
                                            <img src="../images/ctlk/1.png" alt="">
                                        </li>
                                        <li class="col-6">
                                            <img src="../images/ctlk/2.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#doitac-slide" role="button" data-slide="next">
                        <img src="../icon/slide-black.png" style="width: 160px; margin-bottom: 10px;">
                    </a>

                </div>
            </div>
        </div>
    </div>

    <?php include "./products.html" ?>
    <?php include "./lab.html" ?>
    <?php include "./infra.html" ?>
    <?php include "./contact.html" ?>

    <!-- <footer>
        <?php include "./components/footer.html" ?>
    </footer> -->
    <script src="https://kit.fontawesome.com/4e75f15372.js" crossorigin="anonymous"></script>
    <script src="../lib/js/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>