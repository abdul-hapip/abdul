<?php
session_start(); // Mulai sesi
include("koneksi.php");

// Periksa apakah tombol "simpan" pada form edit ditekan
if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $karyawan_id = $_POST['karyawan_id'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];
    

    // Buat query untuk memperbarui data siswa
    $sql = "UPDATE karyawan SET
            karyawan_id='$karyawan_id',
            nama_karyawan='$nama_karyawan',
            posisi='$posisi',
            gaji='$gaji'
            WHERE karyawan_id=$karyawan_id";

    $query = mysqli_query($db, $sql);
    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data karyawan berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data karyawan gagal diperbarui!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>