<?php
require 'actionRegister.php';

if (isset($_POST["register"])) {
  if (
    register($_POST) >
    0
  ) {
    echo "
<script>
  alert('User baru berhasil ditambahkan);
</script>
";
    header("Location:login.php");
  } else {
    echo mysqli_error($koneksi);
  }
} ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col">
        <img width="500" src="assets/register.png" alt="gambar" />
      </div>
      <div class="col">
        <div class="mb-3 d-flex justify-content-center">
          <h1>Register</h1>
          <form action="" method="post">
        </div>
        <div class="mb-3">
          <input placeholder="Username" type="text" class="form-control" name="username" id="username" required />
        </div>
        <div class="mb-3">
          <input placeholder="Password" type="password" class="form-control" name="password" id="password" required />
        </div>
        <div class="mb-3">
          <input placeholder="Re-Type Password" type="password" class="form-control" name="password2" id="password2" required />
        </div>
        <div class="mb-3">
          <input placeholder="Alamat" type="text" class="form-control" name="alamat" id="alamat" required />
        </div>
        <div class="mb-3">
          <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example" required>
            <option value="Tidak Menyebutkan" selected>Jenis Kelamin</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
            <option value="Non-Binary">Non-Binary</option>
            <option value="Lorem-Ipsum">Lorem Ipsum</option>
          </select>
        </div>
        <div class="mb-3 d-grid gap-2">
          <button action="submit" name="register" class="btn btn-dark">Register</button>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            Sudah Memiliki Akun? <a href="login.php" class="link-primary"> Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="sweetalert.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>