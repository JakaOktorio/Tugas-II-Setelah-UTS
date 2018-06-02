<?php
session_start();
if (isset($_SESSION["salah"])) {
    if ($_SESSION["salah"] >= 100) {
        echo '<h1>AKUN ANDA DI BLOKIR</h1>';
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tugas Jaka Oktorio 5150411185</title>
        <link rel="icon" href="asset/images/Jaka Oktorio.jpg">
        <link href="asset/css/csslogin.css" rel="stylesheet" type="text/css"/>
        <link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css">
        <style>
            body{
                background-image: url("asset/images/HD2-16549-sunset-at-the-mountain-lake-1920x1200-nature-wallpaper.jpg");
                background-position: center;
            }
        </style>
        <script>
            window.setTimeout(function () {
                $(".alert").fadeTo(400, 0).slideUp(400, function () {
                    $(this).remove();
                });
            }, 4000);
            function showModalku() {
                $(document).ready(function () {
                    $('#ModalKu').modal('show')
                });
            }
        </script>
    </head>
    <body img src="asset/images/01-05-2013.jpg" alt="" >
        <form id="frm01" name="frm01" method="POST" action="login.php">
            <div class="vid-container">
                <div class="inner-container">
                    <div>
                        <?php
                        if (isset($_SESSION["salah"])) {
                            if ($_SESSION["salah"] < 4) {
                            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Anda salah ke-' . $_SESSION["salah"] . '...!!!! Jika Anda salah lebih dari 3 kali maka akun anda diblokir !!
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>';
                            }
                        }
                        ?>
                    </div>
                    <div class="box">
                        <center><img width="90" height="90" src="asset/images/person-1824144_960_720.png"></center>
                        <h1>Menu Login</h1>
                        <input class="form-control" name="inputusername" placeholder="Username" type="text" required="yes" id="InputUsername" autofocus="yes" autocomplete="no"/>
                        <input class="form-control" name="inputPassword" id="InputPassword" placeholder="Password" type="password" required="yes"/>
                        <button>Login</button>
                        <p>Not a member? <span>Sign Up</span></p> 
                        <p><span onclick="showModalku();" data-toggle="modal">   Help! </span></p>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel01">
                            Cara untuk mendapatkan Username atau Password 
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" arial-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Jika Anda belum mempunyai username dan password silahkan mendaftar terlebih dahulu atau hubungi admin. <br> Kontak Admin : 085727263940
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            TUTUP
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
