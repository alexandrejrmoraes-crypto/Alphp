<?php
$a="10";// a = "10" string
$b="15";// b = "15" string
echo "Igualdade = ".($a==$b)."<br>";//igualdade = false
echo "Idêntico = ".($a===$b)."<br>";// identico = false
echo "Não igual = ".($a!=$b)."<br>";//Não igaul = true
echo "Não Idêntico = ".($a!==$b)."<br>";//Não identico = true
echo"<hr>";
$c=20;
$d=40;
$e=500;
$f=!($c>$d);//f = !(false) = true
var_dump($f);
echo"<hr>";
$g=50;
$h=120;
$i=200;
$j=($c<$e)&&!($e>1000);//j= (true) && !(false) = true
$j=(($g<=$h) and ($g<=$i));// true
$k=(($g<=$h) &&  ($g>=$i));// false 
var_dump($j);
echo "<br>";
var_dump($e);
echo"<hr>";

/*
=   atribuição/receber
==  igualdade
=== identico

*/
?>