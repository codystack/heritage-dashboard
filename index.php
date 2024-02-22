<?php
    include "./auth/account.php";
?>
<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="color-scheme" content="dark light">
    <title>Login :: Heritage Assembly&trade;</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/utility.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/font/fonts.css">
    <link rel="icon" type="image/png" href="assets/img/HAFavicon.png">
    <script src="assets/js/satoshi.js"></script>
</head>

<body>
    <div class="row g-0 justify-content-center" style="background-color: #001b7d">
        <div class="col-md-6 col-lg-5 col-xl-5 position-fixed start-0 top-0 vh-100 overflow-y-hidden d-none d-lg-flex flex-lg-column" style="background-image: url(assets/img/loginbg.jpg); background-position: bottom; background-repeat: no-repeat; background-size: cover;">
            <div class="p-12 py-xl-10 px-xl-20">
                <a class="d-block" href="./">
                    <img src="assets/img/LogoLight.svg" class="h-rem-20" alt="Logo">
                </a>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7 offset-lg-5 min-vh-100 overflow-y-auto d-flex flex-column justify-content-center position-relative bg-body rounded-top-start-lg-4 border-start-lg shadow-soft-5">
            <div class="w-md-50 w-100 mx-auto px-10 px-md-0 py-10">
                <div class="mb-10">
                    <a class="d-inline-block d-lg-none mb-10" href="./">
                        <img src="assets/img/LogoBlack.svg" class="h-rem-20" alt="Logo">
                    </a>
                    <h1 class="ls-tight fw-bolder h2">Welcome back!</h1>
                    <div class="mt-3 text-sm text-muted"><span>Sign in to your account.</span></div>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="mb-5">
                        <label class="form-label" for="email">Username</label> 
                        <input type="text" class="form-control" required placeholder="Username" name="userName">
                    </div>
                    <div class="mb-5">
                        <div class="d-flex justify-content-between gap-2 mb-2 align-items-center">
                            <label class="form-label mb-0" for="password">Password</label> 
                            <!-- <a href="password-reset" class="text-sm text-muted text-primary-hover text-underline">Forgot password?</a> -->
                        </div>
                        <input type="password" class="form-control" required name="password" placeholder="**********" autocomplete="current-password">
                    </div>
                    <div class="mt-7">
                        <button type="submit" name="admin_login_btn" class="btn btn-dark w-100" onclick="this.classList.toggle('button--loading')">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
        if (isset($_SESSION['success_message']))
        {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['success_message']; ?>",
                icon: "success",
                showCancelButton: false,
                showConfirmButton: false,
                timer: 4000
            }).then(function() {
                    window.location = "dashboard";
                });
        </script>
    <?php
            unset($_SESSION['success_message']);
        }
    ?>

    <?php
        if (isset($_SESSION['error_message']))
        {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['error_message']; ?>",
                icon: "error",
                showCancelButton: false,
                showConfirmButton: false,
                timer: 4000
            }).then(function() {
                    window.location = "./";
                });
        </script>
    <?php
            unset($_SESSION['error_message']);
        }
    ?>
</body>

</html>