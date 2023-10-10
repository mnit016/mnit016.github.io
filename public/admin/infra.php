<h2 class="dropdown-custom-item background-grey" style="border-bottom: none !important" onclick="expandMenu(this)">
                    Facilities images</h2>
                <div style="display: none;">
                    <?php
                    foreach ($infra_main as $e) { ?>
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
                    for ($i=0; $i < count($infra); $i+=9) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                            <h3>
                                    <?php echo $infra[$i]["name"] ?>
                                </h3>
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+1]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+2]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+3]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+4]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+5]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+6]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+7]["path"] ?>">
                                <input type="text" name="fileName[]" hidden value="<?php echo $infra[$i+8]["path"] ?>">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="file" name="fileToUpload[]" id="fileToUpload">
                                <input type="submit" value="Update" name="submit">
                            </form>
                            <form action="../actions/remove_images.php" method="post">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+1]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+2]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+3]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+4]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+5]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+6]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+7]["id"] ?>">
                                <input type="text" name="id[]" hidden value="<?php echo $infra[$i+8]["id"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+1]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+2]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+3]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+4]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+5]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+6]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+7]["path"] ?>">
                                <input type="text" name="path[]" hidden value="<?php echo $infra[$i+8]["path"] ?>">
                                <input type="submit" value="Delete" name="submit">
                            </form>
                            <div class="d-flex">
                                <div class="col-xl-4" style="overflow: hidden">
                                    <img class="m-1" style="height: 300px" src="../images/<?php echo $infra[$i]["path"] ?>">
                                </div>
                                <div class="col-xl-4" style="overflow: hidden">
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $infra[$i+1]["path"] ?>">
                                    <img style="height: 150px" src="../images/<?php echo $infra[$i+2]["path"] ?>">
                                </div>
                                <div class="col-xl-4" style="overflow: hidden">
                                    <img class="m-1" style="height: 300px" src="../images/<?php echo $infra[$i+3]["path"] ?>">
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-xl-4" style="overflow: hidden">
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $infra[$i+4]["path"] ?>">
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $infra[$i+5]["path"] ?>">
                                </div>
                                <div class="col-xl-4" style="overflow: hidden">
                                    <img class="m-1" style="height: 300px" src="../images/<?php echo $infra[$i+6]["path"] ?>">
                                </div>
                                <div class="col-xl-4" style="overflow: hidden">
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $infra[$i+7]["path"] ?>">
                                    <img class="m-1" style="height: 150px" src="../images/<?php echo $infra[$i+8]["path"] ?>">
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button class="dropdown-custom-item" onclick="expandMenu(this)">add slide</button>
                <form action="../actions/add_image.php" method="post" style="display: none" enctype="multipart/form-data">
                    <input type="text" class="w-75" name="name" value="Facilities images slide">
                    <input type="text" name="type" hidden value="infra">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="file" required name="fileToUpload[]" id="fileToUpload">
                    <input type="submit" value="add" name="submit">
                </form>
                <hr />