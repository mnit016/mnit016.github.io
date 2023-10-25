<h2 class="dropdown-custom-item background-grey" style="border-bottom: none !important" onclick="expandMenu(this)">Sustainabilities</h2>
                <div style="display: none;">
                    <?php
                    foreach ($sustain_main as $e) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                                <h3>
                                    <?php echo "$e[name]" ?>
                                </h3>
                                <input type="text" name="fileName[]" hidden value="<?php echo $e["path"] ?>">
                                <input type="file" required name="fileToUpload[]" id="fileToUpload">
                                <input type="submit" value="Update" name="submit">
                            </form>
                        <img loading="lazy" style="height: 150px" src="../images/<?php echo $e["path"] ?>">
                        </div>
                        <?php
                    }
                    ?>
                    <hr />
                    <?php
                    for ($i=0; $i < count($sustain); $i+=2) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                                <h3>
                                    <?php echo $sustain[$i]["name"] ?>
                                </h3>
                                <input type="text" name="fileName[]" hidden value="<?php echo $sustain[$i]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $sustain[$i+1]["path"] ?>">
                                <label>1</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload"><br/>
                                <label>2</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload"><br/>
                                <input type="submit" value="Update" name="submit">
                            </form>
                            <?php if (count($sustain) > 2) {?>
                            <form action="../actions/remove_images.php" onsubmit="return confirm('Do you really want to delete?')" method="post">
                                <input type="text" name="id[]" hidden value="<?php echo $sustain[$i]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $sustain[$i+1]["id"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $sustain[$i]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $sustain[$i+1]["path"] ?>">
                                <input type="submit" value="Delete" name="submit">
                            </form>
                            <?php } ?>
                            <div class="d-flex">
                                1
                                <img loading="lazy" class="col-xl-6" style="height: 150px; overflow: hidden" src="../images/<?php echo $sustain[$i]["path"] ?>">
                                2
                                <img loading="lazy" class="col-xl-6" style="height: 150px; overflow: hidden" src="../images/<?php echo $sustain[$i+1]["path"] ?>">
                            </div>
                            
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button class="dropdown-custom-item" onclick="expandMenu(this)">add slide</button>
                <form action="../actions/add_image.php" method="post" style="display: none" enctype="multipart/form-data">
                    <input type="text" class="w-75" name="name" value="Sustainabilities images slide">
                    <input type="text" name="type" hidden value="sustain">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="submit" value="add" name="submit">
                </form>
                <hr />