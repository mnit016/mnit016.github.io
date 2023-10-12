<section id="applications" class="mb-5 euro-text-background-vertical">
    <div class="container p-0">
        <div class="row">
            <div class="col-4 pl-0">
                <div class="h-100">
                    <h1 class="p-2 pl-4 background-red text-white euro-font-title"><?= _APPLICATIONS ?></h1>
                </div>
            </div>
        </div>
        <div class="pt-2 euro-font-book">
            <?php echo $fetchData[5]["content"] ?>
            <div class="row" style="height: 426px">
                <div class="col-4 p-0 h-100 background-image" style="background-image: url(./images/<?php echo $applications[0]["path"] ?>);">
                </div>
                <div class="col-4 pr-0 h-100">
                    <div class="h-50 pb-2">
                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $applications[1]["path"] ?>);">
                        </div>
                    </div>
                    <div class="h-50 pt-2">
                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $applications[2]["path"] ?>);">
                        </div>
                    </div>
                </div>
                <div class="col-4 pr-0 h-100">
                    <div class="h-50 pb-2">
                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $applications[3]["path"] ?>);">
                        </div>
                    </div>
                    <div class="h-50 pt-2">
                        <div class="h-100 background-image" style="background-image: url(./images/<?php echo $applications[4]["path"] ?>);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>