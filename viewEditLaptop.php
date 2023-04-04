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
        <div class="card">
          <div class="card-header">
            <h2 class="mt-3">Edit Laptop</h2>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-floating mb-3">
                  <input name="id_laptop" class="form-control" value="<?php echo $row['id_laptop'] ?>" type="text" readonly />
                  <label for="id_laptop" class="form-label">ID Laptop</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="tipe" class="form-control" value="<?php echo $row['tipe'] ?>" type="text" />
                  <label for="tipe" class="form-label">Tipe</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="merek" class="form-control" value="<?php echo $row['merek'] ?>" type="text" />
                  <label for="merek" class="form-label">Merek</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="harga" class="form-control" value="<?php echo $row['harga'] ?>" type="text" />
                  <label for="harga" class="form-label">Harga</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="layar" class="form-control" value="<?php echo $row['layar'] ?>" type="text" />
                  <label for="layar" class="form-label">Layar</label>
                </div>
              </div>
              <div class="col">
                <div class="form-floating mb-3">
                  <input name="ram" class="form-control" value="<?php echo $row['ram'] ?>" type="text" />
                  <label for="ram" class="form-label">RAM</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="prosecor" class="form-control" value="<?php echo $row['prosecor'] ?>" type="text" />
                  <label for="prosecor" class="form-label">Prosesor</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="memory" class="form-control" value="<?php echo $row['memory'] ?>" type="text" />
                  <label for="memory" class="form-label">Memory</label>
                </div>

                <div class="form-floating mb-3">
                  <input name="tanggal_rilis" class="form-control" value="<?php echo $row['tanggal_rilis'] ?>" type="date" />
                  <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
                </div>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>

      </form>
    <?php endwhile; ?>
  </div>
  <?php include 'scripts.php'; ?>
</body>

</html>