<?php
include 'db.php';

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    // Hapus data dari tabel gaji_karyawan terlebih dahulu
    $sql1 = "DELETE FROM gaji_karyawan WHERE nip='$nip'";
    $sql2 = "DELETE FROM karyawan WHERE nip='$nip'";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo "<script>alert('Record deleted successfully'); window.location.href='view_data.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='view_data.php';</script>";
    }
}

$conn->close();
?>
