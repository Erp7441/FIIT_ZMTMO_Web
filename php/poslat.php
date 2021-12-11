<?php
    $meno = isset($_POST['name']) ? $_POST['name'] : NULL;
    $sprava = isset($_POST['messenge']) ? $_POST['messenge'] : NULL;

    if($meno == NULL || $sprava == NULL){
        header("Location: ../komentare.php");
        return;
    }
    $cesta = "../komentare.txt";
    $subor = fopen($cesta,"a");
    fwrite($subor,"$meno:\n$sprava\n---".PHP_EOL, strlen("$meno:\n$sprava\n---".PHP_EOL));
    header("Location: ../komentare.php");
    fclose($subor);
?>