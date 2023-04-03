<?php
include 'koneksi.php';

$query = 'SELECT * FROM laptop';
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container mt-4">
    <h1>Data Laptop</h1>
    <div class="mb-5">
      <a href="tambahLaptop.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
    <table class="table table-striped dt-responsive nowrap" style="width:100%" id="example">
      <thead>
        <tr>
          <th>Id Laptop</th>
          <th>Tipe</th>
          <th>Merek</th>
          <th>Harga</th>
          <th>Layar</th>
          <th>RAM</th>
          <th>Prosecor</th>
          <th>Memory</th>
          <th>Tanggal Rilis</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['id_laptop'] ?> </td>
            <td><?php echo $row['tipe'] ?> </td>
            <td><?php echo $row['merek'] ?> </td>
            <td><?php echo $row['harga'] ?> </td>
            <td><?php echo $row['layar'] ?> </td>
            <td><?php echo $row['ram'] ?> </td>
            <td><?php echo $row['prosecor'] ?> </td>
            <td><?php echo $row['memory'] ?> </td>
            <td><?php echo $row['tanggal_rilis'] ?> </td>
            <td>
              <a href="viewEditLaptop.php?id_laptop=<?php echo $row['id_laptop']; ?>" class="btn btn-warning btn-sm" role="button">Edit</a>
              <a href="actionDeleteLaptop.php?id_laptop=<?php echo $row['id_laptop']; ?>" onclick="return confirm('Data ini akan dihapus?')" role="button" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <?php include 'scripts.php'; ?>
</body>

</html>