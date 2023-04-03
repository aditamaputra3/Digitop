<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <form class="row g-3" action="actionInputLaptop.php" method="post">
            <h1>Form Tambah Laptop</h1>
            <div class="col">
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="text" name="id_laptop" id="id_laptop" class="form-control" placeholder="Id Laptop" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="text" name="tipe" id="tipe" class="form-control" placeholder="Tipe" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="text" name="merek" id="merek" class="form-control" placeholder="Merek Laptop" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="text" name="layar" id="layar" class="form-control" placeholder="Layar" required />
                </div>
            </div>
            </div>
            <div class="col">
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="number" name="ram" id="ram" class="form-control" placeholder="RAM" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="text" name="prosecor" id="prosecor" class="form-control" placeholder="Prosecor" required />
                </div>
            </div>
        
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="text" name="memory" id="memory" class="form-control" placeholder="Memory" required />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-sm-10">
                    <input type="date" name="tanggal_rilis" id="tanggal_rilis" class="form-control" placeholder="Tanggal Rilis" required />
                </div>
            </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            
        </form>
    </div>
    <?php include 'scripts.php'; ?>
</body>

</html>