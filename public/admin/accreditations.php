
<h2 class="dropdown-custom-item background-grey" style="border-bottom: none !important" onclick="expandMenu(this)">
                    Accreditations</h2>
                <div style="display: none;">
                    <?php
                    foreach ($accreditations as $e) { ?>
                        <div class="mb-3 mt-5">
                            <form action="../actions/upload_accreditation.php" method="post" enctype="multipart/form-data">
                                <h3>
                                    <?php echo "$e[name]" ?>
                                </h3>
                                <input type="text" name="fileName" hidden value="<?php echo $e["img_path"] ?>">
                                <input type="text" name="fileNamePdf" hidden value="<?php echo $e["pdf_path"] ?>">
                                <label for="fileToUpload">choose img</label>
                                <input id="fileToUpload" type="file" name="fileToUpload" id="fileToUpload"><br/>
                                <label for="fileToUploadPdf">choose pdf</label>
                                <input id="fileToUploadPdf" type="file" name="fileToUploadPdf" id="fileToUpload">
                                <input type="submit" value="Update" name="submit">
                            </form>
                            <form action="../actions/remove_accreditation.php" method="post">
                                <input type="text" name="id" hidden value="<?php echo $e["id"] ?>">
                                <input type="text" name="img_path" hidden value="<?php echo $e["img_path"] ?>">
                                <input type="text" name="pdf_path" hidden value="<?php echo $e["pdf_path"] ?>">
                                <input type="submit" value="Delete" name="submit">
                            </form>
                        <img style="height: 150px" src="../images/<?php echo $e["img_path"] ?>">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button class="dropdown-custom-item" onclick="expandMenu(this)">add cert</button>
                <form action="../actions/add_accreditations.php" method="post" style="display: none" enctype="multipart/form-data">
                    <input type="text" class="w-100" name="name" value="Cert">
                    <label for="fileToUpload">choose img</label>
                    <input id="fileToUpload" type="file" required name="fileToUpload" id="fileToUpload"><br/>
                    <label for="fileToUploadPdf">choose pdf</label>
                    <input id="fileToUploadPdf" type="file" required name="fileToUploadPdf" id="fileToUpload">
                    <input type="submit" value="add" name="submit">
                </form>
                <hr />