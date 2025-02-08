<?php
include 'db.php';

if (isset($_POST['update'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "UPDATE karyawan SET nama='$nama', jabatan='$jabatan', jenis_kelamin='$jenis_kelamin' WHERE nip='$nip'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully'); window.location.href='view_data.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location.href='edit.php?nip=$nip';</script>";
    }
}

$conn->close();
?>
