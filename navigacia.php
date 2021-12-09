<?php require_once 'preklad.php'; ?>
<div id="sideMenu">
    <label id="themeSwitch">
        <input type="checkbox" id="themeSwitchInput">
        <span id="slider"></span>
    </label>
    <nav>
        <ul>
            <li><a href="index.php"><?php echo $sideBar["Home"][$lang]; ?></a></li>
            <li><a href="parametre.php"><?php echo $sideBar["Parameters"][$lang]; ?></a></li>
            <li><a href="porovnania.php"><?php echo $sideBar["Comparison"][$lang]; ?></a></li>
            <li><a href="recenzie.php"><?php echo $sideBar["Reviews"][$lang]; ?></a></li>
            <li><a href="fotky.php"><?php echo $sideBar["Photos"][$lang]; ?></a></li>
            <li><a href="videa.php"><?php echo $sideBar["Videos"][$lang]; ?></a></li>
            <li><a href="zvuk.php"><?php echo $sideBar["Sound"][$lang]; ?></a></li>
            <li><a href="zdroje.php"><?php echo $sideBar["Source"][$lang]; ?></a></li>
        </ul>
    </nav>
    <div id="langBtn">
        <?php
            if($lang == "sk") echo '<img src="images/icons/en.png" alt="English Language" id="langBtnImg">';
            else if($lang == "en") echo '<img src="images/icons/sk.png" alt="Slovak Language" id="langBtnImg">';
        ?>
    </div>
</div>
<div id="navBtn">
    <img src="images/icons/menu.png" alt="<?php echo $alt["Navigation"][$lang]; ?>" id="navBtnImg">
</div>