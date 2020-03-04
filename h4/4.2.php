<?php
/**
 * User: Tim Krul
 * Date: 4-3-2020
 * Time: 12:20
 * File: 4.2.php
 */
?>
    <link href="../includess/footer.css" rel="stylesheet" type="text/css">

<?php
include "../includess/header.php";
?>

<?php
/**
 * Nederlands = Ende, Jan-Chris van den
 * Engels = Giesen, Jan
 * PHP = Saebu, Abu
 * JavaScript = Evers, Remco
 * ASP = Martijn, Van de Wetering
 * Modeleren = Bijnen, Wim van
 * Database SQL = Wetering, Martijn van de
 * Digitale vaardigheden gevorderd = Pielage, Larissa
 * Rekenen = Wetering, Martijn van de
 * Loopbaan & Burgerschap = Thomas ,Visser
 * Computertekenen = Berg, Pieter van den
 */



$courseName = 'Engels';
$teacherName = '';

switch($courseName){
    case "Nederlands":
        $teacherName = 'Ende, Jan-Chris van den';
        break;
    case "Engels":
        $teacherName = 'Mitrovic';
        break;
    case "PHP":
        $teacherName = 'Saebu, Abu';
        break;
    case "JavaScript":
        $teacherName = 'Evers, Remco';
        break;
    case "ASP":
        $teacherName = 'Gijsbrechts, Ralph';
        break;
    case "Modelleren":
        $teacherName = 'Bijnen, Wim van';
        break;
    case "Database SQL":
        $teacherName = 'Wetering, Martijn van de';
        break;
    case "Digitale vaardigheden gevorderd":
        $teacherName = 'Pielage, Larissa';
        break;
    case "Rekenen":
        $teacherName = 'Wetering, Martijn van de';
        break;
    case "Loopbaan & Burgerschap":
        $teacherName = 'Visser, Thomas';
        break;
    case "Computertekenen":
        $teacherName = 'Berg, Pieter van den';
        break;
}

echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
?>

<?php
include "../includess/variabelen.php";
include "../includess/footer.php";

?>