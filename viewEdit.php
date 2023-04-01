<?php
include 'koneksi.php';

session_start();
    if(!isset($_SESSION["login"])){
      header("Location: login.php");
    }

$id_produk = $_GET['id_produk'];

$query = "SELECT * FROM produk WHERE id_produk='$id_produk'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>
<body>
  <?php include 'navbar2.php'; ?>
  <div class="container mt-4">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <form action="actionEdit.php" method="POST" class="row g-3">
        <h1 class="mt-5">Edit produk</h1>
        <div>
          <label for="id_produk" class="form-label">Id Produk</label>
          <div class="col-sm-6">
            <input name="id_produk" class="form-control" value="<?php echo $row['id_produk'] ?>" type="text" readonly />
          </div>
        </div>
        <div>
          <label for="nama_produk" class="form-label">Nama Produk</label>
          <div class="col-sm-6">
            <input name="nama_produk" class="form-control" value="<?php echo $row['nama_produk'] ?>" type="text" />
          </div>
        </div>
        <div>
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <div class="col-sm-6">
            <input name="deskripsi" class="form-control" value="<?php echo $row['deskripsi'] ?>" type="text" />
          </div>
        </div>
        <div>
          <label for="harga" class="form-label">Harga</label>
          <div class="col-sm-6">
            <input name="harga" class="form-control" value="<?php echo $row['harga'] ?>" type="text" />
          </div>
        </div>
        <div>
          <button action="submit" class="btn btn-dark">Submit</button>
        </div>
      </form>
    <?php endwhile; ?>
  </div>
</body>

</html>