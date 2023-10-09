<?php
if (session_id() == "")
  session_start();
if (!isset($_SESSION['LANG'])) {
    $_SESSION['LANG'] = "";
}
if ($_SESSION['LANG'] == "vi")
    include './lang/vi.php';
else
    include './lang/en.php';

include("includes/query_contents.php");
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['redirect_url']="/";
	header('Location: /admin/login');
	exit;
}

if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 1800) {
    // session started more than 30 minutes ago
    session_unset();
    session_destroy();
    session_start();  
    $_SESSION['redirect_url']= "/";
	header('Location: /admin/login');
	exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
    <title>Eurofilm</title>
    <meta name="description" content="EuroFilm" />
    <meta name="viewport" content="width=1140" charset="UTF-8" />
    <link rel="stylesheet" href="lib/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link rel="shortcut icon" href="./icon/logo-web.png" />
    <link rel="stylesheet" href="./css/s.css" />
</head>

<body id="web-body">
    <?php include "./components/navbar.php" ?>

    <div id="index" class="home-video pt-4 pb-4">
        <div class="container p-0">
            <div class="row">
                <img src="./images/main.jpg">
            </div>
        </div>
    </div>
    <div class="home-why background-grey mb-5">
        <div class="container pl-0 pr-0">
            <div class="row">
                <div class="col-6" style="padding-right: 40px;">
                    <div id="about-us" class="home-why-text euro-font-content-book text-black">
                        <h1 class="euro-font-title text-red">
                        <?= _WHY_EURO ?>
                        </h1>
                        <img src="./icon/slide-black-active.png" style="width: 200px; margin-top: -30px;">
                        <?php
                            echo $fetchData[0]["content"];
                        ?>
                    </div>
                </div>
                <div class="col-6">
                    <div id="why-slide" class="carousel slide" data-ride="carousel">
                        <img class="position-absolute" style="top: -2rem; right: -3rem; z-index: 1; width: 100px; height: auto" src="./icon/euro-text-circle-black.png">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/why/1.1.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/why/1.2.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/why/1.3.jpg">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include "./infra.php" ?>
    <?php include "./products.php" ?>
    <?php include "./lab.php" ?>
    <?php include "./accreditations.php" ?>
    <?php include "./partners.php" ?>
    <?php include "./contact.php" ?>

    <footer>
        <?php include "./components/footer.php" ?>
    </footer>
    <script src="https://kit.fontawesome.com/4e75f15372.js" crossorigin="anonymous"></script>
    <script src="lib/js/jquery.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>