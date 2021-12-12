<!DOCTYPE html>
<?php require_once 'php/preklad.php'; ?>
<html lang="<?php echo $lang; ?>">

<head>
    <?php include 'php/meta.php'; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleStred.css">
    <link rel="stylesheet" href="css/styleKomentare.css">
    <title><?php echo $pageTitles["Comments"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>
    
    <header>
        <h1><?php echo $comments["Title"][$lang]; ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    
    <article id="komentare">
        <form action="php/poslat.php" method="POST">
            <label for="name"><?php echo $comments["Name"][$lang]; ?></label>
            <input type="text" id="name" name="name" placeholder="<?php echo $comments["Name"][$lang]; ?>" required="required">
        
            <label for="messenge"><?php echo $comments["Messenge"][$lang]; ?></label>
            <textarea id="messenge" name="messenge" placeholder="<?php echo $comments["MessengePlaceHolder"][$lang]; ?>" style="height:200px" required="required"></textarea>
        
            <input type="submit" value="<?php echo $comments["Submit"][$lang]; ?>">
        </form>
    </article>
    <article id = "komentarovaSekcia">
    <?php
        echo "Komentare:<br><br>";

        $cesta = "./komentare.txt";
        $subor = fopen($cesta,"r");
        $bZaciatok = true;

        while ($riadok = fgets($subor, filesize($cesta))) {
            if(strcmp($riadok,"---".PHP_EOL) === 0){
                $bZaciatok = true;
                echo "</div>";
                continue;
            }
            if($bZaciatok === true){
                echo "<div class = \"komentar\">";
                echo "<br>$riadok<br><br>";
                $bZaciatok = false;
            }
            else{
                echo "$riadok";
            }
            
        }

        fclose($subor);
    
    ?>
    </article> 
    <script src="js/script.js"></script>
</body>

</html>