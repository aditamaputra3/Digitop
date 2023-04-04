function showPass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

$(document).ready(function () {
  $('#myTable').DataTable();
});

$('#myTable').DataTable( {
  responsive: true
} );


