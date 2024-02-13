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
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h1 class="ls-tight">Church Branches</h1>
                            </div>
                            <div class="col">
                                <div class="hstack justify-content-end">
                                    <a href="new-branch" class="btn d-inline-flex btn-sm btn-neutral"><span class="pe-2"><i class="bi bi-plus-circle"></i></span> <span>Add New Branch</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="table-responsive mb-10 mt-5">
                                            <table id="branches" class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Branch Name</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Pastor</th>
                                                        <th scope="col">Longitude</th>
                                                        <th scope="col">Latitude</th>
                                                        <th scope="col">Date Added</th>
                                                        <th scope="col" class="d-none d-xl-table-cell text-end">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 ps-1">
                                                                <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-geo-alt-fill"></i></div>
                                                                <div><span class="text-heading fw-bold">Abuja</span></div>
                                                            </div>
                                                        </td>
                                                        <td>1st Floor, The Kings' Complex, opposite...</td>
                                                        <td>Rev. Oje Ohiwerei</td>
                                                        <td>7.4215824</td>
                                                        <td>9.0892637</td>
                                                        <td>21 / 1 / 2024</td>
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                            <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-xs">
                                                                    <li><a class="dropdown-item" href="#" type="button" class="btn btn-neutral btn-sm" data-bs-toggle="modal" data-bs-target="#viewBranchModal"><i class="bi bi-eye me-2"></i>View</a></li>
                                                                    <li><a class="dropdown-item" href="edit-branch"><i class="bi bi-pencil-square me-2"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-trash3 me-2"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>