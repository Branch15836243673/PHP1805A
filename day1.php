<?php
$arr1=array('zhang',"san");

array_push($arr1,"lisi","wanggu");
print_r($arr1);

echo "<br>";

echo "<table width='500px' border='1'>";
for ($i=1;$i<10;$i++){
    echo "<tr>";
    for ($j=1;$j<=$i;$j++){
        echo "<td>{$j}x{$i}=".($i*$j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";

