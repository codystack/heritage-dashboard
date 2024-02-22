<?php
    $page = "Dashboard";
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
                                <h1 class="ls-tight">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row g-3">
                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge badge-lg icon icon-lg icon-shape text-lg rounded-circle bg-danger text-white flex-none" alt="..."><i class="bi bi-download"></i></span> <span class="fw-bold">App Download</span>
                                                </div>
                                                <div class="text-m fw-semibold mt-3">3.2893</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge badge-lg icon icon-lg icon-shape text-lg rounded-circle bg-danger text-white flex-none" alt="..."><i class="bi bi-book"></i></span> <span class="fw-bold">Devotional</span>
                                                </div>
                                                <?php
                                                $count_devotional = mysqli_query($conn, "SELECT id FROM tbl_devotionals");
                                                echo "<div class='text-m fw-semibold mt-3'>".mysqli_num_rows($count_devotional)."</div>";
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge badge-lg icon icon-lg icon-shape text-lg rounded-circle bg-danger text-white flex-none" alt="..."><i class="bi bi-stoplights"></i></span> <span class="fw-bold">Site Traffic</span>
                                                </div>
                                                <div class="text-m fw-semibold mt-3">3.2893</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge badge-lg icon icon-lg icon-shape text-lg rounded-circle bg-danger text-white flex-none" alt="..."><i class="bi bi-people"></i></span> <span class="fw-bold">App Users</span>
                                                </div>
                                                <div class="text-m fw-semibold mt-3">3.2893</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5>Devotionals</h5>
                                            </div>
                                            <div class="hstack align-items-center">
                                                <a href="devotionals" class="btn btn-sm btn-neutral d-none d-sm-inline-flex"> <span class="pe-2">View all</span><span> <i class="bi bi-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="table-responsive mb-10 mt-5">
                                            <table class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Topic</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">Scripture</th>
                                                        <th scope="col">Memory Verse</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $select_query = "SELECT * FROM tbl_devotionals ORDER BY dateCreated DESC LIMIT 10";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $id = $row['id'];
                                                                $topic = $row['topic'];
                                                                $scripture = $row['scripture'];
                                                                $memoryVerse = $row['memoryVerse'];
                                                                $dateCreated = $row['dateCreated'];
                                                                $date = strtotime($dateCreated);
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 ps-1">
                                                                <div class="d-xl-inline-flex icon icon-shape w-rem-8 h-rem-8 rounded-circle text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-book-fill"></i></div>
                                                                <div><span class="d-block text-heading fw-bold"><?php echo $topic; ?></span></div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo $scripture; ?></td>
                                                        <td><?php echo $memoryVerse; ?></td>
                                                        <td><?php echo date('j F Y', $date); ?></td>
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                            <button type="button" class="btn btn-sm btn-square btn-neutral w-rem-6 h-rem-6" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="bi bi-three-dots"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-xs">
                                                                    <li><a class="dropdown-item" href="#" type="button" class="btn btn-neutral btn-sm" data-bs-toggle="modal" data-bs-target="#viewDevotionalModal"><i class="bi bi-eye me-2"></i>View</a></li>
                                                                    <li><a class="dropdown-item" href="edit-devotional?id=<? echo $id; ?>"><i class="bi bi-pencil-square me-2"></i>Edit</a></li>
                                                                    <li><button type="button" class="dropdown-item" data-id="<? echo $id; ?>" onclick="confirmDevotionalDelete(this);"><i class="bi bi-trash3 me-2"></i>Delete</button></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- <div class="list-group list-group-flush">
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Bitcoin </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-warning">Pending</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
                                        </div> -->
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