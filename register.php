<?php
    include "db.php";
    $pesan = "";

    if (isset($_POST['submitAkun'])) {
        $nama_lengkap = $_POST['nama'];
        $email = $_POST['email'];
        $password_raw = $_POST['password'];

        $password_hash = password_hash($password_raw, PASSWORD_DEFAULT);

        $query = "insert into user (nama_lengkap, email, password)
        values ('$nama_lengkap', '$email', '$password_hash')";
        $conn->query($query);
        $conn->close();

        $pesan = "Pendaftaran Berhasil, Silakan Login";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Registration Form</h2>

    <?php
        if ($pesan != "") {
            echo "<p style='color:green'>$pesan</p>";
        }
    ?>

    <form action="register.php" method="POST" >

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required> <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required> <br>

        <button type="submit" name="submitAkun">Submit</button> <br>

    </form>

    <a href="login.php">Pergi Kehalaman login</a>

</body>
</html>

