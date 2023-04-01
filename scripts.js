function login() {
  Swal.fire("Pesan", "Login Berhasil!", "success").then(function () {
    window.location.href = "index.php";
  });
}

function register() {
  Swal.fire("Pesan", "Register Berhasil!", "success").then(function () {
    window.location.href = "login.html";
  });
}

function showPass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


