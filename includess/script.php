<?php
$task2 = "Lancering in : ";
$teller = 19;

while($teller >=0){

    $task2 = $task2.$teller;
    if($teller > 0)
    {
        $task2 .= ",";
    }
    $teller--;

}
$task3 ="lancering in:";

for($teller =19;$teller>=0; $teller--)
{
$task3 = $task3.$teller;
    if($teller > 0)
    {
        $task3 .= ",";
    }
}
?>

<?php

$task4 ="";
$teller = 1;

while($teller<=6){
    $task4 .= "<h$teller> dit is de ".$teller."e iteratie <h$teller>";
    $teller++;


}
$task5= "";
$begin ="<table><tr>";
$eind ="</table></tr>";
for($teller =1;$teller<=10; $teller++)
{
    $task5 .="<td>Dit is de".$teller."e iteratie</td>";
    $task5 = $begin.$task5;
    $task5 = $eind.$task5;
}
$task6="";
$teller = 2020;

?>
