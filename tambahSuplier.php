<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION["login"])) {
    $username = $_SESSION["username"]; // Mengambil nilai username dari session
} else {
    header("Location: login.php"); // Jika user belum login, kembalikan ke halaman login
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <form class="row g-3" action="actionInputSuplier.php" method="post">
            <h2>Form Tambah Suplier</h2>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" name="id_suplier" id="id_suplier" class="form-control" placeholder=" " required>
                    <label for="id_suplier">Id Suplier</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="nama_suplier" id="nama_suplier" class="form-control" placeholder=" " required>
                    <label for="nama_suplier">Nama Suplier</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder=" " required>
                    <label for="no_telp">Nomor Telepon</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder=" " required>
                    <label for="alamat">Alamat</label>
                </div>

            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>
    <?php include 'scripts.php'; ?>
</body>

</html>