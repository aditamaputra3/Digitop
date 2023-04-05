<?php
include 'koneksi.php';

session_start();
if(isset($_SESSION["login"])){
  $username = $_SESSION["username"]; // Mengambil nilai username dari session
} else {
  header("Location: login.php"); // Jika user belum login, kembalikan ke halaman login
  exit;
}


$query = 'SELECT * FROM suplier';
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container mt-4">
    <h1>Data Suplier</h1>
    <div class="mb-5">
      <a href="tambahSuplier.php" class="btn btn-outline-primary" role="button">Tambah Data</a>
    </div>
    <table class="table table-striped responsive nowrap" style="width:100%" id="myTable">
      <thead>
        <tr>
          <th>Id Suplier</th>
          <th>Nama Suplier</th>
          <th>No.Telp</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['id_suplier'] ?> </td>
            <td><?php echo $row['nama_suplier'] ?> </td>
            <td><?php echo $row['no_telp'] ?> </td>
            <td><?php echo $row['alamat'] ?> </td>
            <td>
              <a href="viewEditSuplier.php?id_suplier=<?php echo $row['id_suplier']; ?>" class="btn btn-warning btn-sm" role="button">Edit</a>
              <a href="actionDeleteSuplier.php?id_suplier=<?php echo $row['id_suplier']; ?>" onclick="return confirm('Data ini akan dihapus?')" role="button" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <?php include 'scripts.php'; ?>
</body>

</html>