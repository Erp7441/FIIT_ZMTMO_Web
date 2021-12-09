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
    <link rel="stylesheet" href="css/styleTabulky.css">
    <link rel="stylesheet" href="css/styleParametere.css">
    <title><?php echo $pageTitles["Parameters"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'navigacia.php' ?>

    <header>
        <h1><?php echo $parameters["Title"][$lang]; ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    <table>
        <tr><th><?php echo $parameters["OperatingSystem"][$lang]; ?></th><td><?php echo $parameters["OperatingSystemValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["SimSlots"][$lang]; ?></th><td><?php echo $parameters["SimSlotsValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["ReleaseDate"][$lang]; ?></th><td><?php echo $parameters["ReleaseDateValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Network"][$lang]; ?></th><td><?php echo $parameters["NetworkValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["FingerprintSensor"][$lang]; ?></th><td><?php echo $parameters["Yes"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Speaker"][$lang]; ?></th><td><?php echo $parameters["Yes"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["FMRadio"][$lang]; ?></th><td><?php echo $parameters["Yes"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["AudioJack"][$lang]; ?></th><td><?php echo $parameters["AudioJackValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Chipset"][$lang]; ?></th><td><?php echo $parameters["ChipsetValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Processor"][$lang]; ?></th><td><?php echo $parameters["ProcessorValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Architecture"][$lang]; ?></th><td><?php echo $parameters["ArchitectureValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["RAM"][$lang]; ?></th><td><?php echo $parameters["RAMValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Thickness"][$lang]; ?></th><td><?php echo $parameters["ThicknessValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Width"][$lang]; ?></th><td><?php echo $parameters["WidthValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Height"][$lang]; ?></th><td><?php echo $parameters["HeightValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Weight"][$lang]; ?></th><td><?php echo $parameters["WeightValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["WaterResistance"][$lang]; ?></th><td><?php echo $parameters["WaterResistanceValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["DustResistance"][$lang]; ?></th><td><?php echo $parameters["Yes"][$lang]; ?></td></tr>
        <tr>
            <th><?php echo $parameters["Colors"][$lang]; ?></th>
            <td><?php 
                echo $parameters["Black"][$lang];
                echo $parameters["Blue"][$lang];
                echo $parameters["Gold"][$lang];
                echo $parameters["Orchid"][$lang];
                echo $parameters["Grey"][$lang];
            ?></td>
        </tr>
        <tr><th><?php echo $parameters["DisplayType"][$lang]; ?></th><td><?php echo $parameters["DisplayTypeValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["AspectRatio"][$lang]; ?></th><td><?php echo $parameters["AspectRatioValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["PixelDensity"][$lang]; ?></th><td><?php echo $parameters["PixelDensityValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["ScreenToBodyRatio"][$lang]; ?></th><td><?php echo $parameters["ScreenToBodyRatioValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["ScreenDiagonal"][$lang]; ?></th><td><?php echo $parameters["ScreenDiagonalValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["DisplayResolution"][$lang]; ?></th><td><?php echo $parameters["DisplayResolutionValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["InternalStorage"][$lang]; ?></th><td><?php echo $parameters["InternalStorageValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["ExternalStorage"][$lang]; ?></th><td><?php echo $parameters["ExternalStorageValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["USBOTGSupport"][$lang]; ?></th><td><?php echo $parameters["Yes"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["CameraSettings"][$lang]; ?></th><td><?php echo $parameters["CameraSettingsValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["CameraFeatures"][$lang]; ?></th><td><?php echo $parameters["CameraFeaturesValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["ImageResolution"][$lang]; ?></th><td><?php echo $parameters["ImageResolutionValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["ShootingModes"][$lang]; ?></th><td><?php echo $parameters["ShootingModesValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["CameraResolution"][$lang]; ?></th><td><?php echo $parameters["CameraResolutionValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["PhysicalAperture"][$lang]; ?></th><td><?php echo $parameters["PhysicalApertureValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Flash"][$lang]; ?></th><td><?php echo $parameters["FlashValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["VideoRecordings"][$lang]; ?></th><td><?php echo $parameters["VideoRecordingsValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["FastCharging"][$lang]; ?></th><td><?php echo $parameters["Yes"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["BatteryType"][$lang]; ?></th><td><?php echo $parameters["BatteryTypeValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["BatteryCapacity"][$lang]; ?></th><td><?php echo $parameters["BatteryCapacityValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Wi-Fi"][$lang]; ?></th><td><?php echo $parameters["Wi-FiValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Wi-FiFeatures"][$lang]; ?></th><td><?php echo $parameters["Wi-FiFeaturesValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["Bluetooth"][$lang]; ?></th><td><?php echo $parameters["BluetoothValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["USBType"][$lang]; ?></th><td><?php echo $parameters["USBTypeValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["NFC"][$lang]; ?></th><td><?php echo $parameters["Yes"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["GPS"][$lang]; ?></th><td><?php echo $parameters["GPSValue"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["SimSlot1"][$lang]; ?></th><td><?php echo $parameters["SimSlot1Value"][$lang]; ?></td></tr>
        <tr><th><?php echo $parameters["SimSlot2"][$lang]; ?></th><td><?php echo $parameters["SimSlot2Value"][$lang]; ?></td></tr>
    </table>
    <script src="js/script.js"></script>
</body>

</html>