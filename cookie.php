<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    setcookie("username", $username, time() + 3600); // 1 jam
    echo "Cookie disimpan!";
}
?>
<form method="post">
    Username: <input type="text" name="username">
    <input type="submit" value="Login">
</form>

<?php
if (isset($_COOKIE["username"])) {
    echo "<p>Selamat datang, " . $_COOKIE["username"] . "!</p>";
}
?>
