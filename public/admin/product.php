<hr/>
<h1 class="dropdown-custom-item" style="border-bottom: none !important" onclick="expandMenu(this)">Products List</h1>
<div style="display: none;">
    <?php
    foreach ($product_list as $e) {
    ?>
    <div class="mb-3 mt-5">
        <h2 class="dropdown-custom-item background-grey" style="border-bottom: none !important" onclick="expandMenu(this)">
            <?php echo "$e[name]" ?>
        </h2>
        <form action="../actions/update_product.php" method="post" style="display: none;" enctype="multipart/form-data">
            <input type="text" name="id" hidden value="<?php echo $e["id"] ?>">
            <input type="text" name="fileName" hidden value="<?php echo $e["img_path"] ?>">
            <input type="text" name="name" value="<?php echo $e["name"] ?>"><br/>
            <input type="file" name="productImg" id="productImg">
            <img style="height: 200px" src="../images/<?php echo $e["img_path"] ?>">
            <textarea class="w-100 smaller" rows="5" type="text"
                name="content"><?php echo str_replace("<p>", "\n", $e["des"]); ?></textarea>
            <input type="submit" value="Save" name="submit">
        </form>
        <?php if (count($product_list) > 1) {?>
        <form action="../actions/delete_product.php" onsubmit="return confirm('Do you really want to delete?')" method="post">
            <input type="text" name="id" hidden value="<?php echo $e["id"] ?>">
            <input type="text" name="img_path" hidden value="<?php echo $e["img_path"] ?>">
            <input type="submit" value="Delete" name="submit">
        </form>
        <?php } ?>
    </div>
        <hr />
    <?php
    }
    ?>
</div>

<button class="dropdown-custom-item" onclick="expandMenu(this)">add product</button>
<form action="../actions/add_product.php" method="post" style="display: none" enctype="multipart/form-data">
    <input type="text" class="w-100" require name="name">
    <input type="file" required name="productImg" id="productImg">
    <textarea class="w-100 smaller" rows="5" type="text"
        name="content"></textarea>
    <input type="submit" value="add" name="submit">
</form>