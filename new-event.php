<?php
    $page = "New Event";
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
                                    <h1 class="h4 ls-tight">Add New Event</h1>
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
                                        <label class="form-label">Title</label> 
                                        <input class="form-control" placeholder="Title" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Date of event</label> 
                                        <input class="form-control" placeholder="Date of event" type="date">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Time of event</label> 
                                        <input class="form-control" placeholder="Meeting day's" type="time">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Venue</label> 
                                        <input class="form-control" placeholder="Venue" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="flyerUpload">Upload Flyer</label>
                                        <input type="file" class="form-control" id="flyerUpload">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Event Type</label> 
                                        <select class="form-select">
                                            <option>Event</option>
                                            <option>Article</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label> 
                                        <textarea class="form-control" placeholder="Description" type="text"></textarea>
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" class="btn w-100 btn-lg btn-dark">Add New Event</button>
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