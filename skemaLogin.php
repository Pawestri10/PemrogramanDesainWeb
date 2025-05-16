<?php
session_start();

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        if ($user === "pawestri" && $pass === "pawestri123") {
            $_SESSION["user"] = $user;
            echo "Login sukses";
        } else {
            throw new Exception("Login gagal: Username atau password salah.");
        }
    }
} catch (Exception $e) {
    echo "<p style='color:red'>" . $e->getMessage() . "</p>";
}
?>

<form method="post">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <input type="submit" value="Login">
</form>
