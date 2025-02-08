<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji Karyawan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Data Gaji Karyawan</h2>
        <table>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Gaji Pokok</th>
                <th>Jam Lembur</th>
                <th>Gaji Lembur per Jam</th>
                <th>Total Gaji</th>
                <th>Aksi</th>
            </tr>
            <?php
                include 'db.php';
                $sql = "SELECT k.nip, k.nama, k.jabatan, k.jenis_kelamin, g.gaji_pokok, g.jamlembur_karyawan, g.gaji_lembur_perjam, g.total_gaji FROM karyawan k INNER JOIN gaji_karyawan g ON k.nip = g.nip";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nip"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["jabatan"] . "</td>";
                        echo "<td>" . $row["jenis_kelamin"] . "</td>";
                        echo "<td>" . $row["gaji_pokok"] . "</td>";
                        echo "<td>" . $row["jamlembur_karyawan"] . "</td>";
                        echo "<td>" . $row["gaji_lembur_perjam"] . "</td>";
                        echo "<td>" . $row["total_gaji"] . "</td>";
                        echo "<td>
                                <a href='edit.php?nip=" . $row["nip"] . "'>Edit</a>
                                <a href='delete.php?nip=" . $row["nip"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No data found</td></tr>";
                }
                $conn->close();
            ?>
        </table>
        <a href="index.php">Kembali ke Form</a>
    </div>
</body>
</html>
