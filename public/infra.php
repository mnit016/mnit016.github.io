    <section id="facilities">
        <div class="background-image" style="height: 537px; background-image: url('./images/4.1.jpg');">
            <div class="container p-0 position-relative h-100 w-100">
                <h1 class="position-absolute euro-font-title" style="color: white; bottom: 0; font-size: 10rem;"><?= _FACILITIES ?></h1>
            </div>
        </div>
    </section>
    <section class="mt-4 mb-5 euro-text-background-vertical">
        <div class="container p-0">
            <div class="w-100 text-center infra">
                <h1 class="p-1 m-auto euro-font-title font-size-big"><?= _BRUCKNER ?></h1>
                <div class="pt-2 pb-3 text-left euro-font-content-book">
                    <?php
                        echo $fetchData[1]["content"];
                    ?>
                </div>
                <div class="home-img-2 pad-l-5 container" style="padding: 0;">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div id="csvc-slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                <?php
                                    for ($i=0; $i < count($intro_facility); $i+=2) { ?>
                                    <div class="carousel-item <?php if ($i == 0) { ?>active <?php } ?>">
                                        <div class="img-2-holder row">
                                            <div class="col-6 img-1 pad-r-5">
                                                <img loading="lazy" src="../images/<?php echo $intro_facility[$i]["path"] ?>" alt="">
                                            </div>
                                            <div class="col-6 img-2 pad-l-5">
                                                <img loading="lazy" src="../images/<?php echo $intro_facility[$i+1]["path"] ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="w-100" style="text-align: center;">
                        <img loading="lazy" class="pt-3" style="width: 10rem;" src="./icon/slide-black.png" href="#csvc-slide" role="button" data-slide="next">
                    </div>
                </div>
                <div class="pt-2 pb-3 text-left euro-font-content-book">
                    <?php
                        echo $fetchData[4]["content"];
                    ?>
                </div>
            </div>
            <div class="w-100">
                
            </div>
            <div id="infra-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    for ($i=0; $i < count($infra); $i+=9) { ?>
                    <div class="carousel-item <?php if ($i == 0) { ?>active <?php } ?>">
                        <div class="w-100 d-block">
                            <div class="row pb-2" style="height: 612px;">
                                <div class="col-4 pl-0 pr-2">
                                    <div class="h-100">
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $infra[$i]["path"] ?>);">
            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 pl-2 pr-2">
                                    <div class="h-50 pb-2">
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $infra[$i+1]["path"] ?>);">
            
                                        </div>
                                    </div>
                                    <div class="h-50 position-relative pt-2">
                                        <div class="h-100 w-100 background-image" style="bottom: 0; background-image: url(./images/<?php echo $infra[$i+2]["path"] ?>);">
            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 pl-2 pr-2">
                                    <div class="h-100">
                                        
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $infra[$i+3]["path"] ?>);">
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2" style="height: 612px;">
                                <div class="col-4 pl-0 pr-2">
                                    <div class="h-50 pb-2">
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $infra[$i+4]["path"] ?>);">
            
                                        </div>
                                    </div>
                                    <div class="h-50 position-relative pt-2">
                                        <div class="h-100 w-100 background-image" style="bottom: 0; background-image: url(./images/<?php echo $infra[$i+5]["path"] ?>);">
            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 pl-2 pr-2">
                                    <div class="h-100">
                                        
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $infra[$i+6]["path"] ?>);">
            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 pl-2 pr-2">
                                    <div class="h-50 pb-2">
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $infra[$i+7]["path"] ?>);">
            
                                        </div>
                                    </div>
                                    <div class="h-50 position-relative pt-2">
                                        <div class="h-100 w-100 background-image" style="bottom: 0; background-image: url(./images/<?php echo $infra[$i+8]["path"] ?>);">
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="w-100" style="text-align: center;">
                <img loading="lazy" class="pt-3" style="width: 10rem;" src="./icon/slide-black.png" href="#infra-carousel" role="button" data-slide="next">
            </div>
        </div>
    </section>
    