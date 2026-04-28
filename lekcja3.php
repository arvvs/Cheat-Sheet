<?php
$tab = [1,2,3,4,5,6, "XD"];
      //0,1,2,3,4,5,6
echo $tab[6];

$tab_assoc =[
  "key" => "value"
  "key2" => "value2"
];
echo "</br>;
echo "tablica assocjacyjna: <br>";
echo $tab_assoc["key"];

echo "</br><hr></br>";

echo "<pre>";
print_r($tab);
print_r($tab_assoc);
echo "</pre>";



?>
