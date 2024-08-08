<?php 
for( $num = 0; $num < 20; $num += 5) { 
        echo $num . "\n"; 
    } 
    for( $num = 1; $num < 50; $num++)  
    { 
        if($num % 5 == 0) 
            echo $num . "\n"; 
    }
    $arr = array('apple', 'banana', 'cherry');
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br>';
}
foreach($arr as $nn){
    echo $nn .'<br>';
}
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
  echo "$x . <br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php include"./components/nav.html" ?>
        <h1>Welcome To PHP CLASS</h1>
        <?php foreach($arr as $nn){
            echo"<h3>". $nn."</h3>" ;
        }
        ?>
        <?php include"./components/foot.html" ?>
    </main>
</body>
</html>