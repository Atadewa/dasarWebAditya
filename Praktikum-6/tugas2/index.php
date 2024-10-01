<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link rel="stylesheet" href="style.css">
    <script src="../../Praktikum-5/praktik_jquery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#container").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <?php 
        $listMahasiswa = array (
            array("Atadewa", 24, "SIB 1A", "Malang"),
            array("Kurniawan", 30, "SIB 3D", "Jember"),
            array("Diana", 21, "TI 4C", "Banyuwangi"),
            array("Aditya", 19, "TI 2H", "Blitar"),
            array("Putri", 22, "TI 2F", "Blitar"),
            array("Intan", 31, "TI 3H", "Malang"),
            array("Gilang", 17, "TI 1C", "Tulungagung")
        );        

        $rerataNilai = 0;
        foreach ($listMahasiswa as $mahasiswa) {
            $rerataNilai += $mahasiswa[1];
        }
        $rerataNilai /= count($listMahasiswa);
    ?>

    <h1>Data Mahasiswa</h1>

    <button type="button" id="flip">Click to hide / show</button>
    <div id="container">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($listMahasiswa as $mahasiswa) {
                    echo "<tr>";
                    foreach ($mahasiswa as $mhs) {
                        echo "<td>" . $mhs . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h3>Rata-rata umur mahasiswa : <?php echo round($rerataNilai, 2)?></h3>
    </div>
    
</body>
</html>