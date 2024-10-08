<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input</title>
</head>
<body>

<h2>Form Input Aman</h2>
<form method="POST" action="">
    <label for="input">Masukkan Input:</label>
    <input type="text" id="input" name="input" required><br><br>

    <label for="email">Masukkan Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Kirim">
</form>
<br>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $email = $_POST['email'];

    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Input yang aman: " . $input . "<br>";
        echo "Email yang valid: " . $email;
    } else {
        echo "Email tidak valid. Silakan coba lagi.";
    }
}
?>

</body>
</html>
