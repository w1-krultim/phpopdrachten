<?php
/**
 * User: Tim
 * Date:5-02-2020
 * Time:11:55
 * Filer: index.php
 */
?>
<?php
$txt1 = "hallo";
$txt2 = "een makkelijke taal";
$txt14= "toch zo'n  makkelijke taal";
$txt3 = "wat is";
$txt4 = "PHP";
$txt5 = "nooit gedacht dat";
$txt6 = "de installatie is best ingewikkeld";
$txt7 = "fijn";
$txt8 = "?";
$txt9 = ".";
$txt10 = ",";
$txt11 = "<br>";
$txt12 = "is";
$txt13 = "vind je niet";
?>
<!doctype HTML>
<html>
<link href="sub/style.css" type="text/css" rel="stylesheet">
<head>
    Template
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../h2/opdracht_2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="../h2/opdracht2.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <p>
        <?php echo  $txt1; ?>
        <?php echo  $txt10; ?>
        <?php echo  $txt3; ?>
        <?php echo  $txt4; ?>
        toch een makkelijke taal
        <?php echo  $txt9; ?>
        <?php echo  $txt11; ?>
        <?php echo  $txt6; ?>
        <?php echo  $txt9; ?>
        <?php echo  $txt7; ?>
        toch
        <?php echo  $txt8; ?>
        <?php echo  $txt11; ?>
        <?php echo  $txt5; ?>
        <?php echo  $txt4; ?>
        <?php echo  $txt14; ?>
        <?php echo  $txt12; ?>
        <?php echo  $txt9; ?>


    </p>
    <p>
        <?php echo  $txt1; ?>
        <?php echo  $txt10; ?>
        <?php echo  $txt11; ?>
        <?php echo  $txt7; ?>
        toch dat
        <?php echo  $txt4; ?>
        <?php echo  $txt14; ?>
        <?php echo  $txt12; ?>
        <?php echo  $txt9; ?>
        <?php echo  $txt11; ?>
        <?php echo  $txt6; ?>
        <?php echo  $txt9; ?>
        <?php echo  $txt13; ?>
        <?php echo  $txt8; ?>
    </p>
</main>
</body>
</html>