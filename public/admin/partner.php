
<h2 class="dropdown-custom-item background-grey" style="border-bottom: none !important" onclick="expandMenu(this)">
                    Partner Images</h2>
                <div style="display: none;">
                    <?php
                    foreach ($partner as $e) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                                <h3>
                                    <?php echo "$e[name]" ?>
                                </h3>
                                <input type="text" name="fileName[]" hidden value="<?php echo $e["path"] ?>">
                                <input type="file" required name="fileToUpload[]" id="fileToUpload">
                                <input type="submit" value="Update" name="submit">
                            </form>
                            <?php if (count($partner) > 1) {?>
                            <form action="../actions/remove_image.php" onsubmit="return confirm('Do you really want to delete?')" method="post">
                                <input type="text" name="id" hidden value="<?php echo $e["id"] ?>">
                                <input type="text" name="path" hidden value="<?php echo $e["path"] ?>">
                                <input type="submit" value="Delete" name="submit">
                            </form>
                            <?php } ?>
                        <img style="height: 150px" src="../images/<?php echo $e["path"] ?>">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button class="dropdown-custom-item" onclick="expandMenu(this)">add partner</button>
                <form action="../actions/add_image.php" method="post" style="display: none" enctype="multipart/form-data">
                    <input type="text" class="w-75" name="name" value="Partner images">
                    <input type="text" name="type" hidden value="partner">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="submit" value="add" name="submit">
                </form>
                <hr />