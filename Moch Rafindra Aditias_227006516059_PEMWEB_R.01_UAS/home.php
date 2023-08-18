<?php include('koneksi.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>WOODLANDGEMS</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;300;500&family=Roboto:wght@500;700;800;900&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg p-0 stiky-top" style="background-color: #ebedef">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" style="
            font-family: 'Roboto', sans-serif;
            font-size: 35px;
            font-weight: 700;
            color: #b8895e;
          " href="#">WoodlandGems</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="
            font-size: 20 px;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
          ">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="#about">ABOUT</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#service">SERVICE</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="index.php">CRUD</a>
          </li>
        </ul>
        <a href="" class="btn text-white py-4 px-lg-5 d-lg-block rounded-0" style="background-color: #b8895e">HOME
        </a>
      </div>
    </div>
  </nav>

  <section id="hero"
    class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center d-flex text-white">
    <main>
      <h4 style="font-size: 1.2rem">WELCOME TO WOODLANDGEMS</h4>
      <h1 style="font-size: 4rem">
        Reading, learning <br />& growing together
      </h1>
      <p class="text-center" style="font-size: 1.2rem">
        Explore knowledge and culture through various genres. Our library
        opens the door to inspiration and learning for everyone. Open the
        book, open your mind, and enjoy boundless stories and knowledge.
      </p>
      <button type="button" class="btn rounded-0 mx-3 text-white"
        style="width: 10em; height: 4em; background-color: #b8895e">
        <a class="nav-link" href="#look">READ MORE</a>
      </button>
      <button type="button" class="btn btn-light rounded-0 mx-3" style="width: 10em; height: 4em">
        <a class="nav-link" href="#list-book">BOOK LIST</a>
      </button>
    </main>
  </section>

  <section class="service text-center align-items-center d-flex" id="look">
    <div class="container">
      <section class="justify-content-around d-flex">
        <div class="d-flex flex-column mx-3">
          <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
              class="fa-solid fa-book"></i></span>
          <p>Complete Book</p>
        </div>

        <div class="d-flex flex-column mx-3">
          <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
              class="fa-brands fa-readme"></i></span>
          <p>Comfortable Read</p>
        </div>

        <div class="d-flex flex-column mx-3">
          <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
              class="fa-solid fa-tree"></i></span>
          <p>Nature Theme</p>
        </div>

        <div class="d-flex flex-column mx-3">
          <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
              class="fa-solid fa-user"></i></span>
          <p>Friendly service</p>
        </div>
      </section>
    </div>
  </section>

  <section class="about card mb-5 rounded-0" id="about">
    <div class="row g-0">
      <div class="col-md-6">
        <img src="img/3.jpg" class="img-fluid rounded-start" alt="..." />
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="title ard-body mx-5">
          <h5 class="card-title mb-5">About Us _</h5>
          <p class="card-text">
            We house captivating books for all ages, each page offers a new
            journey into an endless world of stories, guided by wonders,
            together we'll explore and create unforgettable tales, in a strong
            and caring community at Woodland Gems Library.
          </p>
          <p class="card-text">
            <small class="text-body-secondary">WoodlandGems Library</small>
          </p>
          <div class="icon d-flex">
            <div class="d-flex mx-3 align-items-center">
              <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
                  class="fa-solid fa-users"></i></span>
              <div class="caption d-flex flex-column">
                <p class="fs-2 fw-bold" style="color: #b8895e">100 M</p>
                <p class="fs-5">Happy Clients</p>
              </div>
            </div>

            <div class="d-flex mx-3 align-items-center">
              <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
                  class="fa-solid fa-mountain-sun"></i></span>
              <div class="caption d-flex flex-column">
                <p class="fs-2 fw-bold" style="color: #b8895e">100%</p>
                <p class="fs-5">Great view</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="list-book text-center" id="list-book">
    <h1 class="fw-bold mb-5">_Koleksi Buku_</h1>

    <div class="container">
      <div class="row">
        <?php
        $sql2 = "SELECT * FROM `book-library` ORDER BY id DESC";
        $q2 = mysqli_query($koneksi, $sql2);
        while ($r2 = mysqli_fetch_array($q2)) {
          $judulBuku = $r2['JUDUL BUKU'];
          $penulis = $r2['PENULIS'];
          $penerbit = $r2['PENERBIT'];
          $tahunTerbit = $r2['TAHUN TERBIT'];
          $gambar = $r2['GAMBAR'];
          ?>
          <div class="col-12 col-md-4 mb-5">
            <div class="card list-books" style="width: 18rem;">
              <img src="<?php echo $gambar ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $judulBuku ?>
                </h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <?php echo $penulis ?>
                </li>
                <li class="list-group-item">
                  <?php echo $penerbit ?>
                </li>
                <li class="list-group-item">
                  <?php echo $tahunTerbit ?>
                </li>
              </ul>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>

  <section id="service">
    <h1 class="fw-bold mb-5 text-center">_Our Service_</h1>
    <div class="container overflow-hidden text-center">
      <div class="row">
        <div class="col-12 col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="img/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Discover fascinating stories from curated wooden books. Explore a world of warmth and
                charm.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="img/7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Ponder beautiful poems and wise words, enjoy language like a forest's <br>rustling.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="img/6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Enhance creativity in the cozy wooden reading space, weave new<br> stories.</p>
            </div>
          </div>
        </div>


        <div class="col-12 col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="img/5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Embark on captivating adventures through travel books, explore the <br>world.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="img/526.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Transcend time with valuable historical books, history unfolds through wooden lens.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="img/someone.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Explore science and natural knowledge in tranquil wooden ambiance, wonders of
                discovery.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="why-choose-us card mb-5 rounded-0">
    <div class="row g-0">
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="title ard-body mx-5">
          <h5 class="card-title mb-5">Why Choose Us _</h5>
          <p class="card-text">
            By choosing a library with a natural theme, visitors support eco-friendly practices and raise awareness
            about the importance of preserving nature and sustainable resources like wood.
          </p>
          <p class="card-text">
            <small class="text-body-secondary">WoodlandGems Library</small>
          </p>
          <div class="icon d-flex">
            <div class="d-flex mx-3 align-items-center">
              <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
                  class="fa-solid fa-users"></i></span>
              <div class="caption d-flex flex-column">
                <p class="fs-2 fw-bold" style="color: #b8895e">100 M</p>
                <p class="fs-5">Happy Clients</p>
              </div>
            </div>

            <div class="d-flex mx-3 align-items-center">
              <span class="btn btn-link btn-floating btn-lg text-dark" data-mdb-ripple-color="dark"><i
                  class="fa-solid fa-mountain-sun"></i></span>
              <div class="caption d-flex flex-column">
                <p class="fs-2 fw-bold" style="color: #b8895e">100%</p>
                <p class="fs-5">Great view</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img src="img/8.jpg" class="img-fluid rounded-start " alt="..." />
      </div>
    </div>
  </section>





  <footer class="text-center text-white" style="background-color: #f1f1f1;" id="social-media">
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
      © 2023 Woodland Library
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

  <script src="book.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/bee2650818.js" crossorigin="anonymous"></script>

</body>

</html>