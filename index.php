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
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $pageTitles["Index"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>

    <header>
        <h1>Samsung Galaxy A8</h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    <section id="introduction">
        <article id="articleIndex">
            <h2><?php echo $introduction["Title"][$lang];?></h2>

            <?php echo $introduction["First"][$lang]; ?>
            <br><br>

            <?php echo $introduction["Second"][$lang]; ?>
            <br><br>

            <?php echo $introduction["Third"][$lang]; ?>
            <br><br>

            <?php echo $introduction["Fourth"][$lang]; ?>
            <br><br>

            <?php echo $introduction["Fifth"][$lang]; ?>
            <br><br>

            <?php echo $introduction["Sixth"][$lang]; ?>
            <br><br>

            <?php echo $introduction["Seventh"][$lang]; ?>
            
        </article>
        <div id="featuredImageWrapper">
            <img src="images/featured.png" alt="<?php echo $alt["Phone"][$lang]; ?>" id="featuredImage">
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>