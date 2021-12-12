<!DOCTYPE html>
<?php require_once 'php/preklad.php'; ?>
<html lang="<?php echo $lang; ?>">

<head>
    <?php include 'php/meta.php'; ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleTabulky.css">
    <link rel="stylesheet" href="css/stylePorovnania.css">
    <title><?php echo $pageTitles["Comparison"][$lang]; ?></title>
</head>

<body>
    <div id="background"></div>
    <?php include 'php/navigacia.php' ?>

    <header>
        <h1><?php echo $comparison["Title"][$lang]; ?></h1>
        <img src="images/logo.svg" alt="Logo" id="logo">
    </header>
    <table>
        <thead>
            <th><?php echo $comparison["Phone"][$lang]; ?></th>
            <th><?php echo $comparison["SamsungGalaxyA82018"][$lang]; ?></th>
            <th><?php echo $comparison["AppleiPhoneXR"][$lang]; ?></th>
            <th><?php echo $comparison["SamsungGalaxyA525G"][$lang]; ?></th>
            <th><?php echo $comparison["AppleiPhone13"][$lang]; ?></th>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $comparison["Processor"][$lang]; ?></th>
                <td><?php echo $comparison["ProcessorValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ProcessorValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ProcessorValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ProcessorValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["ScreenDiagonal"][$lang]; ?></th>
                <td><?php echo $comparison["ScreenDiagonalValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ScreenDiagonalValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ScreenDiagonalValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ScreenDiagonalValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Camera"][$lang]; ?></th>
                <td><?php echo $comparison["CameraValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["CameraValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["CameraValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["CameraValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["BatteryCapacity"][$lang]; ?></th>
                <td><?php echo $comparison["BatteryCapacityA8"][$lang]; ?></td>
                <td><?php echo $comparison["BatteryCapacityiXR"][$lang]; ?></td>
                <td><?php echo $comparison["BatteryCapacityA52"][$lang]; ?></td>
                <td><?php echo $comparison["BatteryCapacityi13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["RAM"][$lang]; ?></th>
                <td><?php echo $comparison["RAMValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["RAMValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["RAMValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["RAMValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["FingerprintSensor"][$lang]; ?></th>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["No"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["No"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["OperatingSystem"][$lang]; ?></th>
                <td><?php echo $comparison["OperatingSystemValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["OperatingSystemValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["OperatingSystemValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["OperatingSystemValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["SimSlots"][$lang]; ?></th>
                <td><?php echo $comparison["SimSlotsValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlotsValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlotsValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlotsValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["ReleaseDate"][$lang]; ?></th>
                <td><?php echo $comparison["ReleaseDateValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ReleaseDateValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ReleaseDateValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ReleaseDateValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Network"][$lang]; ?></th>
                <td><?php echo $comparison["NetworkValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["NetworkValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["NetworkValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["NetworkValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Speaker"][$lang]; ?></th>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["FMRadio"][$lang]; ?></th>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["No"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["AudioJack"][$lang]; ?></th>
                <td><?php echo $comparison["AudioJackValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["AudioJackValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["AudioJackValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["AudioJackValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Chipset"][$lang]; ?></th>
                <td><?php echo $comparison["ChipsetValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ChipsetValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ChipsetValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ChipsetValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Architecture"][$lang]; ?></th>
                <td><?php echo $comparison["ArchitectureValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ArchitectureValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ArchitectureValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ArchitectureValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Thickness"][$lang]; ?></th>
                <td><?php echo $comparison["ThicknessValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ThicknessValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ThicknessValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ThicknessValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Width"][$lang]; ?></th>
                <td><?php echo $comparison["WidthValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["WidthValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["WidthValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["WidthValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Height"][$lang]; ?></th>
                <td><?php echo $comparison["HeightValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["HeightValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["HeightValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["HeightValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Weight"][$lang]; ?></th>
                <td><?php echo $comparison["WeightValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["WeightValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["WeightValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["WeightValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["WaterResistance"][$lang]; ?></th>
                <td><?php echo $comparison["WaterResistanceValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["WaterResistanceValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["WaterResistanceValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["WaterResistanceValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["DustResistance"][$lang]; ?></th>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $parameters["Colors"][$lang]; ?></th>
                <td><?php 
                    echo $parameters["Black"][$lang];
                    echo $parameters["Blue"][$lang];
                    echo $parameters["Gold"][$lang];
                    echo $parameters["Orchid"][$lang];
                    echo $parameters["Grey"][$lang];
                ?></td>
                <td><?php 
                    echo $parameters["Black"][$lang];
                    echo $parameters["Blue"][$lang];
                    echo $parameters["Yellow"][$lang];
                    echo $parameters["Red"][$lang];
                    echo $parameters["Coral"][$lang];
                ?></td>
                <td><?php 
                    echo $parameters["Black"][$lang];
                    echo $parameters["Blue"][$lang];
                    echo $parameters["White"][$lang];
                    echo $parameters["Purple"][$lang];
                ?></td>
                <td><?php 
                    echo $parameters["Red"][$lang];
                    echo $parameters["MidnightBlue"][$lang];
                    echo $parameters["Pink"][$lang];
                    echo $parameters["Starlight"][$lang];
                ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["DisplayType"][$lang]; ?></th>
                <td><?php echo $comparison["DisplayTypeValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["DisplayTypeValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["DisplayTypeValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["DisplayTypeValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["AspectRatio"][$lang]; ?></th>
                <td><?php echo $comparison["AspectRatioValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["AspectRatioValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["AspectRatioValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["AspectRatioValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["PixelDensity"][$lang]; ?></th>
                <td><?php echo $comparison["PixelDensityValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["PixelDensityValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["PixelDensityValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["PixelDensityValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["ScreenToBodyRatio"][$lang]; ?></th>
                <td><?php echo $comparison["ScreenToBodyRatioValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ScreenToBodyRatioValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ScreenToBodyRatioValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ScreenToBodyRatioValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["DisplayResolution"][$lang]; ?></th>
                <td><?php echo $comparison["DisplayResolutionValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["DisplayResolutionValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["DisplayResolutionValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["DisplayResolutionValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["InternalStorage"][$lang]; ?></th>
                <td><?php echo $comparison["InternalStorageValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["InternalStorageValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["InternalStorageValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["InternalStorageValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["ExternalStorage"][$lang]; ?></th>
                <td><?php echo $comparison["ExternalStorageValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["No"][$lang]; ?></td>
                <td><?php echo $comparison["ExternalStorageValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["No"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["USBOTGSupport"][$lang]; ?></th>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["No"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["No"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["CameraSettings"][$lang]; ?></th>
                <td><?php echo $comparison["CameraSettingsValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["CameraSettingsValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["CameraSettingsValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["CameraSettingsValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["CameraFeatures"][$lang]; ?></th>
                <td><?php echo $comparison["CameraFeaturesValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["CameraFeaturesValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["CameraFeaturesValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["CameraFeaturesValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["ImageResolution"][$lang]; ?></th>
                <td><?php echo $comparison["ImageResolutionValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ImageResolutionValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ImageResolutionValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ImageResolutionValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["ShootingModes"][$lang]; ?></th>
                <td><?php echo $comparison["ShootingModesValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["ShootingModesValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["ShootingModesValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["ShootingModesValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["PhysicalAperture"][$lang]; ?></th>
                <td><?php echo $comparison["PhysicalApertureValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["PhysicalApertureValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["PhysicalApertureValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["PhysicalApertureValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Flash"][$lang]; ?></th>
                <td><?php echo $comparison["FlashValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["FlashValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["FlashValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["FlashValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["VideoRecordings"][$lang]; ?></th>
                <td><?php echo $comparison["VideoRecordingsValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["VideoRecordingsValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["VideoRecordingsValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["VideoRecordingsValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["FastCharging"][$lang]; ?></th>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["BatteryType"][$lang]; ?></th>
                <td><?php echo $comparison["BatteryTypeValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["BatteryTypeValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["BatteryTypeValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["BatteryTypeValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Wi-Fi"][$lang]; ?></th>
                <td><?php echo $comparison["Wi-FiValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["Wi-FiValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["Wi-FiValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["Wi-FiValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Wi-FFeatures"][$lang]; ?></th>
                <td><?php echo $comparison["Wi-FiFeaturesValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["Wi-FiFeaturesValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["Wi-FiFeaturesValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["Wi-FiFeaturesValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Bluetooth"][$lang]; ?></th>
                <td><?php echo $comparison["BluetoothValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["BluetoothValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["BluetoothValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["BluetoothValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["USBType"][$lang]; ?></th>
                <td><?php echo $comparison["USBTypeValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["USBTypeValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["USBTypeValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["USBTypeValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["NFC"][$lang]; ?></th>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
                <td><?php echo $comparison["Yes"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["GPS"][$lang]; ?></th>
                <td><?php echo $comparison["GPSValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["GPSValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["GPSValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["GPSValuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["SimSlot1"][$lang]; ?></th>
                <td><?php echo $comparison["SimSlot1ValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlot1ValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlot1ValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlot1Valuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["SimSlot2"][$lang]; ?></th>
                <td><?php echo $comparison["SimSlot2ValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlot2ValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlot2ValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["SimSlot2Valuei13"][$lang]; ?></td>
            </tr>
            <tr>
                <th><?php echo $comparison["Price"][$lang]; ?></th>
                <td><?php echo $comparison["PriceValueA8"][$lang]; ?></td>
                <td><?php echo $comparison["PriceValueiXR"][$lang]; ?></td>
                <td><?php echo $comparison["PriceValueA52"][$lang]; ?></td>
                <td><?php echo $comparison["PriceValuei13"][$lang]; ?></td>
            </tr>
        </tbody>
    </table>
    <script src="js/script.js"></script>
</body>

</html>