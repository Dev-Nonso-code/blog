<?php
date_default_timezone_set("Africa/Lagos");
echo date("l")."<br />";
echo date("j")."<br />";
echo date("S")."<br/>";
echo date("F")."<br/>";
echo date("Y")."<br/>";
echo date("A")."<br/>";
echo date("H:i:s:A")."<br/>";

echo "The time is " . date("h:i:sa")."<br/>";
echo "My name is <br/> Obasi";

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l")."<br/>";

$str = "This random Number";
$hashed = bin2hex($str);
echo($hashed);
$reversed = bin2hex($hashed);
echo($reversed)."<br/>";

echo rand(1,100)."<br/>";
echo random_bytes(8);
// echo(bin2hex($str));
?>