<!DOCTYPE html>
<?php require_once 'preklad.php'; ?>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Samsung galaxy A8">
    <meta name="author" content="Martin Szabo">
    <link rel="shortcut icon" href="images/logo.svg" type="image/svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleFotky.css">
    <title><?php echo $pageTitles["Photos"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'navigacia.php' ?>

    <header>
        <h1><?php echo $photos["Title"][$lang] ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    <article>
        <div id="photosPreviousBtn">
            <img src="images/icons/left.png" alt="<?php echo $alt["Previous"][$lang]; ?>" id="photosPreviousBtnImg" class="controlBtn">
        </div>
        <div id="photoFrame">
            <img src="images/fotky/back.jpg" alt="" class="slideImg" style="display:none;">
            <img src="images/fotky/front.jpg" alt="" class="slideImg" style="display:none;">
            <img src="images/fotky/frontDisplay.jpg" alt="" class="slideImg" style="display:none;">
            <img src="images/fotky/frontDisplay2.jpg" alt="" class="slideImg" style="display:none;">
            <img src="images/fotky/frontLocked.jpg" alt="" class="slideImg" style="display:none;">
            <img src="images/fotky/port.jpg" alt="" class="slideImg" style="display:none;">
            <img src="images/fotky/side1.jpg" alt="" class="slideImg" style="display:none;">
            <img src="images/fotky/side2.jpg" alt="" class="slideImg" style="display:none;">
        </div>
        <div id="counter">
            <span id="currentCounter">1</span>/<span id="allCounter"></span> 
        </div>
        <div id="photosNextBtn">
            <img src="images/icons/right.png" alt="<?php echo $alt["Next"][$lang]; ?>" id="photosNextBtnImg" class="controlBtn">
        </div>
        
    </article>
    
    <script src="js/script.js"></script>
    <script src="js/photos.js"></script>
</body>

</html>