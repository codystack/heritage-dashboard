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
                            <div class="col">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-sm btn-neutral d-none d-sm-inline-flex" data-bs-target="#depositLiquidityModal" data-bs-toggle="modal"><span class="pe-2"><i class="bi bi-plus-circle"></i> </span><span>Liquidity</span></button> 
                                    <a href="page-overview.html" class="btn d-inline-flex btn-sm btn-dark"><span>Trade</span></a>
                                </div>
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
                                                <div class="d-flex align-items-center gap-2"><img src="assets/img/crypto/icon/btc.svg" class="w-rem-5 flex-none" alt="..."> <a href="page-details.html" class="h6 stretched-link">BTC</a></div>
                                                <div class="text-sm fw-semibold mt-3">3.2893 USDT</div>
                                                <div class="d-flex align-items-center gap-2 mt-1 text-xs"><span class="badge badge-xs bg-success"><i class="bi bi-arrow-up-right"></i> </span><span>+13.7%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2"><img src="assets/img/crypto/icon/ada.svg" class="w-rem-5 flex-none" alt="..."> <a href="page-details.html" class="h6 stretched-link">ADA</a></div>
                                                <div class="text-sm fw-semibold mt-3">10.745,49 ADA</div>
                                                <div class="d-flex align-items-center gap-2 mt-1 text-xs"><span class="badge badge-xs bg-danger"><i class="bi bi-arrow-up-right"></i> </span><span>-3.2%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md col-sm-6">
                                        <div class="card border-primary-hover">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-center gap-2"><img src="assets/img/crypto/icon/eos.svg" class="w-rem-5 flex-none" alt="..."> <a href="page-details.html" class="h6 stretched-link">EOS</a></div>
                                                <div class="text-sm fw-semibold mt-3">7.890,00 EOS</div>
                                                <div class="d-flex align-items-center gap-2 mt-1 text-xs"><span class="badge badge-xs bg-danger"><i class="bi bi-arrow-up-right"></i> </span><span>-2.2%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <div class="card h-md-100 d-flex flex-column align-items-center justify-content-center py-4 bg-body-secondary bg-opacity-75 bg-opacity-100-hover"><a href="#cryptoModal" class="stretched-link text-body-secondary" data-bs-toggle="modal"><i class="bi bi-plus-lg"></i></a></div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5>Transaction History</h5>
                                            </div>
                                            <div class="hstack align-items-center"><a href="#" class="text-muted"><i class="bi bi-arrow-repeat"></i></a></div>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Bitcoin </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-warning">Pending</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Cardano </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-danger">Canceled</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Binance </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-success">Successful</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Bitcoin </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-warning">Pending</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Bitcoin </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-danger">Canceled</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Bitcoin </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-success">Successful</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary"><i class="bi bi-send-fill"></i></div>
                                                    <div class=""><span class="d-block text-heading text-sm fw-semibold">Bitcoin </span><span class="d-none d-sm-block text-muted text-xs">2 days ago</span></div>
                                                </div>
                                                <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                <div class="d-none d-md-block"><span class="badge bg-body-secondary text-success">Successful</span></div>
                                                <div class="text-end"><span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span><span class="d-block text-muted text-xs">+$10,930.90</span></div>
                                            </div>
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