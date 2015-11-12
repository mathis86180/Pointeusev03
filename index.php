<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php


spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    require __DIR__."/Classes/".end($parts) . '.php';
});

use PointeuseV03\PointeuseNiveau1;
use PointeuseV03\PointeuseNiveau2;
use PointeuseV03\PointeuseNiveau3;
date_default_timezone_set("EUROPE/Paris");

$Pointeuse1 = new PointeuseNiveau1();
$Pointeuse2 = new PointeuseNiveau2();
$Pointeuse3 = new PointeuseNiveau3();

echo " Pointeuse Niveau 1<br>";
echo $Pointeuse1->badger("1:00:00");
echo $Pointeuse1->debadger("15:00:00");

echo " risque :";
echo $Pointeuse1->risque();
echo "</br>";
echo "</br>";

echo "Pointeuse Niveau 2<br>";
echo $Pointeuse2->badger("1:00:00");
echo $Pointeuse2->debadger("11:00:00");
echo " Secondes Cumulées :";
echo join($Pointeuse2->heuresCumulées())." secondes.";
echo "</br>";
echo "</br>";

echo "Pointeuse Niveau 3<br>";
echo $Pointeuse3->badger("1:24:18");
echo $Pointeuse3->debadger("6:00:00");
echo " Secondes Cumulées : ";
echo join($Pointeuse3->heuresCumulées())." secondes. </br>";
echo "Contamination : ";
echo $Pointeuse3->estContaminé();

?>
</body>
</html>