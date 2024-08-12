<?php
if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo $message;
};

ob_start();

if (isset($_POST['login'])) {
    include('./database/data.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $password;
    $sql = "SELECT * FROM usernames WHERE email = '$email'";
    $response = mysqli_query($joindata, $sql);
    $result = mysqli_fetch_assoc($response); 
    print_r($result);  
    if ($result) {
        $password = password_verify($password, $result['password']);
        echo $password;
        if ($password) {

            print_r($result);
            session_start();
            $token = bin2hex(random_bytes(16));
            $token_expire = time() + (60 * 10);
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;
            $_SESSION['tokenExp'] = $token_expire;
            ob_end_clean();
            header("Location: dboard.php");
            exit;
        }else{
            echo "<br>Incorrect password";
        }
    }else{
        echo "<br>Account does not exist";
    }
    // mysqli_stmt_close($stmt);
}

// ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="tologin.php" method="POST" class="w-50 mx-auto border rounded p-3">
            <h2 class="fs-4 text-info">Log In to Your Account</h2>
            <input class="form-control p-2 my-3 text-center" name="email" placeholder="Email" type="email">
            <input class="form-control p-2 my-3 text-center" name="password" placeholder="Password" type="text">
            <div class="text-center">
            <button name="login" class="btn btn-primary m-auto w-25 fw-5">Login</button>
            </div>
            <div class="m-auto bg-successful text-center">
                <p>If you did don't have account with us <strong>please</strong></p>
                <a href="forms.php">Register</a>
            </div>
        </form>
    </main>
</body>
</html>