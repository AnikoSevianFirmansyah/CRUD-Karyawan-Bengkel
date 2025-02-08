<?php
include 'db.php';

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];
    $sql = "SELECT * FROM karyawan WHERE nip = $nip";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Karyawan</h1>
        <form action="update.php" method="POST">
            <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>">
            
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            
            <label for="jabatan">Jabatan:</label>
            <select id="jabatan" name="jabatan" required>
                <option value="Mekanik Senior" <?php if ($row['jabatan'] == 'Mekanik Senior') echo 'selected'; ?>>Mekanik Senior</option>
                <option value="Mekanik Junior" <?php if ($row['jabatan'] == 'Mekanik Junior') echo 'selected'; ?>>Mekanik Junior</option>
                <option value="Supervisor Bengkel" <?php if ($row['jabatan'] == 'Supervisor Bengkel') echo 'selected'; ?>>Supervisor Bengkel</option>
                <option value="Staf Administrasi" <?php if ($row['jabatan'] == 'Staf Administrasi') echo 'selected'; ?>>Staf Administrasi</option>
                <option value="Manajer Operasional" <?php if ($row['jabatan'] == 'Manajer Operasional') echo 'selected'; ?>>Manajer Operasional</option>
                <option value="Pengawas Kualitas" <?php if ($row['jabatan'] == 'Pengawas Kualitas') echo 'selected'; ?>>Pengawas Kualitas</option>
                <option value="Customer Service" <?php if ($row['jabatan'] == 'Customer Service') echo 'selected'; ?>>Customer Service</option>
                <option value="Teknisi Diagnostik" <?php if ($row['jabatan'] == 'Teknisi Diagnostik') echo 'selected'; ?>>Teknisi Diagnostik</option>
            </select>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" <?php if ($row['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
            </select>

            <button type="submit" name="update">Update</button>
        </form>
        <a href="view_data.php">Kembali ke Tabel</a>
    </div>
</body>
</html>
    