<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <h1>Data Mahasiswa Array Multidimensi</h1>
    
    <?php 
        $listMahasiswa = array (
            array("Aditya", 234172990, "Teknik Informatika", "aditya@gmail.com"),
            array("Atadewa", 234172701, "Sistem Informasi Bisnis", "atadewa@gmail.com"),
            array("Diana", 234252120, "Akuntansi", "diana@gmail.com"),
            array("Kurniawan", 234710440, "Administrasi Niaga", "kurniawan@gmail.com")
        );

        echo "<ul>";
        foreach ($listMahasiswa as $mahasiswa) {
            echo "<li>Nama : " . $mahasiswa[0] . "</li>";
            echo "<li>NIM : " . $mahasiswa[1] . "</li>";
            echo "<li>Jurusan : " . $mahasiswa[2] . "</li>";
            echo "<li>Email : " . $mahasiswa[3] . "</li> <br>";
        }
        echo "</ul>";
    ?>
</body>
</html>