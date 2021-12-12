<!DOCTYPE html>
<?php require_once 'php/preklad.php'; ?>
<html lang="<?php echo $lang; ?>">

<head>
    <?php include 'php/meta.php'; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleFotky.css">
    <title><?php echo $pageTitles["Photos"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>

    <header>
        <h1><?php echo $photos["Title"][$lang] ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    <article>
        <?php include 'php/galeria.php' ?>
    </article>
    <script src="js/script.js"></script>
</body>

</html>