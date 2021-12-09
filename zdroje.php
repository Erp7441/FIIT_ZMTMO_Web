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
    <link rel="stylesheet" href="css/styleStred.css">
    <link rel="stylesheet" href="css/styleZdroje.css">
    <title><?php echo $pageTitles["Sources"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'navigacia.php' ?>
    
    <header>
        <h1><?php echo $sources["Title"][$lang]; ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    
    <article>
        <h2><?php echo $sources["Title"][$lang]; ?></h2>
        <?php echo $sources["First"][$lang]; ?>
        <ul>
            <li><a href="https://fony.dnes24.sk/clanky/13407-samsung-galaxy-a8-2018-a530">https://fony.dnes24.sk/clanky/13407-samsung-galaxy-a8-2018-a530</a></li>
            <li><a href="https://androidportal.zoznam.sk/2018/01/samsung-galaxy-a8-2018-recenzia-test/">https://androidportal.zoznam.sk/2018/01/samsung-galaxy-a8-2018-recenzia-test/</a></li>
            <li><a href="https://www.samsung.com/sk/support/model/SM-A530FZVDORX/ ">https://www.samsung.com/sk/support/model/SM-A530FZVDORX/</a></li>
            <li><a href="https://techbox.dennikn.sk/recenzie/samsung-galaxy-a8-2018/">https://techbox.dennikn.sk/recenzie/samsung-galaxy-a8-2018/ </a></li>
            <li><a href="https://en.wikipedia.org/wiki/Samsung_Galaxy_A8_(2018) ">https://en.wikipedia.org/wiki/Samsung_Galaxy_A8_(2018)</a></li>
            <li><a href="https://www.gadgetsnow.com/compare-mobile-phones/Samsung-Galaxy-A8-2018-vs-Apple-iPhone-XR-vs-Samsung-Galaxy-A52-5G-vs-Apple-iPhone-13">https://www.gadgetsnow.com/compare-mobile-phones/Samsung-Galaxy-A8-2018-vs-Apple-iPhone-XR-vs-Samsung-Galaxy-A52-5G-vs-Apple-iPhone-13</a></li>
            <li><a href="https://www.gadgetsnow.com/mobile-phones/Samsung-Galaxy-A8-2018 ">https://www.gadgetsnow.com/mobile-phones/Samsung-Galaxy-A8-2018 </a></li>
        </ul>
        <?php echo $sources["Second"][$lang]; ?>
        <ul>
            <li><a href="https://www.w3schools.com/css/">https://www.w3schools.com/css/</a></li>
            <li><a href="https://www.w3schools.com/html/">https://www.w3schools.com/html/ </a></li>
            <li><a href="https://www.sololearn.com/learning/1023 ">https://www.sololearn.com/learning/1023</a></li>
            <li><a href="https://www.sololearn.com/learning/1014 ">https://www.sololearn.com/learning/1014 </a></li>
            <li><a href="https://stackoverflow.com/">https://stackoverflow.com/</a></li>
        </ul>
    </article>

    <article id="contact">
        <form action="send.php">
            <label for="fname"><?php echo $form["FirstName"][$lang]; ?></label>
            <input type="text" id="fname" name="firstname" placeholder="<?php echo $form["FirstName"][$lang]; ?>">
        
            <label for="lname"><?php echo $form["LastName"][$lang]; ?></label>
            <input type="text" id="lname" name="lastname" placeholder="<?php echo $form["LastName"][$lang]; ?>">
        
            <label for="subject"><?php echo $form["Subject"][$lang]; ?></label>
            <textarea id="subject" name="subject" placeholder="<?php echo $form["SubjectPlaceHolder"][$lang]; ?>" style="height:200px"></textarea>
        
            <input type="submit" value="<?php echo $form["Submit"][$lang]; ?>">
        </form>
    </article> 
    <script src="js/script.js"></script>
</body>

</html>