<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Array 2</title>
</head>
<body>
    <?php 
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' ];
    ?>

    <h2>Data Dosen</h2>
    <table border="1" cellpadding="10" cellspacing="10" style="border-collapse: collapse;">
        <thead>
            <tr style="background-color: #D8D9DA">
                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $Dosen['nama'];?></td>
                <td><?php echo $Dosen['domisili'];?></td>
                <td><?php echo $Dosen['jenis_kelamin'];?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>