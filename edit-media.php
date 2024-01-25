<?php
    $page = "Media";
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
                                    <h1 class="h4 ls-tight">Edit Media</h1>
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
                                        <label class="form-label">Message Title</label> 
                                        <input class="form-control" placeholder="Message Title" value="The Power of Resurrection" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Preacher</label> 
                                        <input class="form-control" placeholder="Preacher" value="Rev. Oje Ohiwerei" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Category</label> 
                                        <input class="form-control" placeholder="Category" value="Righteousness" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Date</label> 
                                        <input class="form-control" placeholder="Date" value="21 / 1 / 2024" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label> 
                                        <textarea class="form-control" placeholder="Description" type="text">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Audio Link</label> 
                                        <input class="form-control" placeholder="Audio Link" value="https://www.boomplay.com/songs/137245595?srModel=COPYLINK&srList=WEB" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Youtube Link</label> 
                                        <input class="form-control" placeholder="Youtube Link" value="https://www.youtube.com/watch?v=vQaJrBzN1Ts" type="text">
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" class="btn w-100 btn-lg btn-dark">Update Media</button>
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