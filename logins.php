

<?php 
if(isset($_POST[_("login")])) {
    // include("./database/data.php");
    include("./database/data.php");
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Use prepared statement to avoid SQL Injection
    // $sql = "SELECT * FROM usernames WHERE email=?";
    $sql = "SELECT * FROM usernames WHERE email=?";
    $stmt = mysqli_prepare($joindata, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $response = mysqli_stmt_get_result($stmt);

    $result = mysqli_fetch_assoc($response);

    if($result && password_verify($password, $result['password'])){
        // Assuming your result array has a password that is a hashed password
        // Always use hashed passwords and PHP's password hashing functions
        print_r($result); // In real world applications, avoid printing the entire result like this for security reasons.
    }else{
        echo "Account does not exist or invalid password.";
    }
    mysqli_stmt_close($stmt); // Close the prepared statement
}
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
        <form action="logins.php" method="POST" class="d-block">
            <input type="email" autocomplete="email" name="email" placeholder="Email" class="m-auto ">
            <input type="password" name="password" placeholder="Password" autocomplete="current-password">
            <div>
                <button name="login" class="btn btn-primary">Login</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>