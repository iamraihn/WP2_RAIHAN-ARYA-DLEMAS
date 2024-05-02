<!DOCTYPE html>
<html>

<head>
    <title>Form Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css'); ?>">
</head>

<body>
    <div class="container">
        <h2>Form Input Data Siswa</h2>
        <?php echo form_open('siswa/process'); ?>
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        <label>NIS:</label><br>
        <input type="text" name="nis" required><br>
        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br>
        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" required><br>
        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir" required><br>
        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br>
        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br>
        <label>Agama:</label><br>
        <select name="agama" required>
            <option value="" disabled selected>Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br>
        <input type="submit" value="Submit">
        <?php echo form_close(); ?>
    </div>
</body>

</html>