<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS BESAR PROGRAM BASIS DATA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>TUGAS BESAR PROGRAM BASIS DATA</h1>
        <form action="process.php" method="POST">
            <label for="nip">NIP:</label>
            <input type="number" id="nip" name="nip" required>
            
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="jabatan">Jabatan:</label>
            <select id="jabatan" name="jabatan" required>
                <option value="Mekanik Senior">Mekanik Senior</option>
                <option value="Mekanik Junior">Mekanik Junior</option>
                <option value="Supervisor Bengkel">Supervisor Bengkel</option>
                <option value="Staf Administrasi">Staf Administrasi</option>
                <option value="Manajer Operasional">Manajer Operasional</option>
                <option value="Pengawas Kualitas">Pengawas Kualitas</option>
                <option value="Customer Service">Customer Service</option>
                <option value="Teknisi Diagnostik">Teknisi Diagnostik</option>
            </select>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="jamlembur_karyawan">Jam Lembur Karyawan:</label>
            <input type="number" id="jamlembur_karyawan" name="jamlembur_karyawan" required>

            <button type="submit" name="create">Create</button>
        </form>

        <a href="view_data.php">Lihat Data Gaji Karyawan</a>
    </div>
</body>
</html>
