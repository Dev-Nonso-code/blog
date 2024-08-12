<?php


session_start();
if (!isset($_SESSION['email']) || time() > $_SESSION["tokenExp"]) {
    session_destroy();
    header ("Location: tologin.php?message=Your Session has expired. Please Login Again");
}else {
    include('./database/data.php');
    $userEmail = $_SESSION['email'];
    
    $sql = "SELECT * FROM usernames WHERE email = '$userEmail'";
    $response = mysqli_query($joindata, $sql);
   
    $result = mysqli_fetch_assoc($response);
    print_r($result);
    if ($result) {
        $firstname = $result['firstname'];
        $lastname = $result['lastname'];
        $picture = $result['avatar'];
    }
}

if (isset($_POST['update'])) {
    $img_path = "images/";
    $file = $img_path. basename($_FILES['avatar']['name']);
    
    $query = "UPDATE usernames SET avatar = '$file' WHERE email = '$userEmail'";
    if (mysqli_query($joindata, $query)) {
        move_uploaded_file($_FILES['avatar']['tmp_name'], $file);
        echo "Profile Picture Updated Successfully";
        header("Location: dboard.php?message=Profile Picture Updated Successfully");
    }else {
        echo mysqli_error($joindata). "Cannot Upload Image";
    }
}


    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: tologin.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .div{
        height: 150px;
    }
    .body{
        height: 250px;
        position: absolute;
        top: 60px;
        left: 37%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction:column;
    }
    .img{
        width: 100%;
        height: 50px;
        position: relative;
        bottom: 60px;
    }
    .image{
        height: 100px;
        width: 25%;
    }
    .span{
        font-weight: 700;
    }
</style>
<body>
    <div class="bg-info border  div">
        <div class="border rounded w-25 bg-light body">
            <div class="d-flex align-items-center-justify-content-center img">
                <img src="<?php echo $picture ?>" alt="" class="mx-auto rounded-pill image">
            </div>
            <!-- <span class="py-2 d-flex align-items-center justify-content-center">Welcome To Your Dashboard, 
            </span> -->
            <!-- <span class="fs-3 text- d-flex align-items-center justify-content-center">Your Details are:</span> -->
            <!-- <div class="d-flex align-items-center justify-content-center"> -->
                <span class="mx-auto span"><?php echo ("$firstname"." "); echo($lastname)?></span>
                <span class="mx-auto"><?php echo($userEmail) ?> </span>
                <!-- <span>User Id: <?php echo ($result['Id']) ?></span> -->
                <span class="span">Super Admin: <?php echo $userEmail ?> </span>
            <!-- </div> -->
             <div class="d-flex align-items-center justify-content-evenly">
                <button class="btn border border-dark rounded-pill">My account</button>
                <form action="dboard.php" method="POST">
                    <button class="btn border rounded-pill btn-danger" name="logout">Sign Out</button>
                </form>
             </div>
        </div> 
        <form action="dboard.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="avatar">
            <button name="update" class="btn btn-success">Update</button>
        </form>
        <?php
            if ($_GET['message']) {
                $message = $_GET['message'];
                echo $message;
            } 
        ?>
    </div>
</body>
</html>