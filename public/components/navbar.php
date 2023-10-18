<nav class="euro-font-nav sticky-top w-100 background-image pt-2 pb-2" style="font-size: 1rem; background-image: url(./images/nav/nav-bg.JPG);">
    <div class="container-xl p-0">
        <div class="font-weight-bold">
            <div class="row col-12 p-0">
                <div class="col-12 d-flex justify-content-between">
                    <a class="nav-link p-0" href="#index"><img src="./icon/logo-15.png" alt=""></a>
                    <div class="d-flex">
                        <ul class="d-flex align-items-center mb-0 text-white">
                            <li class="">
                                <a class="nav-link" onclick="scrollToId('#about-us')"><?= _NAV_ABOUT_US ?><span class="sr-only">(current)</span></a>
                            </li>
                            <li class=""> 
                                <a class="nav-link" onclick="scrollToId('#facilities')"><?= _NAV_FACILITIES ?></a>
                            </li>
                            <li class="">
                                <a class="nav-link " onclick="scrollToId('#products')"><?= _NAV_PRODUCTS ?></a>
                            </li>
                            <li class="">
                                <a class="nav-link " onclick="scrollToId('#applications')"><?= _NAV_APPLICATIONS ?></a>
                            </li>
                            <li class="">
                                <a class="nav-link" onclick="scrollToId('#lab')"><?= _NAV_LAB ?></a>
                            </li>
                            <li class="">
                                <a class="nav-link" onclick="scrollToId('#accreditations')"><?= _NAV_ACCREDITATIONS ?></a>
                            </li>
                            <li class="">
                                <a class="nav-link" onclick="scrollToId('#sustainabilities')"><?= _NAV_SUSTAINABILITIES ?></a>
                            </li>
                            <li class="">
                                <a class="nav-link" onclick="scrollToId('#contact-us')"><?= _NAV_CONTACT_US ?></a>
                            </li>
                        </ul>

                        <form class="form-inline my-2 my-lg-0">
                            <div class="d-flex align-items-center position-relative ml-2">
                                <input class="form-control mr-sm-2 pl-4 text-white" type="search" style="width: 170px; background: transparent;" aria-label="Search" />
                                <i class="fa-solid fa-magnifying-glass position-absolute text-white" style="left: 0.5rem;"></i>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="euro-font-nav nav-link p-0 dropdown-icon-after" href="/swap_lang.php?redirect_page=/"><?= LANG ?></a>
                            </div>
                        </form>
                    </div>
                </div>   
               
            </div>
        </div>
    </div>
</nav>