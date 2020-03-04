<footer id="footer">
<?php
    echo $year ;
    echo $hournow ;
    echo $name;


?>

<?php
if($hournow<=5)
{
  echo $daypart ="Goedennacht";
}
else if($hournow>5 && $hournow<12)
{
    echo $daypart ="Goedenochtend";
}
else if($hournow>=12 && $hournow<17)
{
    echo $daypart = "Goedemiddag";
}
if($hournow >=17 && $hournow <24)
{
    echo $daypart = "Goede avond";
}

?>
</footer>
