<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input Aman</title>
</head>
<body>

<h2>Form Input Aman</h2>
<form method="POST" action="">
    <label for="input">Masukkan Input:</label>
    <input type="text" id="input" name="input" required><br><br>

    <input type="submit" value="Kirim">
</form>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "Input yang aman: " . $input . "<br>";
}
?>

</body>
</html>
