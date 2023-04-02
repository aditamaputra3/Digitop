<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body>
  <div class="container mt-5">
    <?php
    require 'actionRegister.php';

    if (isset($_POST["register"])) {
      $result = register($_POST);
      if ($result > 0) {
        echo '<div class="alert alert-danger" role="alert">
            Gagal menambahkan user baru: ' . mysqli_error($koneksi) . '
          </div>';
        header("Location:register.php");
        exit();
      } else {
        echo '<div class="alert alert-danger" role="alert">
            Gagal menambahkan user baru: ' . mysqli_error($koneksi) . '
          </div>';
        exit();
      }
    }
    ?>
    <div class="row align-items-center justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h1 class="text-center">Register</h1>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <div class="mb-3">
                <label for="password2" class="form-label">Re-Type Password</label>
                <input type="password" class="form-control" name="password2" id="password2" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example" required>
                  <option value="Tidak Menyebutkan" selected disabled>Jenis Kelamin</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                  <option value="Non-Binary">Non-Binary</option>
                  <option value="Lorem-Ipsum">Lorem Ipsum</option>
                </select>
              </div>
              <div class="mb-3 d-grid gap-2">
                <button type="submit" name="register" class="btn btn-dark">Register</button>
              </div>
              <div class="mb-3 text-center">
                Sudah Memiliki Akun? <a href="login.php" class="link-primary"> Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'scripts.php'; ?>
</body>

</html>