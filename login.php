<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<?php

echo "Login to your blog account <br />";
echo "<h1>My name is Nonsoglobal</h1>";
print("<h2> using print method </h2>");
print_r("<h2> Print R is used to complex data like arrays 
and multi-diimension array </h2>");

$name = "Nonsoglobal <br />";
echo "My name". $name."<br />";

$num1 = 20;
$num2 = 30;

echo $num1 + $num2;

$hasPaid = true;
$eaten = false;

$cars = ["Toyota", "Benz", "Tesla", "Lamboghini"];
echo $cars[3];

print_r($cars);
$str_method = "Testing working";
echo strlen($str_method);
echo strpos($str_method,"string");

?>