<div class="home-contact container mb-5">
            <div>
                <h1 class="font-size-big euro-font-title text-red">
                <?= _PARTNERS ?>
                </h1>
                <div class="row logos">
                    <div class="col-12 p-0">
                        <div id="doitac-slide" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <ul class="row img-sli justify-content-between">
                                    <?php
                                    for ($i=0; $i < count($partner); $i++) { ?>
                                        <li class="">
                                            <img src="../images/<?php echo $partner[$i]["path"] ?>" alt="">
                                        </li>
                                        <?php 
                                        if ($i > 0 && count($partner) > $i + 1 && $i % 6 == 0) {
                                        ?>
                                        </ul>
                                        </div>
                                        <div class="carousel-item">
                                        <ul class="row img-sli justify-content-between">        
                                        <?php } ?>
                                    <?php 
                                    } 
                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center pb-4">
                    <a href="#doitac-slide" role="button" data-slide="next">
                        <img src="../icon/slide-black.png" style="width: 160px; margin-bottom: 10px;">
                    </a>

                </div>
            </div>
        </div>