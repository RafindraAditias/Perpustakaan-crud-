<?php
include('koneksi.php');

$judulBuku = "";
$penulis = "";
$penerbit = "";
$tahunTerbit = "";
$gambar = "";
$sukses = "";
$error = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "delete from `book-library` where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id = $_GET['id'];
    $sql1 = "select * from `book-library` where id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $judulBuku = $r1['JUDUL BUKU'];
    $penulis = $r1['PENULIS'];
    $penerbit = $r1['PENERBIT'];
    $tahunTerbit = $r1['TAHUN TERBIT'];
    $gambar = $r1['GAMBAR'];

    if ($judulBuku == '') {
        $error = "Data tidak ditemukan";
    }
}


if (isset($_POST['simpan'])) { //untuk create
    $judulBuku = $_POST['judulBuku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahunTerbit = $_POST['tahunTerbit'];
    $gambar = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($source, $gambar);


    if ($judulBuku && $penulis && $penerbit && $tahunTerbit && $gambar) {
        if ($op == 'edit') {
            $sql1 = "update `book-library` set `JUDUL BUKU` = '$judulBuku', `PENULIS` = '$penulis', `PENERBIT` = '$penerbit', `TAHUN TERBIT` = '$tahunTerbit', `GAMBAR` = `$gambar` where id = '$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate";
            }
        } else {
            $sql1 = "INSERT INTO `book-library`(`JUDUL BUKU`, `PENULIS`, `PENERBIT`, `TAHUN TERBIT`, `GAMBAR`) values ('$judulBuku','$penulis','$penerbit','$tahunTerbit','$gambar')";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Berhasil memasukkan data baru";
            } else {
                $error = "Gagal memasukkan data";
            }
        }
    }

} else {
    $error = "Silakan masukkan semua data";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOODLANDGEMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;300;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">


    <style>
        .mx-auto {
            width: 1000px;
        }

        .card {
            margin-top: 10px;
        }

        .jfont {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <nav class="hero navbar navbar-expand-lg p-0 stiky-top"  style="background-color: #EBEDEF;">
        <div class="container-fluid">
            <a class="navbar-brand ms-5"
                style="font-family: 'Roboto', sans-serif; font-size: 35px; font-weight: 700; color: #b8895e ;"
                href="#">WooDY Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 20
            px; font-family: 'Roboto', sans-serif; font-weight: 500;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="home.php #about">ABOUT</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="home.php #service">SERVICE</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">CRUD</a>
                    </li>
                </ul>
            </div>
        </div>
        <a href="home.php" class="btn text-white py-4 px-lg-5 d-lg-block rounded-0" style="background-color:#b8895e">HOME
        </a>
    </nav>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header text-white" style="background-color: #b8895e">
                INPUT BUKU
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                    ?>
                    <div class="alert" style="background-color: rgba(0, 0, 0, 0.2); role="alert">
                        <?php echo $error ?>
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($sukses) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                    <?php
                    header("refresh:5;url=index.php");
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="judulBuku" class="col-sm-2 col-form-label">JUDUL BUKU</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judulBuku" name="judulBuku"
                                value="<?php echo $judulBuku ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="penulis" class="col-sm-2 col-form-label">PENULIS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penulis" name="penulis"
                                value="<?php echo $penulis ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="penerbit" class="col-sm-2 col-form-label">PENERBIT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="penerbit"
                                value="<?php echo $penerbit ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tahunTerbit" class="col-sm-2 col-form-label">TAHUN TERBIT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tahunTerbit" name="tahunTerbit"
                                value="<?php echo $tahunTerbit ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">GAMBAR</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="gambar" name="gambar"
                                value="<?php echo $tahunTerbit ?>">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-secondary" name="simpan">SIMPAN
                            DATA</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header text-white" style="background-color: #b8895e">
                DAFTAR BUKU PERPUSTAKAAN
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">JUDUL BUKU</th>
                            <th scope="col">PENULIS</th>
                            <th scope="col">PENERBIT</th>
                            <th scope="col">TAHUN TERBIT</th>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">UBAH</th>
                        </tr>
                    <tbody>
                        <?php
                        $sql2 = "Select * from `book-library` order by id desc";
                        $q2 = mysqli_query($koneksi, $sql2);
                        $urut = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id = $r2['id'];
                            $judulBuku = $r2['JUDUL BUKU'];
                            $penulis = $r2['PENULIS'];
                            $penerbit = $r2['PENERBIT'];
                            $tahunTerbit = $r2['TAHUN TERBIT'];
                            $gambar = $r2['GAMBAR'];

                            ?>

                            <tr>
                                <th scope="row">
                                    <?php echo $urut++ ?>
                                </th>
                                <td scope="row">
                                    <?php echo $judulBuku ?>
                                </td>
                                <td scope="row">
                                    <?php echo $penulis ?>
                                </td>
                                <td scope="row">
                                    <?php echo $penerbit ?>
                                </td>
                                <td scope="row">
                                    <?php echo $tahunTerbit ?>
                                </td>
                                <td scope="row">
                                    <?php echo $gambar ?>
                                </td>
                                <td scope="row">
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button"
                                            class="btn btn-warning">Edit</button></a>
                                    <a href="index.php?op=delete&id=<?php echo $id ?>"
                                        onclick="return confirm('Yakin mau delete data?')"><button type="button"
                                            class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="container-fluid p-0">
            <section class="p-0" style="background-color: #b8895e">
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fa-brands fa-facebook-f"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>

                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
            </section>
        </div>

        <div class="text-center text-dark p-2" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/bee2650818.js" crossorigin="anonymous"></script>

    <script src="book.js"></script>

</body>
</html>