<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- my css -->
    <link rel="stylesheet" href="style.css" />

    <title>My Portofolio | Amelia Mutiara</title>
    <?php require_once('_css.php');?>
    <?php require_once('_js.php');?>
  </head>
  <body id="beranda">
    <?php require_once('_header.php');?>
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/galeri/b5.jpg" class="d-block w-100" alt="just" />
        </div>
        <div class="carousel-item">
          <img src="img/galeri/b1.jpg" class="d-block w-100" alt="be" />
        </div>
        <div class="carousel-item">
          <img src="img/galeri/b3.jpg" class="d-block w-100" alt="yourself" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- akhir carousel -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/pp.jpg" alt="Me" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Amelia Mutiara Anugrahati</h1>
      <p class="lead">Web Programmer | Novelist</p>
      <a href="https://github.com/AmeliaMutiara" target="_blank"><i class="bi bi-github" style="color: #f5f5f5"></i></a>
      <a href="https://www.instagram.com/onlyra_ia/" target="_blank"><i class="bi bi-instagram" style="color: #f5f5f5"></i></a>
      <a href="https://id.pinterest.com/ameliamutiaraa/" target="_blank"><i class="bi bi-pinterest" style="color: #f5f5f5"></i></a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f5f5f5"
          fill-opacity="1"
          d="M0,0L48,48C96,96,192,192,288,218.7C384,245,480,203,576,176C672,149,768,139,864,160C960,181,1056,235,1152,245.3C1248,256,1344,224,1392,208L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            Hello, my name is <b>Amelia Mutiara Anugrahati</b>. A student who will soon graduate this year, from SMKN 2 Karanganyar majoring in Software Engineering. During 3 years of studying Software Engineering, I found my new passion in programming, more precisely in web programming. I also honed my skills by attending several bootcamps and taking part in a Field Work Practice (PKL) program at a web programming-based software house as well. And until now I am still continuing to develop my skills in this field that I love. I also wrote several novels on the Wattpad reading platform.
          </div>
          <br />
          <div class="col-md-4">
             Apart from channeling my hobbies and expressing my imagination, writing novels is also a place of healing for me. Then I also like listening to songs via the Spotify music platform. Music has always been my loyal partner when coding or writing stories. So even if I get a bug in the program I wrote, or when writing a novel I experience writing block, as long as there's music at least it doesn't make me stick to that strung hahahaha. And I will continue to hone these two skills so that I can find more fun in them, keep spirit!
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row text-center mb-5">
          <div class="col">
            <h2>My Skills</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <img src="img/html.png" width="200" alt="">
              <p class="text-center">HTML5</p>
            </div>
            <div class="col-md-4">
              <img src="img/css.png" width="200" alt="">
              <p class="text-center">CSS3</p>
            </div>
            <div class="col-md-4">
              <img src="img/php.png" width="200" alt="">
              <p class="text-center">PHP</p>
            </div>
            <div class="col-md-4">
              <img src="img/javas.png" width="200" alt="">
              <p class="text-center">JavaScript</p>
            </div>
            <div class="col-md-4">
              <img src="img/sqlmy.png" width="200" alt="">
              <p class="text-center">SQL/MySQL</p>
            </div>
            <div class="col-md-4">
              <img src="img/codeigniterr.png" width="200" alt="">
              <p class="text-center">CodeIgniter</p>
            </div>
            <div class="col-md-4">
              <img src="img/laravel3.png" width="200" alt="">
              <p class="text-center">Laravel</p>
            </div>
            <div class="col-md-4">
              <img src="img/bs.png" width="200" alt="">
              <p class="text-center">Bootstrap 5</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#d6b49c"
          fill-opacity="1"
          d="M0,96L40,96C80,96,160,96,240,133.3C320,171,400,245,480,256C560,267,640,213,720,202.7C800,192,880,224,960,208C1040,192,1120,128,1200,128C1280,128,1360,192,1400,224L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir about -->

    <!-- Galeri -->
    <section id="porto">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Portofolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card up">
              <img src="img/project1.png" class="card-img-top " alt="Galeri 1" />
              <div class="card-body">
                <p class="card-text text-center">Aplikasi Web Pemesanan Makanan</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card up">
              <img src="img/project2.png" class="card-img-top" alt="Galeri 2" />
              <div class="card-body">
                <p class="card-text text-center">Aplikasi Web Perpustakaan Sekolah</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card up">
              <img src="img/project3.png" class="card-img-top" alt="Galeri 3" />
              <div class="card-body">
                <p class="card-text text-center">Aplikasi Web Kasir Swalayan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Certificate</h2>
          </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card up">
              <img src="img/gl.png" class="card-img-top" alt="Galeri 4" />
              <div class="card-body">
                <p class="card-text text-center">Program Kelas Industri Gamelab.id</p>
              </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card up">
              <img src="img/dicoding.png" class="card-img-top" alt="Galeri 4" />
              <div class="card-body">
                <p class="card-text text-center">Program IDCamp Digital Submit 2022</p>
              </div>
            </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f5f5f5" fill-opacity="1" d="M0,256L34.3,213.3C68.6,171,137,85,206,80C274.3,75,343,149,411,186.7C480,224,549,224,617,213.3C685.7,203,754,181,823,165.3C891.4,149,960,139,1029,122.7C1097.1,107,1166,85,1234,101.3C1302.9,117,1371,171,1406,197.3L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
      </svg>
    </section>
    <!-- Akhir Galeri -->
    
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Person</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-start">
          <ul style="text-decoration: none;">
            <li>0813-9068-2567 (Amel)</li>
            <li>meliatiaraa17@gmail.com</li>
          </ul>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#b36229"
          fill-opacity="1"
          d="M0,64L48,80C96,96,192,128,288,149.3C384,171,480,181,576,176C672,171,768,149,864,160C960,171,1056,213,1152,208C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <?php require_once('_footer.php');?>

    
  </body>
</html>
