<?php
/**
 * User: Tim
 * Date:5-02-2020
 * Time:11:55
 * Filer: index.php
 */
?>
<?php
$evenement = "Elfstedentocht";
$evenement1 = "Alvestêtocht";
$distance = 200;
$evenement2 ="schaatstocht";
$condition ="natuurijs";
$assocation ="Koninklijke Vereniging de Friesche Elf Steden";
$city ="Leeuwarden";
$state ="Friesland";
$times = 15;
$times1 = 1;
$year = 1909;
$verhaal2= "De ".$evenement." (Fries:".$evenement1.") is een ".$distance." kilometer lange ".$evenement2." over ".$condition.
    " die wordt georganiseerd door de ".$assocation.". ".$city." de hoofdstad van ".$state.
    ", is start- en aankomstplaats. De ".$evenement." is inmiddels ".$times." maal verreden en werd voor het eerst in ".$year.
    " gereden en wordt maximaal ".$times1." keer per winter gehouden."

?>
<link href="sub/style.css" type="text/css" rel="stylesheet">
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

    <ul>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="../h3/opdracht3.1.php">Opdracht 3.1</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <p>


    De.
    <?php echo $evenement;?>
    (Fries:
    <?php echo $evenement1;?>
    ) is een
    <?php echo $distance;?>
    kilometer lange
    <?php echo $evenement2;?>
    over
    <?php echo $condition;?>
    die wordt georganiseerd door de
    <?php echo $assocation;?>
    <?php echo $city;?>
    de hoofdstad van
    <?php echo $state;?>
    is start- en aankomstplaats. De
    <?php echo $evenement;?>
    is inmiddels
    <?php echo $times;?>
    maal verreden en werd voor het eerst in
    <?php echo $year;?>
     gereden en wordt maximaal
    <?php echo $times1;?>
    keer per winter gehouden
    </p>
    <p>

        <?php echo $verhaal2;?>
    </p>
</main>
</body>
</html>
