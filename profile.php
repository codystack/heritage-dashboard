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
                            <li class="nav-item"><a href="profile" class="nav-link active">General</a></li>
                            <li class="nav-item"><a href="security" class="nav-link">Password</a></li>
                            <li class="nav-item"><a href="admins" class="nav-link">Admins</a></li>
                        </ul>
                    </header>
                    <div class="row align-items-center">
                        <div class="col-md-2"><label class="form-label">Full Name</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="Joseph Dokhare" class="form-control" disabled></div>
                        </div>
                    </div>
                    <hr class="my-6">
                    <div class="row align-items-center">
                        <div class="col-md-2"><label class="form-label">Username</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="joseph" class="form-control" disabled></div>
                        </div>
                    </div>
                    <hr class="my-6">
                    <div class="row align-items-center">
                        <div class="col-md-2"><label class="form-label">Email</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="josephdokhare@gmail.com" class="form-control" disabled></div>
                        </div>
                    </div>
                    <hr class="my-6">
                    <div class="row align-items-center">
                        <div class="col-md-2"><label class="form-label">Designation</label></div>
                        <div class="col-md-8 col-xl-5">
                            <div class=""><input type="text" value="Super-Admin" class="form-control" disabled></div>
                        </div>
                    </div>
                    <hr class="my-6">
                    <div class="row align-items-center">
                        <div class="col-md-2"><label class="form-label">Avatar</label></div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-lg bg-warning rounded-circle text-white">
                                            <img src="assets/img/memoji/memoji-2.svg" alt="..."></a>
                                        <div class="hstack gap-2 ms-5">
                                            <label for="file_upload" class="btn btn-sm btn-neutral"><span>Upload</span> 
                                            <input type="file" name="file_upload" id="file_upload" class="visually-hidden"></label>
                                             <a href="#" class="btn d-inline-flex btn-sm btn-neutral text-danger">
                                                <span><i class="bi bi-trash"></i> </span>
                                                <span class="d-none d-sm-block me-2">Remove</span>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 ">
                    <div class="d-flex justify-content-end gap-2 mb-6">
                        <button type="submit" class="btn btn-lg btn-dark">Update Account</button>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>