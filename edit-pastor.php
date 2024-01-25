<?php
    $page = "Pastors";
    include "./components/header.php";
    include "./components/modals.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-6 pb-10">
                    <header class="py-10">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="d-flex align-items-center gap-4">
                                    <div><button type="button" onclick="history.back()" class="btn-close text-xs" aria-label="Close"></button></div>
                                    <div class="vr opacity-20 my-1"></div>
                                    <h1 class="h4 ls-tight">Edit Pastor's Information</h1>
                                </div>
                            </div>
                            <div class="col-auto d-none d-md-block">
                                <div class="hstack gap-2 justify-content-end">
                                    <button onclick="history.back()" class="btn d-inline-flex btn-sm btn-neutral"><span class="pe-2"><i class="bi bi-arrow-left"></i></span> <span>Go Back</span></button>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container">
                        <div class="card">
                            <div class="card-body pb-0">
                                <form class="row mb-5 mt-5">
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Pastor's Name</label> 
                                        <input class="form-control" placeholder="Pastor's name" value="Rev. Oje Ohiwerei" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Branches</label> 
                                        <select class="form-select">
                                            <option>Abuja</option>
                                            <option>Lagos</option>
                                            <option>Benin</option>
                                            <option>Port Harcourt</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Phone Number</label> 
                                        <input class="form-control" placeholder="Phone number" value="08162680095" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="pastorPhotograph">Upload Pastor's Photograph</label>
                                        <input type="file" class="form-control" id="pastorPhotograph">
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" class="btn w-100 btn-lg btn-dark">Update Pastor's Information</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>