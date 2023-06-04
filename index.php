<?php
    session_start();
    // di gunakan untuk mengakses semua isi file helper.php
    include_once("function/koneksi.php");
    include_once("function/helper.php");

    // echo $koneksi;
    $page = isset ($_GET['page']) ? $_GET['page']: false; //melakukan pengecekan apakah terdapat variable page, jika ada maka variable page akan berisi nilai

    $nama_lengkap = isset ($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap']: false;
    $level = isset ($_SESSION['level']) ? $_SESSION['level']: false;
    $user_id = isset ($_SESSION['user_id']) ? $_SESSION['user_id']: false;

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
                        <a class="navbar-brand logo" href="<?php echo BASE_URL; ?>"><img src="images/Logo-Darmajaya.png"></a>
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
                                <a class="nav-link" href="<?php echo BASE_URL."index.php?page=search"?>">SERTIFIKASI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">KONTAK KAMI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL."index.php?page=dashboard";?>">DASHBOARD</a>
                            </li>
                            <li class="nav-item">
                                <?php
                                    if($user_id){
                                        echo '
                                        <li class="nav-item dropdown">';
                                        echo '<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">';
                                                echo $nama_lengkap;
                                        echo'</a>';
                                        echo'<ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="'.BASE_URL.'index.php?page=dashboard">Dashboard</a></li>
                                                <li><a class="dropdown-item" href="'.BASE_URL.'index.php?page=logout">Logout</a></li>;
                                            </ul>
                                        </li>';                                
                                    }else{
                                        echo'<a class="nav-link" href="'.BASE_URL.'index.php?page=login">LOGIN</a>';
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
                if($page == false){
                    echo '
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
                    </div>';
                }

            ?>
        </header>
        <!-- contain -->
        <main>
        <?php
            $fileName = "$page.php";
            
            if(file_exists($fileName)){
                include_once($fileName); //jika ada maka akan memasukan file ke script php ini
            }else{
                include_once("main.php");
            }
        ?>
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