<?php
include 'koneksi.php';
session_start();
if(isset($_SESSION["login"])){
  $username = $_SESSION["username"]; // Mengambil nilai username dari session
} else {
  header("Location: login.php"); // Jika user belum login, kembalikan ke halaman login
  exit;
}

$id_suplier = $_GET['id_suplier'];

$query = "SELECT * FROM suplier WHERE id_suplier='$id_suplier'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container mt-4">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <form action="actionEditSuplier.php" method="POST" class="row g-3">
        <div class="card">
          <div class="card-header">
            <h2 class="mt-3">Edit Suplier</h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-floating mb-3">
                  <input name="id_suplier" class="form-control" value="<?php echo $row['id_suplier'] ?>" type="text" readonly />
                  <label for="id_suplier" class="form-label">ID Suplier</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="nama_suplier" class="form-control" value="<?php echo $row['nama_suplier'] ?>" type="text" />
                  <label for="nama_suplier" class="form-label">Nama Suplier</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="no_telp" class="form-control" value="<?php echo $row['no_telp'] ?>" type="text" />
                  <label for="no_telp" class="form-label">No. Telp</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="alamat" class="form-control" value="<?php echo $row['alamat'] ?>" type="text" />
                  <label for="alamat" class="form-label">Alamat</label>
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
      </form>
    <?php endwhile; ?>

    <?php include 'scripts.php'; ?>
</body>

</html>