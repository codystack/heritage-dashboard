<?php
    $page = "Devotionals";
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
                                    <h1 class="h4 ls-tight">Edit Devotional</h1>
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
                                        <label class="form-label">Topic</label> 
                                        <input class="form-control" placeholder="Topic" value="Reality Check" type="text">
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label">Scripture</label> 
                                        <input class="form-control" placeholder="Scripture" value="Luke 3:10 ERV" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Memory verse</label> 
                                        <input class="form-control" placeholder="Meeting day's" value="The People asked John, “What should we do?”" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">1st Paragraph</label> 
                                        <textarea class="form-control" placeholder="1st Paragraph" row="7" type="text">John had just finished rebuking the Pharisees and Sadducees who had come for baptism, because he knew that they were only coming in order to look pious in the eyes of the people. Others, confused by his reaction, asked what they should do.</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">2nd Paragraph</label> 
                                        <textarea class="form-control" placeholder="2nd Paragraph" row="7" type="text">Many times we need to ask ourselves why we do the things we do, and why we want the things we want. Why do I want to change? Is it because I have been caught doing something wrong, and my reputation is now on the line? Or is it because I am tired of living a lie? Sometimes we confuse feelings of guilt and shame with repentance, but they are not the same. Repentance is not just a feeling, it is an action. True repentance demands that you do something about your desire to change.</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">3rd Paragraph</label> 
                                        <textarea class="form-control" placeholder="3rd Paragraph" row="7" type="text">Luke 3:8 says, “Bring forth fruits worthy of repentance…” The meaning of the word ‘worthy’ as used here means something of equal value or weight. Hence, when he said “bring forth fruits worthy of repentance”, he meant that we should bring forth fruits that are equal to our repentance, that is, actions that prove that we have really changed. Repentance is only complete, and can only bring the healing we desire, when there is proof of change.</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Prayer</label> 
                                        <textarea class="form-control" placeholder="Prayer" row="7" type="text">Father God, I thank you for the grace that is available through our Lord Jesus Christ. I confess all my shortcomings before you, and ask your forgiveness. I ask for wisdom, strength and courage to truly change my ways. I also ask that you restore healing and peace to my relationships and every area of my life that I have damaged through my sinful ways, I pray in the Name of Jesus Christ, Amen.</textarea>
                                    </div>
                                    <div class="mt-5 mb-10">
                                        <button type="submit" class="btn w-100 btn-lg btn-dark">Update Devotional</button>
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