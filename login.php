<?php require 'actionLogin.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

<div class="container mt-5">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="mb-3 d-flex justify-content-center">
            <h1>Login</h1>
          </div>
          <form action="actionLogin.php" method="post">
            <div class="mb-3">
              <input type="text" placeholder="Username" id="username" name="username" class="form-control" required/>
            </div>
            <div class="mb-3">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required />
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" onclick="showPass()" />
              <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
            <div class="mb-3 d-grid gap-2">
              <button action="submit" name="login" class="btn btn-dark">Login</button>
            </div>
            <div class="mb-3 d-flex justify-content-center">
              Belum Memiliki Akun? <a href="register.php" class="link-primary"> Register</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
  <?php if(isset($_GET["error"])) : ?>
    <div class="alert alert-danger alert-fixed fade show" role="alert">
      <?php echo $_GET["error"]; ?>
    </div>

    <script>
      // Menghilangkan alert setelah beberapa detik
      setTimeout(function() {
        $(".alert").alert('close');
      }, 3000);
    </script>

  <?php endif; ?>
  </div>
</div>

<?php include 'scripts.php'; ?>

</body>

</html>
