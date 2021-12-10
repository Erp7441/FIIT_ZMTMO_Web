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
    <link rel="stylesheet" href="css/styleZvuk.css">
    <title><?php echo $pageTitles["Sound"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>
    
    <header>
        <h1><?php echo $sounds["Title"][$lang]; ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    
    <article>
        <h3><?php echo $sounds["AudioFromPhone"][$lang]; ?></h3>
        <p>Calm</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Calm.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Music Box</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Music_Box.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Nudge</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Nudge.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Over the Horizon</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Over_the_Horizon.mp3" type="audio/mp3">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Piggyback</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Piggyback.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Shrink Ray</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Shrink_Ray.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Snappy</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Snappy.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Sweet</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Sweet.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Tennis</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Tennis.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Tones</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Tones.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Treasure</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Treasure.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Welcome</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Welcome.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>
        <p>Whistle</p>
        <div class="audioWrapper">
            <audio controls>
                <source src="audio/Whistle.ogg" type="audio/ogg">
                <?php echo $sounds["Error"][$lang]; ?>
            </audio>
        </div>      
    </article>
    <script src="js/script.js"></script>
</body>

</html>