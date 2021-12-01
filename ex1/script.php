<?php
function mult($x, $y) {
  $z = $x * $y;
  return $z;
}

echo "<table style='border: 1px solid black'>";
echo "<tr>";
for ($j = 0; $j <= 100; $j++) {
  echo "<td>";
  echo $j;
  echo "</td>";
}
echo "</tr>";
for ($i = 1; $i <= 100; $i++) {
  echo "<tr>";
  echo "<td>";
  echo $i;
  echo "</td>";
  for ($j = 1; $j <= 100; $j++) {
    echo "<td>";
    echo mult($i, $j);
    echo "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
