 <?php
 echo "<table><tr><td></td>";
 for ($i=1; $i <= 100; $i++) {
   echo "<td>$i</td>";
 }

for ($i=1; $i <= 100; $i++) {
  echo "<tr><td>$i</td>";
  for ($j=1; $j <= 100; $j++) {
    $product = $i * $j;
    echo "<td> $product </td>";
  }
  echo "</tr>";
}

echo "</table>";

 ?>
