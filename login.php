<?php
session_start();
include 'db.php';

if (isset($_POST["submitLogin"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $error = "";

    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $data_user = mysqli_fetch_assoc($result);

    if ($email ==  $data_user["email"]) {
        if (password_verify($password, $data_user["password"])) {
            $_SESSION["email"] = $email;
            $_SESSION["id"] = $data_user["id"];
            Header("Location: katalog_ikan.php");
            
            exit;
        } else {
            $error = "Password salah";
        }
    } else {
        $error = "Email salah";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>

    <?php
        if (isset($error) && $error != "") {
            echo "<p style='color:red'>$error</p>";
        }
    ?>  

    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="submitLogin">Masuk</button>
    </form>
</body>
</html>