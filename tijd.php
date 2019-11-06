<?php
// kijken of de tijd in seconden is anders afsluiten.
$voor = "s";
$input = $argv[1];
$positie = strpos ( $input , $voor);
var_dump($positie);
// kijken wat er voor de S staat.
if ($positie == false ) {
echo "Geen tijd gevonden.";
exit();
}
$aantalseconden = (int)$input;
// het aantal seconden weergeven.
echo $aantalseconden . " Seconden";