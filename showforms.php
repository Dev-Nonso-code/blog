<?php 
// $password = $_POST["password"];
// $firstname = $_POST["firstname"];
// $lastname = $_POST["lastname"];
// $email = $_POST["email"];


include("../blog/database/data.php");
if(isset($_POST["register"])){
    if(empty($_POST["firstname"])){
        header("Location: forms.php?error= First Name is requird");
        return;
        die("firstname required");
    }
    if(empty($_POST["lastname"])){
        header("Location: forms.php?error= last Name is requird");
        return;
    }
    if(empty($_POST["email"])){
        header("Location: forms.php?error=  MUST BE AN VAILD EMAIL");
        return;
    }
    if(!preg_match('/[A-z]/', $_POST["password"])){
        die("must have captial letter");
    }

    $hashpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
 echo $hashpassword;
$firstname = mysqli_escape_string($joindata , $_POST['firstname']);
$lastname = mysqli_escape_string($joindata , $_POST['lastname']);
$email = mysqli_escape_string($joindata , $_POST['email']);


 $sqi = "INSERT INTO usernames (firstname, lastname, email, password)VALUE ('$firstname', '$lastname', '$email', '$hashpassword')";
 if (mysqli_query($joindata, $sqi)) {
   echo "Data saved to database";
   header('Location: tologin.php');
 }
    // echo "My password is". "<h2>$password</h2>" ."<br/>";
    // echo "My FirstName is". "<h2>$firstname</h2>" ."<br/>";
    // echo "My Last Name is". "<h2>$lastname</h2>" ."<br/>";
    // echo "My Email is". "<h2>$email</h2>" ."<br/>";
}
?>