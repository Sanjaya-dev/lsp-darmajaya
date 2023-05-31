<?php
     if($user_id){
        header("location:".BASE_URL);
    }
?>
        <main>
            <div id="login">
                <h1>Masuk</h1>
                <p>Belum punya akun ? <a href="<?php echo BASE_URL."index.php?page=register";?>">Daftar disini</a></p>
                <?php
                    // pengecekan variabel notif apakah ada
                    $notif = isset($_GET["notif"]) ? $_GET["notif"] : false;
                    

                    if($notif == true){
                        echo "<div class='notif'>Maaf, email atau password yang anda masukan salah</div>";
                    }
                ?>
                <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="text" name="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Masuk">
                    </div>
                </form>
            </div>
        </main>