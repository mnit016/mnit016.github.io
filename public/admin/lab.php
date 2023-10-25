
<h2 class="dropdown-custom-item background-grey" style="border-bottom: none !important" onclick="expandMenu(this)">Lab
                    Images</h2>
                <div style="display: none;">
                    <?php
                    foreach ($lab_main as $e) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                                <h3>
                                    <?php echo "$e[name]" ?>
                                </h3>
                                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                                <input type="file" required name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Update" name="submit">
                            </form>
                        <img style="height: 150px" src="../images/<?php echo $e["path"] ?>">
                        </div>
                        <?php
                    }
                    ?>
                    <hr />
                    <?php
                    for ($i=0; $i < count($lab); $i+=5) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                            <h3>
                                    <?php echo $lab[$i]["name"] ?>
                                </h3>
                                <input type="text" name="fileName[]" hidden value="<?php echo $lab[$i]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $lab[$i+1]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $lab[$i+2]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $lab[$i+3]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $lab[$i+4]["path"] ?>">
                                <label>1</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload"><br/>
                                <label>2</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload"><br/>
                                <label>3</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload"><br/>
                                <label>4</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload"><br/>
                                <label>5</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload"><br/>
                                <input type="submit" value="Update" name="submit">
                            </form>
                            <?php if (count($lab) > 5) {?>
                            <form action="../actions/remove_images.php" onsubmit="return confirm('Do you really want to delete?')" method="post">
                                <input type="text" name="id[]" hidden value="<?php echo $lab[$i]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $lab[$i+1]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $lab[$i+2]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $lab[$i+3]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $lab[$i+4]["id"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $lab[$i]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $lab[$i+1]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $lab[$i+2]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $lab[$i+3]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $lab[$i+4]["path"] ?>">
                                <input type="submit" value="Delete" name="submit">
                            </form>
                            <?php } ?>
                            <div class="d-flex">
                                <div class="col-xl-4" style="overflow: hidden">
                                    1
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $lab[$i]["path"] ?>">
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $lab[$i+1]["path"] ?>">
                                    2
                                </div>
                                <div class="col-xl-4" style="overflow: hidden">
                                    <img class="m-1" style="height: 300px" src="../images/<?php echo $lab[$i+2]["path"] ?>">
                                    3
                                </div>
                                <div class="col-xl-4" style="overflow: hidden">
                                    4
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $lab[$i+3]["path"] ?>">
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $lab[$i+4]["path"] ?>">
                                    5
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button class="dropdown-custom-item" onclick="expandMenu(this)">add slide</button>
                <form action="../actions/add_image.php" method="post" style="display: none" enctype="multipart/form-data">
                    <input type="text" class="w-75" name="name" value="Lab images slide">
                    <input type="text" name="type" hidden value="lab">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="submit" value="add" name="submit">
                </form>
                <hr />