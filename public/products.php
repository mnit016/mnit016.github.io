<section id="products">
    <div class="position-relative background-image" style="height: 537px; background-image: url('./images/2.1.jpg');">
        <div class="container p-0 position-relative h-100 w-100">
            <h1 class="position-absolute euro-font-title"
                style="color: white; bottom: 0; font-size: 10rem;"><?= _PRODUCTS ?></h1>
        </div>
    </div>
</section>
<section class="products mt-4 mb-5">
    <div class="container p-0">
        <div class="row">
            <div class="col-4 pl-0">
                <div class="h-100">
                    <h1 class="p-2 pl-4 background-red text-white euro-font-title"><?= _CATEGORY ?></h1>
                    <ul class="dropdown-custom euro-font-content">
                        <li class="dropdown-custom-item" onclick="expandMenu(this)">
                            PLAIN AND EMBOSSED FILM
                        </li>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                        </ul>
                        <li class="dropdown-custom-item" onclick="expandMenu(this)">
                            MATT OR GLOSS FILM
                        </li>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                        </ul>
                        <li class="dropdown-custom-item" onclick="expandMenu(this)">
                            PEARLISED BOPP FILM
                        </li>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                        </ul>
                        <li class="dropdown-custom-item" onclick="expandMenu(this)">
                            PEVA FILM
                        </li>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                        </ul>
                        <li class="dropdown-custom-item" onclick="expandMenu(this)">
                            POLY BAG
                        </li>
                        <ul class="list-unstyled" style="display: none;">
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                            <li><a class="btn-link text-black" href="#">LOREM IPSUM</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="col-8">
                <div class="w-100 pl-3">
                    <h1 class="p-1 font-size-big euro-font-title"><?= _PORTFOLIO ?></h1>
                    <div class="pl-1 euro-font-content-book">
                        <?php
                        echo $fetchData[2]["content"];
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 p-0 mt-4">
                <div class="row mb-4" style="min-height: 180px">
                <?php
                    $swap=false; 
                    for ($i=0; $i < count($product_list); $i++) {
                ?>
                    <div class="col-6 pl-0">
                        <div class="row h-100">
                            <?php
                                if (!$swap) {
                            ?>
                            <div class="col-4 pl-0 pr-2">
                                <div class="p-2 h-100 background-grey">
                                    <div class="background-image h-100"
                                        style="background-image: url('./images/<?php echo $product_list[$i]["img_path"] ?>');">

                                    </div>
                                </div>
                            </div>
                            <?php 
                                } 
                            ?>
                            <div class="col-8 p-0">
                                <div class="h-100 background-grey">
                                    <div class="ml-4 mr-4 pt-2 euro-font-content-title">
                                        <h3 class="w-100 border-dashed-bottom-1 text-red euro-font-title pb-1 mb-1"><?php echo $product_list[$i]["name"] ?></h3>
                                        <p class="border-dashed-bottom-1 text-black text-small euro-font-content pb-1 mb-1">
                                            DESCRIPTIONS
                                        </p>
                                        <div class="product-des">
                                            <?php echo $product_list[$i]["des"] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                                if ($swap) {
                            ?>
                            <div class="col-4 pl-2 pr-0">
                                <div class="p-2 h-100 background-grey">
                                    <div class="background-image h-100"
                                        style="background-image: url('./images/<?php echo $product_list[$i]["img_path"] ?>');">
                                    </div>
                                </div>
                            </div>
                            <?php 
                                } 
                            ?>
                        </div>
                    </div>
                <?php
                    if ($i % 2 == 1) {
                        $swap=!$swap;
                ?>
                </div>
                <?php
                    if (count($product_list) > $i + 1) {
                ?>
                <div class="row mb-4" style="min-height: 180px">
                <?php
                    }
                } else if (count($product_list) == $i - 1) {
                ?>
                </div>
                <?php
                }
                }
                ?>
            </div>
        </div>
    </div>
</section>