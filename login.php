<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
// Pengumuman sederhana
echo "<div>";
echo "<strong>Pengumuman:</strong> Silakan login menggunakan username dan password Anda.";
echo "</div><br>";
?>
    <h2>Halaman Login</h2>
    <form action="process_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
<footer>
    <p>&copy; <?php echo date("Y"); ?> PENS.ltd. All rights reserved.</p>
</footer>
</body>
</html>