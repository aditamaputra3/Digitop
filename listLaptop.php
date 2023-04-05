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
    <h1>Daftar Laptop</h1>
    <div class="row">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-4 mb-4">
          <div class="card">
          <div class="d-flex justify-content-center">
            <img src="assets/display.png" width="300" height="220" img-thumbnail" alt="">
          </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['merek'] ?> <?php echo $row['tipe'] ?></h5>
              <p class="card-text">RAM: <?php echo $row['ram'] ?> - Processor : <?php echo $row['prosecor'] ?></p>
              <p class="card-text">Memory: <?php echo $row['memory'] ?> - Layar : <?php echo $row['layar'] ?> inch</p>
              <p class="card-text">Harga : Rp.<?php echo $row['harga'] ?></p>
              <a href="#" class="btn btn-success btn-sm" role="button">Masukan Keranjang</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <?php include 'scripts.php'; ?>
</body>

</html>
