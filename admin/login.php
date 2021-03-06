
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Masuk SIG</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <img src="../assets/img/logo.jpg" alt="logo" width="100" class="shadow-light rounded-circle mb-5 mt-2">
                <h4 class="text-dark font-weight-normal">Selamat Datang di <br><span class="font-weight-bold">SIG Aksesibiliti Ibu dan Anak</span></h4>
                <p class="text-muted">Silakan masukan username dan password</p>
                <!-- cek pesan notifikasi -->
                <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "<div id='myalert' class='alert alert-danger alert-dismissable'>
                                    Username atau password salah
                                </div>";
                        }else if($_GET['pesan'] == "logout"){
                            echo "<div id='myalert' class='alert alert-success alert-dismissable'>
                                    Berhasil logout!
                                </div>";
                        }else if($_GET['pesan'] == "belum_login"){
                            echo "<div id='myalert' class='alert alert-warning alert-dismissable'>
                                    Login terlebih dahulu!
                                </div>";
                        }
                    }
                ?>
                <form method="POST" action="proses_login.php" class="needs-validation" novalidate="">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                    Please fill in your username
                    </div>
                </div>
                <div class="form-group">
                    <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                    please fill in your password
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                    </div>
                </div>

                <div class="form-group text-right">
                    <a href="auth-forgot-password.html" class="float-left mt-3">
                    Lupa password?
                    </a>
                    <button type="submit"  value="LOGIN" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                    Masuk
                    </button>
                </div>
                </form>

                <div class="text-center mt-5 text-small">
                Copyright &copy 2019;Made with 💙 by Titik Zulaiha
                </div>
            </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/img/unsplash/login-bg.jpg">
            <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                <div class="mb-5 pb-3">
                    <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                    <h5 class="font-weight-normal text-muted-transparent">Lampung, Indonesia</h5>
                </div>
                Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script>
        $('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
    </script>
</body>
</html>
