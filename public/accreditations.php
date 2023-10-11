<div class="container text-center mb-5" id="accreditations">

    <h1 class="euro-font-title text-red font-size-big mb-4">
    <?= _ACCREDITATIONS ?>
    </h1>
    <div class="d-flex justify-content-center">
        <?php 
        foreach ($accreditations as $acc) {
        ?>
        <div class="w-25 ml-5">
            <a href="/accreditation_doc.php?file_path=accreditations/<?php echo $acc["pdf_path"] ?>" target="_blank">
                <img class="w-100 h-100" src="./images/<?php echo $acc["img_path"] ?>">
            </a>
        </div>
        <?php } ?>
    </div>
</div>