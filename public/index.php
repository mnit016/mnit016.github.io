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
include("includes/query_img.php");

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
    <script src="lib/js/jquery.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link rel="shortcut icon" href="./icon/logo-web.png" />
    <link rel="stylesheet" href="./css/s.css" />
</head>
<body id="web-body">
    <?php require "./components/navbar.php" ?>
    <div id="index" class="home-video pt-4 pb-4">
        <div class="container p-0">
            <div class="row">
                <!-- <video width="100%" height="auto" controls autoplay muted>
                    <source src="./images/main.MOV" type="video/mp4">
                    Your browser does not support the video tag.
                </video> -->
                <iframe width="100%" 
                    src="<?php echo $home_main[0]["path"] ?>" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
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
                        <img loading="lazy" src="./icon/slide-black-active.png" style="width: 200px; margin-top: -30px;">
                        <?php
                            echo $fetchData[0]["content"];
                        ?>
                    </div>
                </div>
                <div class="col-6">
                    <div id="why-slide" class="carousel slide" data-ride="carousel">
                        <img loading="lazy" class="position-absolute" style="top: -2rem; right: -3rem; z-index: 1; width: 100px; height: auto" src="./icon/euro-text-circle-black.png">
                        <div class="carousel-inner">
                            
                        <?php
                            for ($i=0; $i < count($why_euro); $i++) { ?>
                            <div class="carousel-item <?php if ($i == 0) { ?>active <?php } ?>">
                                <img loading="lazy" src="./images/<?php echo $why_euro[$i]["path"] ?>">
                            </div>
                        <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php require "./infra.php" ?>
    <?php require "./products.php" ?>
    <?php require "./applications.php" ?>
    <?php require "./lab.php" ?>
    <?php require "./accreditations.php" ?>
    <?php require "./partners.php" ?>
    <?php require "./sustainabilities.php" ?>
    <?php require "./contact.php" ?>

    <footer>
        <?php require "./components/footer.php" ?>
        <div class="text-center" style="background-color: black">
            Copyright &#169; 2023 Eurofilm, Inc. All rights reserved - Developed by illusion.
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/4e75f15372.js" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>