<!DOCTYPE html>
<?php require_once 'php/preklad.php'; ?>
<html lang="<?php echo $lang; ?>">

<head>
    <?php include 'php/meta.php'; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleStred.css">
    <title><?php echo $pageTitles["Sources"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>
    
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
    <script src="js/script.js"></script>
</body>

</html>