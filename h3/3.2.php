<?php
/**
 * User: Tim
 * Date:5-02-2020
 * Time:11:55
 * Filer: index.php
 */
?>
<?php
$trafficLightColor ="groen";
$ambulanceComing = false;

?>
<link href="sub/style.css" type="text/css" rel="stylesheet">
<body>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
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
                <li>
                    <a href="../h3/3.2.php">Opdracht 3.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
<?php
if($ambulanceComing==true || $trafficLightColor!="groen")
{
    $driveOn=false;
}
else
{
    $driveOn=true;
}
if($driveOn==true)
{

    echo"<p class='groen'> je mag doorrijden</p>";
}
else
{
    echo"<p class='rood'> Je mag niet doorijden</p>";
}

?>
    <?php
    $countryName="Zweden";
    $currentAge=20;
    if($currentAge>=18 && $countryName=="belgie")
    {
        echo"je woont in $countryName en bent daar $currentAge jaar oud";
        echo"je mag hier alle dranken drinken";

    }
    elseif($currentAge>=16 && $countryName=="belgie")
    {

        echo "je woont in $countryName en bent daar $currentAge jaar oud";
        echo "je mag hier zwakke alcohol drinken";
    }

    if($currentAge>=18 && $countryName=="Bulgarije")
    {
        echo"je woont in $countryName en bent daar $currentAge jaar oud";
        echo"je mag hier alle dranken drinken";

    }

    if($currentAge>=17 && $countryName=="Cyprus")
    {
        echo "je woont in $countryName en bent daar $currentAge jaar oud";
        echo "je mag hier alle dranken drinken";

    }

    if($currentAge>=18 && $countryName=="Nederland")
    {
        echo "je woont in $countryName en bent daar $currentAge jaar oud";
        echo "je mag hier alle dranken drinken";

    }
    if($currentAge>=20 && $countryName=="Zweden")
    {
        echo"je woont in $countryName en bent daar $currentAge jaar oud";
        echo"je mag hier alle dranken drinken";

    }
    elseif($currentAge>=18 && $countryName=="Zweden")
    {

        echo "je woont in $countryName en bent daar $currentAge jaar oud";
        echo "je mag hier zwakke alcohol drinken";
    }
    else
        {
            echo"je mag hier niet drinken";

    }

    ?>

</main>
</body>

</html>
