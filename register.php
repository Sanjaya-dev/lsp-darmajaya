<?php
    // if($user_id){
    //     header("location :".BASE_URL);
    // }
?>


        <main>
            <?php
                $notif = isset($_GET["notif"]) ? $_GET["notif"] : false;
                $nama_lengkap = isset($_GET["nama_lengkap"]) ? $_GET["nama_lengkap"] : false;
                $email = isset($_GET["email"]) ? $_GET["email"] : false;
                $nomer_telphone = isset($_GET["nomer_telphone"]) ? $_GET["nomer_telphone"] : false;

                if($notif == "requer"){
                    echo "<div>Maaf, kamu harus melengkapi form dibawah ini</div>";
                }elseif($notif == "password"){
                    echo "<div>Maaf, password yang anda masukan tidak sama</div>";
                }elseif($notif == "email"){
                    echo "<div>Maaf, email yang anda masukan sudah terdaftar</div>";
                }
                // define('BASE_URL', 'http://localhost/lsp-darmajaya/proses_register.php');
            ?>
        
            <div id="login">
                <h1>Register</h1>
                <p>Sudah punya akun ? <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a></p>
                <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="text" name="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomer Telphone</label>
                        <input type="text" name="nomer_telphone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Npm</label>
                        <input type="text" name="npm" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ktm</label>
                        <input type="file" name="ktm" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Re-Password</label>
                        <input type="password" name="re_password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </main>