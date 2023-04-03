<?php
include 'koneksi.php';

$id_laptop = $_GET['id_laptop'];

$query = "SELECT * FROM laptop WHERE id_laptop='$id_laptop'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container mt-4">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <form action="actionEditLaptop.php" method="POST" class="row g-3">
        <h1 class="mt-3">Edit Laptop</h1>
        <div class="col">
          <div class="mb-3">
            <label for="id_laptop" class="form-label">ID Laptop</label>
            <div class="col-sm-10">
              <input name="id_laptop" class="form-control" value="<?php echo $row['id_laptop'] ?>" type="text" readonly />
            </div>
          </div>

          <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <div class="col-sm-10">
              <input name="tipe" class="form-control" value="<?php echo $row['tipe'] ?>" type="text" />
            </div>
          </div>

          <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <div class="col-sm-10">
              <input name="merek" class="form-control" value="<?php echo $row['merek'] ?>" type="text" />
            </div>
          </div>

          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <div class="col-sm-10">
              <input name="harga" class="form-control" value="<?php echo $row['harga'] ?>" type="text" />
            </div>
          </div>

          <div class="mb-3">
            <label for="layar" class="form-label">Layar</label>
            <div class="col-sm-10">
              <input name="layar" class="form-control" value="<?php echo $row['layar'] ?>" type="text" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label for="ram" class="form-label">RAM</label>
            <div class="col-sm-10">
              <input name="ram" class="form-control" value="<?php echo $row['ram'] ?>" type="text" />
            </div>
          </div>

          <div class="mb-3">
            <label for="prosecor" class="form-label">Prosesor</label>
            <div class="col-sm-10">
              <input name="prosecor" class="form-control" value="<?php echo $row['prosecor'] ?>" type="text" />
            </div>
          </div>

          <div class="mb-3">
            <label for="memory" class="form-label">Memory</label>
            <div class="col-sm-10">
              <input name="memory" class="form-control" value="<?php echo $row['memory'] ?>" type="text" />
            </div>
          </div>

          <div class="mb-3">
            <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
            <div class="col-sm-10">
              <input name="tanggal_rilis" class="form-control" value="<?php echo $row['tanggal_rilis'] ?>" type="text" />
            </div>
          </div>
        </div>
        <div>
          <button action="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    <?php endwhile; ?>
  </div>
  <?php include 'scripts.php'; ?>
</body>

</html>