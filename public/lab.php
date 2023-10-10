<link rel="stylesheet" href="lib/css/bootstrap.min.css" />
<section id="lab">
    <div class="background-image" style="height: 537px; background-image: url('./images/3.1.jpg');">
        <div class="container p-0 position-relative h-100 w-100">
            <h1 class="position-absolute euro-font-title"
                style="color: white; bottom: 0; font-size: 10rem;"><?= _LAB ?></h1>
        </div>
    </div>
</section>
<section class="mt-4 mb-5 euro-text-background-horizontal">
    <div class="container p-0">
        <div class="w-100 m-auto text-center">
            <h1 class="p-1 font-size-big m-auto euro-font-title"><?= _LAB ?></h1>
            <div class="pt-2 pb-3 text-left euro-font-content-book">
                <?php
                    echo $fetchData[3]["content"];
                ?>
            </div>
        </div>
        <div id="lab-carousel" class="carousel slide" data-ride="carousel" style="height: 927px;">
            <div class="carousel-inner h-100">
            <?php
                for ($i=0; $i < count($lab); $i+=5) { ?>
                <div class="carousel-item h-100 <?php if ($i == 0) { ?>active <?php } ?>">
                    <div class="w-100 h-100 d-block">
                        <div class="row h-100">
                            <div class="h-100 pr-2" style="width: 30%;">
                                <div class="pb-2 h-50">
                                    <div class="h-100 background-image" style="background-image: url(./images/<?php echo $lab[$i]["path"] ?>);"></div>
                                </div>
                                <div class="pt-2 h-50">
                                    <div class="h-100 background-image" style="background-image: url(./images/<?php echo $lab[$i+1]["path"] ?>);"></div>
                                </div>
                            </div>
                            <div class="h-100 pl-2 pr-2" style="width: 40%;">
                                <div class="h-100 background-image" style="background-image: url(./images/<?php echo $lab[$i+2]["path"] ?>);"></div>
                            </div>
                            <div class="h-100 pl-2" style="width: 30%;">
                                <div class="pb-2 h-50">
                                    <div class="h-100 background-image" style="background-image: url(./images/<?php echo $lab[$i+3]["path"] ?>);"></div>
                                </div>
                                <div class="pt-2 h-50">
                                    <div class="h-100 background-image" style="background-image: url(./images/<?php echo $lab[$i+4]["path"] ?>);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="w-100" style="text-align: center;" >
            <img class="pt-3" style="width: 10rem;" src="./icon/slide-black.png" href="#lab-carousel" role="button" data-slide="next">
        </div>
    </div>
</section>
