<?php
  $user = $_POST["username"];
  $pass = $_POST["password"];

  $nikeAmount = $_POST["item1"];
  $adidasAmount = $_POST["item2"];
  $poloAmount = $_POST["item3"];

  $shipping = $_POST["shipping"];

  $nikeCost = 10;
  $adidasCost = 20;
  $poloCost = 15;

  $shippingCost = 0;

  if($shipping == 'Free 7 Day'){

  }
  else if($shipping == '$50 Overnight'){
    $shippingCost = 50;
  }
  else if($shipping == '$5 3 Day'){
    $shippingCost = 5;
  }

  $total = ($nikeCost  * $nikeAmount) + ($adidasCost  * $adidasAmount) + ($poloCost  * $poloAmount) + $shippingCost;

  echo "<div style='text-align: center; border: 1px solid gray; padding-bottom: 20px;'>";
  echo "<h3>Welcome </h3>" . $user . "<p>Thank you for your order!</p>";
  echo "<p>Password: </p>" . $pass;
  echo "</div>";

  echo "<center><br>";

  echo "<table style='border: 1px solid black'>";

  echo "<tr style='border: 1px solid black'>";
  echo "<th style='border: 1px solid black'>Quantity</th>";
  echo "<th style='border: 1px solid black'>Cost Per Item</th>";
  echo "<th style='border: 1px solid black'>Sub Total</th>";
  echo "</tr>";

  echo "<tr style='border: 1px solid black'>";
  echo "<td style='border: 1px solid black'><b>Nike Shirt</b></td>";
  echo "<td style='border: 1px solid black'>" . $nikeCost . "</td>";
  echo "<td style='border: 1px solid black'>" . $nikeCost  * $nikeAmount . "</td>";
  echo "</tr>";

  echo "<tr style='border: 1px solid black'>";
  echo "<td style='border: 1px solid black'><b>Adidas Shirt</b></td>";
  echo "<td style='border: 1px solid black'>" . $adidasCost . "</td>";
  echo "<td style='border: 1px solid black'>" . $adidasCost  * $adidasAmount . "</td>";
  echo "</tr>";

  echo "<tr style='border: 1px solid black'>";
  echo "<td style='border: 1px solid black'><b>Polo Shirt</b></td>";
  echo "<td style='border: 1px solid black'>" . $poloCost . "</td>";
  echo "<td style='border: 1px solid black'>" . $poloCost  * $poloAmount . "</td>";
  echo "</tr>";

  echo "<tr style='border: 1px solid black'>";
  echo "<td style='border: 1px solid black'>-</td>";
  echo "<td style='border: 1px solid black'>-</td>";
  echo "<td style='border: 1px solid black'>-</td>";
  echo "</tr>";

  echo "<tr style='border: 1px solid black'>";
  echo "<td style='border: 1px solid black'><b>Shipping</b></td>";
  echo "<td style='border: 1px solid black'> " . $shipping . "</td>";
  echo "</tr>";

  echo "<tr style='border: 1px solid black'>";
  echo "<td style='border: 1px solid black'><b>Total Cost</b></td>";
  echo "<td style='border: 1px solid black'>-</td>";
  echo "<td style='border: 1px solid black'>" . $total . "</td>";
  echo "</tr>";

  echo "</table>";

  echo "</center>";
?>
