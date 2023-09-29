<section id="products">
    <div class="position-relative background-image" style="height: 537px; background-image: url('../images/2.1.jpg');">
        <div class="container p-0 position-relative h-100 w-100">
            <h1 class="position-absolute font-weight-bold euro-font-title" style="color: white; bottom: 0; font-size: 10rem;">SẢN PHẨM</h1>
        </div>
    </div>
</section>
<section class="products mt-4 mb-5 euro-text-background-vertical">
    <div class="container p-0">
        <div class="row">
            <div class="col-4 pl-0">
                <div class="h-100">
                    <h1 class="p-2 pl-4 font-weight-bold background-red text-white euro-font-title">CATEGORY</h1>
                    <ul class="dropdown-custom euro-font-content-book">
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
                    <h1 class="p-1 font-weight-bold euro-font-title">Danh Mục</h1>
                    <div class="pl-1 euro-font-content">
                        <?php
                            echo $fetchData[2]["content"];
                        ?>
                    </div>
                    <div class="w-85">
                        <div class="row mt-2" style="min-height: 250px;">
                            <div class="col-4 pl-0">
                                <div class="p-2 h-100 background-grey">
                                    <div class="background-image h-100" style="background-image: url('../images/2.2.jpg');">

                                    </div>
                                </div>
                            </div>
                            <div class="col-8 p-0">
                                <div class="h-100 background-grey">
                                    <div class="ml-4 mr-4 pt-3 font-weight-bold euro-font-content-book">
                                        <h2 class="w-100 border-dashed-bottom-1 text-red euro-font-title pb-2">PLAIN FILM</h2>
                                        <p class="border-dashed-bottom-1 text-black euro-font-content pb-2 mb-1">
                                            THÔNG TIN SẢN PHẨM
                                        </p>
                                        <small>
                                        <?php
                                            echo $fetchData[3]["content"];
                                        ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" style="min-height: 250px;">
                            <div class="col-8 pl-0">
                                <div class="h-100 background-grey euro-font-content-book">
                                    <div class="ml-4 mr-4 pt-3 font-weight-bold">
                                        <h2 class="w-100 border-dashed-bottom-1 text-red euro-font-title pb-2">MATT FILM</h2>
                                        <p class="border-dashed-bottom-1 text-black euro-font-content pb-2 mb-1">
                                            THÔNG TIN SẢN PHẨM
                                        </p>
                                        <small>
                                        <?php
                                            echo $fetchData[4]["content"];
                                        ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 p-0">
                                <div class="p-2 h-100 background-grey">
                                    <div class="background-image h-100" style="background-image: url('../images/2.3.jpg');">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" style="min-height: 250px;">
                            <div class="col-4 pl-0">
                                <div class="p-2 h-100 background-grey">
                                    <div class="background-image h-100" style="background-image: url('../images/2.4.jpg');">

                                    </div>
                                </div>
                            </div>
                            <div class="col-8 p-0">
                                <div class="h-100 background-grey">
                                    <div class="ml-4 mr-4 pt-3 font-weight-bold euro-font-content-book">
                                        <h2 class="w-100 border-dashed-bottom-1 text-red euro-font-title pb-2">PEARL FILM</h2>
                                        <p class="border-dashed-bottom-1 text-black euro-font-content pb-2 mb-1">
                                            THÔNG TIN SẢN PHẨM
                                        </p>
                                        <small>
                                        <?php
                                            echo $fetchData[5]["content"];
                                        ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" style="min-height: 250px;">
                            <div class="col-8 pl-0">
                                <div class="h-100 background-grey">
                                    <div class="ml-4 mr-4 pt-3 font-weight-bold euro-font-content-book">
                                        <h2 class="w-100 border-dashed-bottom-1 text-red euro-font-title pb-2">PEVA FILM</h2>
                                        <p class="border-dashed-bottom-1 text-black euro-font-content pb-2 mb-1">
                                            THÔNG TIN SẢN PHẨM
                                        </p>
                                        <small>
                                        <?php
                                            echo $fetchData[6]["content"];
                                        ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 p-0">
                                <div class="p-2 h-100 background-grey">
                                    <div class="background-image h-100" style="background-image: url('../images/2.5.jpg');">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" style="min-height: 250px;">
                            <div class="col-4 pl-0">
                                <div class="p-2 h-100 background-grey">
                                    <div class="background-image h-100" style="background-image: url('../images/2.6.jpg');">

                                    </div>
                                </div>
                            </div>
                            <div class="col-8 p-0">
                                <div class="h-100 background-grey euro-font-content-book">
                                    <div class="ml-4 mr-4 pt-3 font-weight-bold">
                                        <h2 class="w-100 border-dashed-bottom-1 text-red euro-font-title pb-2">POLY BAG</h2>
                                        <p class="border-dashed-bottom-1 text-black euro-font-content pb-2 mb-1">
                                            THÔNG TIN SẢN PHẨM
                                        </p>
                                        <small>
                                        <?php
                                            echo $fetchData[7]["content"];
                                        ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
