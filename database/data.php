<?php
 $joindata = mysqli_connect("localhost","root","","new-project");
 if(!$joindata) {
   die("Database not connected: " . mysqli_connect_error());
//     echo"Database connected";
//  }else{
//     echo "database not connected";

 }

 
//  }else{
//    mysqli_error($mysqli);
//  }
 $query = "UPDATE users SET email=? WHERE id=?";
 $stmt = mysqli_prepare($joindata, $query);
 mysqli_stmt_bind_param($stmt, "", $email, $userId);
 $email = "rats@gmail.com";
$userId = 1;
mysqli_stmt_execute($stmt);

echo "Records updated: " . mysqli_stmt_affected_rows($stmt);

//  $result = mysqli_query($link, $query);
//  if(mysqli_num_rows($result) > 0) {
//    while($row = mysqli_fetch_assoc($result)) {

//    }
//  }
 $stmt = "DELETE FROM users WHERE id=?";
 $stmt = mysqli_prepare($link, $query);
 mysqli_stmt_bind_param($stmt,"i", $userId,) or die("$stmt". mysqli_error($link));
$userId = 2;
mysqli_stmt_execute($stmt);
echo "Records deleted". mysqli_stmt_affected_rows($stmt);
mysqli_stmt_close($stmt);
mysqli_close($joindata);
?>