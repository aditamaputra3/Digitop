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
            <h2>Form Tambah Laptop</h2>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" name="id_laptop" id="id_laptop" class="form-control" placeholder=" " required>
                    <label for="id_laptop">Id Laptop</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="tipe" id="tipe" class="form-control" placeholder=" " required>
                    <label for="tipe">Tipe</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="merek" id="merek" class="form-control" placeholder=" " required>
                    <label for="merek">Merek Laptop</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="harga" id="harga" class="form-control" placeholder=" " required>
                    <label for="harga">Harga</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="layar" id="layar" class="form-control" placeholder=" " required>
                    <label for="layar">Layar</label>
                </div>
            </div>
                <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" name="ram" id="ram" class="form-control" placeholder=" " required>
                    <label for="ram">RAM</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="prosecor" id="prosecor" class="form-control" placeholder=" " required>
                    <label for="prosecor">Prosecor</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="memory" id="memory" class="form-control" placeholder=" " required>
                    <label for="memory">Memory</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" name="tanggal_rilis" id="tanggal_rilis" class="form-control" placeholder=" " required>
                    <label for="tanggal_rilis">Tanggal Rilis</label>
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