<?php 
include("./database/data.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main>
        <form method="POST" action="showforms.php" class="mx-auto shadow rounded form-group d-block w-75 py-3">
            <input name="firstname" type="text" placeholder="firstname" class="form-control w-50 mx-auto">
            <?php 
            if(isset($_GET['error'])){
                $message = $_GET['error'];
                echo "<p class=\"text-primary text-center\">$message</p>";
            }
            ?>
            <input name="lastname" type="text" placeholder="lastname" class="form-control w-50 mx-auto">
            <?php 
            if(isset($_GET['error'])){
                $message = $_GET['error'];
                echo "<p class=\"text-primary text-center\">$message</p>";
            }
            ?>
            <input name="email" type="text" placeholder="Email" class="form-control w-50 mx-auto">
            <?php 
            if(isset($_GET['error'])){
                $message = $_GET['error'];
                echo "<p class=\"text-primary text-center\">$message</p>";
            }
            ?>
            <input name="password" type="password" placeholder="password" class="form-control w-50 py-2 mx-auto">
            <input name="c-password" type="password" placeholder="comfirm-password" class="form-control w-50 py-2 mx-auto">
            <div class="text-center">
            <button name="register" class="btn btn-info">Register</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>