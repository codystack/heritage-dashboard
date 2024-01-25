<?php
    $page = "Profile";
    include "./components/header.php";
    include "./components/modals.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <header class="border-bottom mb-10">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12">
                                <h1 class="ls-tight">Account Settings</h1>
                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-flush gap-6 overflow-x border-0 mt-4">
                            <li class="nav-item"><a href="profile" class="nav-link">General</a></li>
                            <li class="nav-item"><a href="security" class="nav-link active">Password</a></li>
                            <li class="nav-item"><a href="admins" class="nav-link">Admins</a></li>
                        </ul>
                    </header>

                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <h4 class="fw-semibold mb-1">Password Reset</h4>
                            <p class="text-sm text-muted">By filling the form below, you will be able to change your password.</p>
                        </div>
                    </div>
                    
                    <hr class="my-6">
                    <form>
                        <div class="vstack gap-5">
                            <div class="row align-items-center g-3">
                                <div class="col-md-2"><label class="form-label mb-0">Current password</label></div>
                                <div class="col-md-6">
                                    <div class=""><input type="password" class="form-control"></div>
                                </div>
                            </div>
                            <div class="row align-items-center g-3">
                                <div class="col-md-2"><label class="form-label mb-0">New password</label></div>
                                <div class="col-md-6">
                                    <div class=""><input type="password" class="form-control"></div>
                                </div>
                            </div>
                            <div class="row align-items-center g-3">
                                <div class="col-md-2"><label class="form-label mb-0">Confirm password</label></div>
                                <div class="col-md-6">
                                    <div class=""><input type="password" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-6 ">
                        <div class="d-flex justify-content-end gap-2 mb-6">
                            <button type="submit" class="btn btn-lg btn-dark">Update Password</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>