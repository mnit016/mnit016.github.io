<section id="sustainabilities">
    <div class="position-relative background-image" style="height: 537px; background-image: url('./images/<?php echo $sustain_main[0]["path"] ?>');">
        <div class="container p-0 position-relative h-100 w-100">
            <h1 class="position-absolute euro-font-title"
                style="color: white; bottom: 0; font-size: 10rem;"><?= _SUSTAINABILITIES ?></h1>
        </div>
    </div>
</section>
<section class="products mt-4 mb-5">
    <div class="container p-0">
        <div class="text-center">
            <h1 class="euro-font-title text-red font-size-big mb-4">
            <?= _SUSTAINABILITIES_TITLE ?>
            </h1>
        </div>
        <div class="row">
            <div class="col-7 pl-0">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <?php
                            for ($i=0; $i < count($sustain); $i+=2) { ?>
                            <div class="carousel-item h-100 <?php if ($i == 0) { ?>active <?php } ?>">
                                <div class="row h-100" style="min-height: 378px">
                                    <div class="col-6 pr-2 pl-0">
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $sustain[$i]["path"] ?>);">
                                        </div>
                                    </div>
                                    <div class="col-6 pl-2 pr-0">
                                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $sustain[$i+1]["path"] ?>);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-5 p-0 euro-font-content-book">
                <?php echo $fetchData[6]["content"] ?>
            </div>
        </div>
    </div>
</section>