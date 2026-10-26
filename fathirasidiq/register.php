<?php
require_once 'koneksi.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        // Enkripsi password menggunakan Bcrypt (aman untuk tugas keamanan)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "INSERT INTO users (username, password) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

        if (mysqli_stmt_execute($stmt)) {
            $message = "Registrasi berhasil! Silakan <a href='login.php'>Login</a>.";
        } else {
            $message = "Error: Username sudah terdaftar atau terjadi kesalahan.";
        }
        mysqli_stmt_close($stmt);
    } else {
        $message = "Semua kolom wajib diisi!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - UTS Keamanan Web</title>
</head>
<body>
    <h2>Form Register</h2>
    <?php if (!empty($message)) echo "<p>$message</p>"; ?>
    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Register</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>