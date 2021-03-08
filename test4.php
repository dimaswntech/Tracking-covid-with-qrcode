<a href="tel:+6282242053245">Sini</a>
<?php
$x=date("Y-m-d h:i:s");
$a=strtotime("tomorrow");
echo date("Y-m-d h:i:s", $a) . "<br>";

$b=strtotime("next Saturday");
echo date("Y-m-d h:i:s", $b) . "<br>";

$c=strtotime("-2 Hours");
echo date($x, strtotime("-2 Hours")) . "<br>";

$d1=date("Y-m-d h:i:sa", $c);
$d2=date("Y-m-d h:i:sa");
echo $d1. "<br>";
echo $d2. "<br>";
if($d1>$d2){
    echo "lebih dulu";
}elseif($d1<$d2){
    echo "keduluan";
}
?>