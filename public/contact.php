<section id="contact-us">
    <div class="background-image" style="height: 537px; background-image: url('./images/5.1.jpg');">
        <div class="container p-0 position-relative h-100 w-100">
            <h1 class="position-absolute euro-font-title"
                style="color: white; bottom: 0; font-size: 10rem;"><?= _CONTACT_US ?></h1>
        </div>
    </div>
</section>
<section class="mt-4 mb-5 euro-text-background-vertical background-position-right">
    <div class="container p-0">
        <div class="row" style="min-height: 700px;">
            <div class="col-5 pl-0">
                <div class="h-100 background-grey">
                    <div class="p-5 euro-font-content-book">
                        <div class="background-image" style="background-image: url(./images/5.2.jpg); height: 300px;">

                        </div>
                        <h1 class="text-red euro-font-title pt-3" style="font-size: 3rem;">EUROFILM</h1>
                        <div class="d-flex">
                            <img loading="lazy" class="float-left" style="height: 1.5rem;" src="./icon/address-black.png">
                            <p class="float-right text-black">
                            Slot F2, Street No.1 , Loi Binh Nhon Industrial Zone, 
                            Loi Binh Nhon Commune, Tan An City, 
                            Long An Province, Vietnam
                            </p>
                        </div>
                        <div class="d-flex">
                            <img loading="lazy" class="float-left" style="height: 1.5rem;" src="./icon/mail-black.png">
                            <p class="float-right text-black">
                                info@eurofilm.com.vn
                            </p>
                        </div>
                        <div class="d-flex">
                            <img loading="lazy" class="float-left" style="height: 1.5rem;" src="./icon/phone-black.png">
                            <p class="float-right text-black">
                                0935247171
                            </p>
                        </div>
                        <div class="d-flex">
                            <img loading="lazy" class="float-left" style="height: 1.5rem;" src="./icon/web-black.png">
                            <p class="float-right text-black">
                                eurofilm.com.vn
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 pl-0">
                <div class="background-image h-100" style="background-image: url(./images/5.3.jpg);">

                </div>
            </div>
            <div class="pt-3 col-5 pl-0">
                <div class="background-red">
                    <h2 class="p-1 pl-3 text-white euro-font-title"><?= _EMAIL_US?></h2>
                </div>
            </div>
            <div class="col-7">

            </div>
            <div class="col-12 pt-3 contact-form">
                <form class="row euro-font-content">
                    <div class="col-6 p-0">
                        <div class="form-group">
                            <label for="fullName"><?= _FORM_FULL_NAME ?></label>
                            <input type="text"
                                class="form-control border-bottom border-top-0 border-left-0 border-right-0"
                                id="fullName">
                        </div>
                        <div class="form-group">
                            <label for="organization"><?= _FORM_COMPANY_ORGANIZATION ?></label>
                            <input type="text"
                                class="form-control border-bottom border-top-0 border-left-0 border-right-0"
                                id="organization">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col p-0">
                                    <label for="email"><?= _FORM_EMAIL ?></label>
                                    <input type="text"
                                        class="form-control border-bottom border-top-0 border-left-0 border-right-0"
                                        id="email">
                                </div>
                                <div class="col pr-0">
                                    <label for="email"><?= _FORM_PHONE ?>*</label>
                                    <input type="text"
                                        class="form-control border-bottom border-top-0 border-left-0 border-right-0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title"><?= _FORM_TITLE ?></label>
                            <input type="text"
                                class="form-control border-bottom border-top-0 border-left-0 border-right-0" id="title">
                        </div>
                        <div class="form-group">
                            <label for="details"><?= _FORM_CONTENT ?></label>
                            <textarea type="text" rows="2"
                                class="form-control border-top-0 border-left-0 border-right-0 textarea-border-bottom-row"
                                id="details"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right background-red"><?= _FORM_SEND_BTN ?></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>