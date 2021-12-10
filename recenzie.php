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
    <link rel="stylesheet" href="css/styleTabulky.css">
    <link rel="stylesheet" href="css/styleRecenzie.css">
    <title><?php echo $pageTitles["Reviews"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>
    
    <header>
        <h1><?php echo $reviews["Title"][$lang]; ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    
    <article>
        <h2><?php echo $reviews["Subtitle"][$lang]; ?> 1</h2>
        <?php echo $reviews["First"][$lang] ?>
    </article>
    <article>
        <h2><?php echo $reviews["Subtitle"][$lang]; ?> 2</h2>
        <?php echo $reviews["Second"][$lang] ?>
    </article>
    <table>
        <thead>
            <th><?php echo $reviews["Table"][$lang]["Design"] ?></th>
            <th><?php echo $reviews["Table"][$lang]["Display"] ?></th>
            <th><?php echo $reviews["Table"][$lang]["PhotosAndVideos"] ?></th>
            <th><?php echo $reviews["Table"][$lang]["Performance"] ?></th>
            <th><?php echo $reviews["Table"][$lang]["Software"] ?></th>
            <th><?php echo $reviews["Table"][$lang]["BatteryLife"] ?></th>
            <th><?php echo $reviews["Table"][$lang]["Construction"] ?></th>
        </thead>
        <tbody>
            <tr>
                <td>9.5/10</td>
                <td>9.5/10</td>
                <td>6.5/10</td>
                <td>7/10</td>
                <td>8.5/10</td>
                <td>8/10</td>
                <td>10/10</td>
            </tr>
        </tbody>
    </table>
    <script src="js/script.js"></script>
</body>

</html>