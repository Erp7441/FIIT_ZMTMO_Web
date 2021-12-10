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
<?php
    $cesta = 'images/fotky';
    $fotky = array_diff(scandir($cesta), array('.', '..'));

    echo "<script>";
    echo "let images = [";
    foreach($fotky as $index => $fotka){
        echo "'$cesta/$fotka'";
        if($index != array_key_last($fotky)){
            echo",";
        }
    }
    echo "];";
    echo "</script>";
    echo "<script src=\"js/galeria.js\"></script>";
?>