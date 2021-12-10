<!DOCTYPE html>
<?php require_once 'php/preklad.php'; ?>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Samsung galaxy A8">
    <meta name="author" content="Martin Szabo">
    <link rel="shortcut icon" href="images/logo.svg" type="image/svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleStred.css">
    <link rel="stylesheet" href="css/styleVideo.css">
    <title><?php echo $pageTitles["Videos"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>
    
    <header>
        <h1><?php echo $videos["Title"][$lang] ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    
    <article>
        <video controls muted>
            <source src="videos/video_horizontal.mp4" type="video/mp4">
            <?php echo $videos["Error"][$lang] ?>
        </video>
        <h3><?php echo $videos["horizontalVideo"][$lang] ?></h3>
    </article>
    <article>
        <video controls muted>
            <source src="videos/video_vertical.mp4" type="video/mp4">
            <?php echo $videos["Error"][$lang] ?>
        </video>
        <h3><?php echo $videos["verticalVideo"][$lang] ?></h3>
    </article>
    <article>
        <video controls muted>
            <source src="videos/ui.mp4" type="video/mp4">
            <?php echo $videos["Error"][$lang] ?>
        </video>
        <h3><?php echo $videos["UIVideo"][$lang] ?></h3>
    </article>
    <script src="js/script.js"></script>
</body>

</html>