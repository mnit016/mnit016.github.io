<h2 class="dropdown-custom-item background-grey" style="border-bottom: none !important" onclick="expandMenu(this)">Bruckner</h2>
                <div style="display: none;">
                    <?php
                    for ($i=0; $i < count($intro_facility); $i+=2) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                                <h3>
                                    <?php echo $intro_facility[$i]["name"] ?>
                                </h3>
                                <input type="text" name="fileName[]" hidden value="<?php echo $intro_facility[$i]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $intro_facility[$i+1]["path"] ?>">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="submit" value="Update" name="submit">
                            </form>
                            <form action="../actions/remove_images.php" onsubmit="return confirm('Do you really want to delete?')" method="post">
                                <input type="text" name="id[]" hidden value="<?php echo $intro_facility[$i]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $intro_facility[$i+1]["id"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $intro_facility[$i]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $intro_facility[$i+1]["path"] ?>">
                                <input type="submit" value="Delete" name="submit">
                            </form>
                            <div class="d-flex">
                                <img class="col-xl-6" style="height: 150px; overflow: hidden" src="../images/<?php echo $intro_facility[$i]["path"] ?>">
                                <img class="col-xl-6" style="height: 150px; overflow: hidden" src="../images/<?php echo $intro_facility[$i+1]["path"] ?>">
                            </div>
                            
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button class="dropdown-custom-item" onclick="expandMenu(this)">add slide</button>
                <form action="../actions/add_image.php" method="post" style="display: none" enctype="multipart/form-data">
                    <input type="text" class="w-75" name="name" value="Bruckner images slide">
                    <input type="text" name="type" hidden value="intro_facility">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="submit" value="add" name="submit">
                </form>
                <hr />