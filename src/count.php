<!DOCTYPE html>
<head><title> Count </title></head>
<?php
    // Buka Koneksi ke database.
    $db = new PDO('sqlite:./Redlock.sqlite');

    // Melakukan query dan fetching dari database untuk disimpan ke dalam variable results.
    $results = $db->query('SELECT COUNT(ID) AS Amount From users')->fetch(PDO::FETCH_ASSOC);

    // Menampilkan Table 
    echo '<font size=12px> Total jumlah user yang ada di database: ' . $results['Amount'] . '</font>';
?>
</td>
</html>