<?php
// Termasuk file konfigurasi
include("koneksi.php");

// Mengambil ID siswa dari parameter URL
$id = $_GET['id'];

// Mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM karyawan WHERE karyawan_id = '$id'");
$karyawan= $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Karyawan</title>
</head>
<body>
    <h3>Edit Data Karyawan</h3>
    <form action="proses_edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="karyawan_id" value="<?php echo $karyawan['karyawan_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Karyawan</td>
                <td>
                    <input type="text" name="nama_karyawan" value="<?php echo $karyawan['nama_karyawan']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>
                    <input type="text" name="gaji" value="<?php echo $karyawan['gaji']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>
                    <select name="posisi" style="width: 100%" required>
                        <option value="" disabled>-- Pilih Salah Satu --</option>
                        <option value="Q" <?php echo ($karyawan['posisi'] == 'Q') ? 'selected' : ''; ?>>QA Engineer</option>
                        <option value="U" <?php echo ($karyawan['posisi'] == 'U') ? 'selected' : ''; ?>>UI/UX Designer</option>
                        <option value="P" <?php echo ($karyawan['posisi'] == 'P') ? 'selected' : ''; ?>>Project Manager</option>
                        <option value="F" <?php echo ($karyawan['posisi'] == 'F') ? 'selected' : ''; ?>>Frontend Developer</option>
                        <option value="B" <?php echo ($karyawan['posisi'] == 'B') ? 'selected' : ''; ?>>Backend Developer</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>