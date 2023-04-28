<!DOCTYPE html>
<html>
    <head>
        <title> Redlock-Web </title>
        <style>
            h1 {
                text-align:center;
            }
            table {
                border-style:solid;
                border-width:2px;
                border-color:black;
            }
            table.center {
                margin-left:auto;
                margin-right:auto;
            }
        </style>
    </head>
<body>
    <h1> Redlock-Web-2.0 </h1>
    <?php
        // Buka Koneksi ke database.
        $db = new PDO('sqlite:./Redlock.sqlite');

        // Melakukan query dan fetching dari database untuk disimpan ke dalam variable results.
        $results = $db->query('SELECT * From users')->fetchAll(PDO::FETCH_ASSOC);

        // Menampilkan Table 
        echo "<table class='center'; border='2'>
        <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        </tr>";
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . $row['ID'] . '</td>';
            echo '<td>' . $row['Nama'] . '</td>';
            echo '<td>' . $row['Alamat'] . '</td>';
            echo '<td>' . $row['Jabatan'] . '</td>';
            echo '</tr>';
        }
    ?>
</body>
</html>