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
        if ($result) {
          echo '<div class="alert alert-success" role="alert">
              Berhasil menambahkan user baru.
            </div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">
              Gagal menambahkan user baru: ' . mysqli_error($koneksi) . '
            </div>';
        }
      }
    }
    ?>

    <div class="row align-items-center justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Register</h2>
            <form action="" method="post">
              <div class="mb-3 form-floating">
                <input type="text" class="form-control form-control-sm" name="username" id="username" placeholder="Username" required>
                <label for="username" class="form-label">Username</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Password" required>
                <label for="password" class="form-label">Password</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="password" class="form-control form-control-sm" name="password2" id="password2" placeholder="Re-Type Password" required>
                <label for="password2" class="form-label">Re-Type Password</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="text" class="form-control form-control-sm" name="alamat" id="alamat" placeholder="Alamat" required>
                <label for="alamat" class="form-label">Alamat</label>
              </div>
              <div class="mb-3 form-floating">
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example" required>
                  <option value="Tidak Menyebutkan" selected disabled>Pilih Jenis Kelamin</option>
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                  <option value="Non-Binary">Non-Binary</option>
                  <option value="Lorem-Ipsum">Lorem Ipsum</option>
                </select>
                <label for="jenis_kelamin" class="form-label form-label-sm">Jenis Kelamin</label>
              </div>
              <div class="mb-3 d-grid gap-2">
                <button type="submit" name="register" class="btn btn-dark">Register</button>
                <a href="index.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
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