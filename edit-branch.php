<?php
    $page = "Branches";
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
                                    <h1 class="h4 ls-tight">Edit Abuja Branch</h1>
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
                                    <div class="mb-3">
                                        <label class="form-label">Branch Name</label> 
                                        <input class="form-control" placeholder="Branch name" value="Abuja" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">1st Meeting Day's</label> 
                                        <input class="form-control" placeholder="Meeting day's" value="Sundays" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">1st Meeting Activity</label> 
                                        <input class="form-control" placeholder="1st Activity" value="Wordship Service" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">1st Meeting Time</label> 
                                        <input class="form-control" placeholder="1st Activity" value="8:30am" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">2nd Meeting Day's</label> 
                                        <input class="form-control" placeholder="Meeting day's" value="Wednesdays" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">2nd Meeting Activity</label> 
                                        <input class="form-control" placeholder="2nd Activity" value="School of the World" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">2nd Meeting Time</label> 
                                        <input class="form-control" placeholder="2nd Activity" value="5:30pm" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">3rd Meeting Day's</label> 
                                        <input class="form-control" placeholder="Meeting day's" value="Fridays" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">3rd Meeting Activity</label> 
                                        <input class="form-control" placeholder="1st Activity" value="Prayer Meeting" type="text">
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label">3rd Meeting Time</label> 
                                        <input class="form-control" placeholder="1st Activity" value="5:30am" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label> 
                                        <textarea class="form-control" placeholder="Address" row="5" type="text">1st Floor, The Kings' Complex, opposite NAF Conference Centre, Ahmadu Bello Way, Jahi, Abuja</textarea>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Longitude</label> 
                                        <input class="form-control" placeholder="Longitude" value="7.4215824" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Latitude</label> 
                                        <input class="form-control" placeholder="Latitude" value="9.0892637" type="text">
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" class="btn w-100 btn-lg btn-dark">Update Branch</button>
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