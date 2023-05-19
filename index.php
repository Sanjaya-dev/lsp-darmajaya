<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Lembaga Sertifikasi Profesi Darmajaya</title>
    </head>
    <body>
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand logo" href="#"><img src="images/Logo-Darmajaya.png"></a>
                        <ul class="navbar-nav ms-auto menu">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">PROFIL</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">MEDIA INFORMASI</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">SERTIFIKASI</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">KONTAK KAMI</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/darmajaya_foto.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="images/about_us.jpg" class="d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>
        <!-- contain -->
        <main>
            <div class="row container" id="layanan">
                <div class="col-lg-6">
                    <img src="images/img_service.png">
                </div>
                <div class="col-lg-6 info_layanan">
                    <h3>Lembaga Sertifikasi Profesi Darmajaya</h3>
                    <p>
                        Adalah Lembaga Sertifikasi yang bergerak di dibidang pendidikan yang telah mendapatkan lisensi 
                        BNSP untuk melakukan sertifikasi untuk mahasiswa/i Institut Informatika dan Bisnis Darmajaya
                    </p>
                    <ul class="list_layanan">
                        <li>
                        <p><img class="icom_circle-check" src="images/icon_check.png" alt="check">Data Analaysis</p>
                        </li>
                        <li>
                        <p><img class="icom_circle-check" src="images/icon_check.png" alt="check">Membuat Website Sederhana</p>
                        </li>
                        <li>
                            <p><img class="icom_circle-check" src="images/icon_check.png" alt="check">Pelatihan Photoshop</p>
                        </li>
                        <li>
                            <p><img class="icom_circle-check" src="images/icon_check.png" alt="check">Desain Menggunakan Canva</p>
                        </li>
                        <li>
                            <p><img class="icom_circle-check" src="images/icon_check.png" alt="check">Digital Marketing</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- testimoni -->
            <div class="row container center" id="testimoni">
                <h2>Testimoni Lulusan</h2>
                <p>Pendapat mahasiswa setelah mendapatkan sertifikat</p>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card mb-3 mx-auto" style="max-width: 540px; background-color: #F1F3FF;">
                                <div class="row row_testimoni">
                                    <div class="col-lg-4">
                                        <img src="images/img_photo.png" class="img-fluid rounded-start img_testimoni" alt="...">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card-body testimonials">
                                            <img src="images/Rate.png" alt="">
                                            <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod”</p>
                                            <p class="card-text"><small class="text-muted">John Dee 32, Bromo</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-3 mx-auto " style="max-width: 540px; background-color: #F1F3FF;">
                                <div class="row g-0 row_testimoni">
                                    <div class="col-lg-4">
                                        <img src="images/img_photo 1.png" class="img-fluid rounded-start img_testimoni" alt="...">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card-body testimonials">
                                            <img src="images/Rate.png">
                                            <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod”</p>
                                            <p class="card-text"><small class="text-muted">John Dee 32, Bromo</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-3 mx-auto" style="max-width: 540px; background-color: #F1F3FF;">
                                <div class="row g-0 row_testimoni">
                                    <div class="col-md-4">
                                        <img src="images/img_photo 1.png" class="img-fluid rounded-start img_testimoni" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body testimonials">
                                            <img src="images/Rate.png" alt="">
                                            <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod”</p>
                                            <p class="card-text"><small class="text-muted">John Dee 32, Bromo</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                        <div class="button_testimoni">
                            <a type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" class="testimonial-media"><img
                                src="asset/Left button.png" alt=""></a>
                            <a type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" class="testimonial-media"><img
                                src="asset/Right button.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container" id="footer_contain">
                <div class="row">
                    <div class="col-lg-3">
                        <p>Copyright darmajaya 2023</p>
                        <img src="images/logo-darmajaya.png" style="width: 75px;">
                    </div>
                    <!-- social media -->
                    <div class="col-lg-3">
                        <div class="sosmed">
                            <p>Connect with us</p>
                            <a href=""><img src="asset/icon_facebook.png" alt=""></a>
                            <a href=""><img src="asset/icon_instagram.png" alt=""></a>
                            <a href=""><img src="asset/icon_twitter.png" alt=""></a>
                            <a href=""><img src="asset/icon_mail.png" alt=""></a>
                            <a href=""><img src="asset/icon_twitch.png" alt=""></a>
                        </div>
                    </div>
                    <!-- navigation -->
                    <div class="col-lg-1 nav_footer">
                        <a href="#Our_Services">Our Services</a>
                        <a href="#Why_Us">Why Us</a>
                        <a href="#Testimonial">Testimonial</a>
                        <a href="#FAQ">FAQ</a>
                    </div>
                    <!-- addres -->
                    <div class="col-lg-3 ">
                        <p>Jl. ZA. Pagar Alam No.93, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141</p>
                        <p>darmajaya_help@darmaja.ac.id</p>
                        <p>081-233-334-808</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>