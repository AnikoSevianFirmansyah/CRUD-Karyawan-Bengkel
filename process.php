<?php
include 'db.php';

if (isset($_POST['create'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jamlembur_karyawan = $_POST['jamlembur_karyawan'];

    $sql1 = "INSERT INTO karyawan (nip, nama, jabatan, jenis_kelamin) VALUES ('$nip', '$nama', '$jabatan', '$jenis_kelamin')";
    $sql2 = "INSERT INTO gaji_karyawan (nip, jamlembur_karyawan) VALUES ('$nip', '$jamlembur_karyawan')";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo "<script>alert('New record created successfully'); window.location.href='view_data.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='index.php';</script>";
    }
}

$conn->close();
?>
