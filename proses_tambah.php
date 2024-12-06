<?php
session_start(); // Mulai sesi
// Menghubungkan file ini dengan file konfigurasi database
include("koneksi.php");

// Mengecek apakah tombol 'simpan' telah ditekan
if (isset($_POST['simpan'])) {
    /* Mengambil nilai dari form input
       dan menyimpannya ke dalam variabel */
    $karyawan_id= $_POST['karyawan_id'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];
    

    // Menyusun query SQL untuk menambahkan data ke tabel 'produk'
    $sql = "INSERT INTO karyawan
            (karyawan_id, nama_karyawan, posisi, gaji)
            VALUES ('$karyawan_id', '$nama_karyawan', '$posisi', '$gaji')";

    // Menjalankan query dan menyimpan hasilnya dalam variabel $query
    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if ($query) {
        $_SESSION['notifikasi'] = "Data produk berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data produk gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>