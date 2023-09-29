<?php 
include("../includes/query_contents.php");
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
    session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
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
    <div class="mb-3 mt-5">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1>Main</h1>
            <input type="text" name="fileName" hidden value="main.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['main.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["main.jpg"] ?></p>
            <?php 
                endif; 
                unset($_SESSION["main.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>  
    <hr/>
    <div class="mb-3">
        <form action="../actions/save_content.php" method="post">
            <h1>Why Euro Film</h1>
            <input type="text" name="name" hidden value="why_euro_film">
            <textarea class="w-100 smaller" rows="5" type="text" name="content"><?php echo str_replace("<p>","\n",$fetchData[0]["content"]); ?></textarea>
            <?php if(!empty($_SESSION['why_euro_film'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why_euro_film"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why_euro_film"]);
            ?>
            <input type="submit" value="Save" name="submit">
        </form>
    </div>
    <hr/> 
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1>1.1</h1>
            <input type="text" name="fileName" hidden value="why/1.1.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why/1.1.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why/1.1.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why/1.1.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div> 
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h3>1.1 (2)</h3>
            <input type="text" name="fileName" hidden value="why/1.2.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why/1.2.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why/1.2.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why/1.2.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div> 
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h3>1.1 (3)</h3>
            <input type="text" name="fileName" hidden value="why/1.3.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why/1.3.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why/1.3.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why/1.3.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <hr/>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1>WHY - SẢN PHẨM</h1>
            <h3>1.2</h3>
            <input type="text" name="fileName" hidden value="why-product/1.2.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why-product/1.3.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why-product/1.2.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why-product/1.2.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h3>1.3</h3>
            <input type="text" name="fileName" hidden value="why-product/1.3.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why-product/1.3.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why-product/1.3.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why-product/1.3.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>  
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h3>1.4</h3>
            <input type="text" name="fileName" hidden value="why-product/1.4.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why-product/1.4.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why-product/1.4.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why-product/1.4.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h3>1.2 (2)</h3>
            <input type="text" name="fileName" hidden value="why-product/1.2 (2).jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why-product/1.3 (2).jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why-product/1.2 (2).jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why-product/1.2 (2).jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h3>1.3 (2)</h3>
            <input type="text" name="fileName" hidden value="why-product/1.3 (2).jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why-product/1.3 (2).jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why-product/1.3 (2).jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why-product/1.3 (2).jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>  
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h3>1.4 (2)</h3>
            <input type="text" name="fileName" hidden value="why-product/1.4 (2).jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['why-product/1.4 (2).jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["why-product/1.4 (2).jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["why-product/1.4 (2).jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <hr/>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1> CƠ SỞ VẬT CHẤT</h1>
            <h3>1.5 (1)</h3>
            <input type="text" name="fileName" hidden value="csvc/1.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['csvc/1.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["csvc/1.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["csvc/1.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1> CƠ SỞ VẬT CHẤT</h1>
            <h3>1.5 (2)</h3>
            <input type="text" name="fileName" hidden value="csvc/2.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['csvc/2.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["csvc/2.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["csvc/2.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1> CƠ SỞ VẬT CHẤT</h1>
            <h3>1.5 (3)</h3>
            <input type="text" name="fileName" hidden value="csvc/3.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['csvc/3.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["csvc/3.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["csvc/3.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1> CƠ SỞ VẬT CHẤT</h1>
            <h3>1.5 (4)</h3>
            <input type="text" name="fileName" hidden value="csvc/4.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['csvc/4.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["csvc/4.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["csvc/4.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <div class="mb-3">
        <form action="../actions/upload.php" method="post" enctype="multipart/form-data">
            <h1> CƠ SỞ VẬT CHẤT</h1>
            <h3>1.5 (5)</h3>
            <input type="text" name="fileName" hidden value="csvc/5.jpg">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <?php if(!empty($_SESSION['csvc/5.jpg'])): ?>
                <p class="text-blue"> <?php echo $_SESSION["csvc/5.jpg"] ?></p>
                <?php 
                endif; 
                unset($_SESSION["csvc/5.jpg"]);
            ?>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>


</body>
<script src="https://kit.fontawesome.com/4e75f15372.js" crossorigin="anonymous"></script>
    <script src="../lib/js/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</html>