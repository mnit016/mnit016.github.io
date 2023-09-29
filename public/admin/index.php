<?php 
include("../includes/query_contents.php");
include("../includes/query_img.php");
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['redirect_url']= "/admin/";
	header('Location: /admin/login');
	exit;
}

if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 1800) {
    // session started more than 30 minutes ago
    session_unset();
    $_SESSION['redirect_url']= "/admin/";
	header('Location: /admin/login');
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Eurofilm Admin</title>
    <meta name="description" content="EuroFilm Admin" />
    <meta name="viewport" content="width=1140" charset="UTF-8" />
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/common.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../icon/logo-web.png" />
    <link rel="stylesheet" href="../css/s.css" />
</head>
<body class="container">
    <div class="position-fixed w-100 background-grey" style="top: 0; right:0">
        <div class="container">
            <a class="float-right" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </div>
    <div>
        <h1>Contents</h1>
        <?php
        foreach ($fetchData as $e) { ?>
            
        <div class="mb-3 mt-5">
            <form action="../actions/save_content.php" method="post">
                <h2><?php echo "$e[name]"?></h2>
                <input type="text" name="name" hidden value="<?php echo $e["name"] ?>">
                <textarea class="w-100 smaller" rows="5" type="text" name="content"><?php echo str_replace("<p>","\n",$e["content"]); ?></textarea>
                <input type="submit" value="Save" name="submit">
            </form>
        </div>
        <hr/>
        <?php  
        }
        ?>
        
    </div>
    <div>
        <h1>Images part</h1>
        <?php
        foreach ($home_main as $e) { ?>
            <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div>  
        <hr/>
        <?php  
        }
        ?>
        
        <?php
        foreach ($why_euro as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($intro_product as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($intro_facility as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($partner as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($product_main as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($product as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($lab_main as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($lab as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($infra_main as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($infra as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($contact_main as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr/>
        <?php
        foreach ($contact as $e) { ?>
        <div class="mb-3 mt-5">
            <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
                <h3><?php echo "$e[name] - $e[des]"?></h3>
                <input type="text" name="fileName" hidden value="<?php echo $e["path"] ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload" name="submit">
            </form>
        </div> 
        <?php
        }
        ?>
        <hr>
    </div>

</body>
<script src="https://kit.fontawesome.com/4e75f15372.js" crossorigin="anonymous"></script>
    <script src="../lib/js/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</html>