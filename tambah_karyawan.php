<!DOCTYPE html>
<html>
    <head>
        <title>Data Karyawan</title>
    </head>
    <body>
        <h3>Tambah Data karyawan</h3>
        <form action="proses_tambah.php" method="POST">
        <table border="0">
        <tr>
        <td>Nama Karyawan</td>
            <td><input type="text" name="nama_karyawan" required></td>
        </tr>
        <tr>
        <td>Gaji</td>
        <td><input type="text" name="gaji" required></td>
        </tr>
        <tr>
                <td>Posisi</td>
                <td>
                <select name="posisi" style="width: 100%" required>
                  <option value="" selected disabled>
                    -- Pilih salah Satu --
                  </option>
                  <option value="Q">QA Engineer</option>
                  <option value="U">UI/UX Designer</option>
                  <option value="P">Project Manage</option>
                  <option value="F">Frontend Developer</option>
                  <option value="B">Backend Developer</option>
                </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
    </body>
</html>