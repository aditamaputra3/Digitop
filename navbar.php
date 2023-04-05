<?php
include 'koneksi.php';
if (!isset($_SESSION)) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img width="140" src="assets/digitop.png" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-bs-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="listLaptop.php">Daftar Laptop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Shopee</a>
                        <a class="dropdown-item" href="#">Tokopedia</a>
                        <a class="dropdown-item" href="#">Lazada</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bahasa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">Indonesia</a>
                    </div>
                </li>
                <!-- Untuk Admin -->
                <?php if (isset($_SESSION["login"])) { ?>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="viewLaptop.php">Laptop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="viewSuplier.php">Supplier</a>
                        </li>
                    </ul>
            </ul>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo "Welcome!,  ", $_SESSION["username"]; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!--  -->
        <?php } else { ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">

                </li>
                <li class="nav-item">

                </li>
            </ul>
            </ul>
            <a class="btn btn-outline-light ms-5" href="login.php" role="button">Login</a>
            <a class="btn btn-outline-light ms-2" href="register.php" role="button">SignUp</a>
        <?php
                }
        ?>
        </div>
    </div>
</nav>