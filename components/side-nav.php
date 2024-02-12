<nav class="flex-none navbar navbar-vertical navbar-expand-lg navbar-light bg-transparent show vh-lg-100 px-0 py-2" id="sidebar">
    <div class="container-fluid px-3 px-md-4 px-lg-6">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-inline-block py-lg-1 mb-lg-5" href="dashboard">
            <img src="assets/img/LogoBlack.svg" class="logo-dark h-rem-20 h-rem-md-20 mx-auto" alt="Logo"> 
            <img src="assets/img/LogoLight.svg" class="logo-light h-rem-20 h-rem-md-20 mx-auto" alt="Logo">
        </a>
        <div class="navbar-user d-lg-none">
            <div class="dropdown">
                <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <div class="avatar avatar-sm text-bg-secondary rounded-circle">
                        <img src="<?php echo $_SESSION['picture']; ?>">
                    </div>
                    <div class="d-none d-sm-block ms-3"><span class="h6">Heritage</span></div>
                    <div class="d-none d-md-block ms-md-2"><i class="bi bi-chevron-down text-muted text-xs"></i></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div class="dropdown-header">
                        <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                        <span class="d-block text-heading fw-semibold"><?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?></span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="profile"><i class="bi bi-person-gear me-3"></i>Profile</a>
                    <a class="dropdown-item" href="settings"><i class="bi bi-gear me-3"></i>Settings </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left me-3"></i>Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse overflow-x-hidden" id="sidebarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Dashboard'){echo 'active';}?>" href="dashboard"><i class="bi bi-grid-1x2-fill"></i> <span>Overview</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span>
                    </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Events' || $page=='New Event'){echo 'active';}?>" href="#sidebar-events" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-events"><i class="bi bi-calendar-event-fill"></i> <span>Events</span> 
                    <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span></a>
                    <div class="collapse" id="sidebar-events">
                        <ul class="nav nav-sm flex-column mt-1">
                            <li class="nav-item"><a href="new-event" class="nav-link <?php if($page=='New Event'){echo 'fw-bold';}?>">Add New Event</a></li>
                            <li class="nav-item"><a href="events" class="nav-link <?php if($page=='Events'){echo 'fw-bold';}?>">View All Events</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Devotionals' || $page=='New Devotional'){echo 'active';}?>" href="#sidebar-devotionals" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-devotionals"><i class="bi bi-book-fill"></i> <span>Devotionals</span> 
                    <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span></a>
                    <div class="collapse" id="sidebar-devotionals">
                        <ul class="nav nav-sm flex-column mt-1">
                            <li class="nav-item"><a href="new-devotional" class="nav-link <?php if($page=='New Devotional'){echo 'fw-bold';}?>">Add New Devotional</a></li>
                            <li class="nav-item"><a href="devotionals" class="nav-link <?php if($page=='Devotionals'){echo 'fw-bold';}?>">View All Devotionals</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Categories' || $page=='New Category'){echo 'active';}?>" href="#sidebar-categories" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-categories"><i class="bi bi-bookmarks-fill"></i> <span>Categories</span> 
                    <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span></a>
                    <div class="collapse" id="sidebar-categories">
                        <ul class="nav nav-sm flex-column mt-1">
                            <li class="nav-item"><a href="new-category" class="nav-link <?php if($page=='New Category'){echo 'fw-bold';}?>">Add New Category</a></li>
                            <li class="nav-item"><a href="categories" class="nav-link <?php if($page=='Categories'){echo 'fw-bold';}?>">View All Categories</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Branches' || $page=='New Branch'){echo 'active';}?>" href="#sidebar-branches" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-branches"><i class="bi bi-diagram-3-fill"></i> <span>Church Branches</span> 
                    <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span></a>
                    <div class="collapse" id="sidebar-branches">
                        <ul class="nav nav-sm flex-column mt-1">
                            <li class="nav-item"><a href="new-branch" class="nav-link <?php if($page=='New Branch'){echo 'fw-bold';}?>">Add New Branch</a></li>
                            <li class="nav-item"><a href="branches" class="nav-link <?php if($page=='Branches'){echo 'fw-bold';}?>">View All Branches</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Pastors' || $page=='New Pastor'){echo 'active';}?>" href="#sidebar-pastors" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-pastors"><i class="bi bi-person-fill-check"></i> <span>Pastors</span> 
                    <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span></a>
                    <div class="collapse" id="sidebar-pastors">
                        <ul class="nav nav-sm flex-column mt-1">
                            <li class="nav-item"><a href="new-pastor" class="nav-link <?php if($page=='New Pastor'){echo 'fw-bold';}?>">Add New Pastor</a></li>
                            <li class="nav-item"><a href="pastors" class="nav-link <?php if($page=='Pastors'){echo 'fw-bold';}?>">View All Pastors</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Media' || $page=='New Media'){echo 'active';}?>" href="#sidebar-media" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-media"><i class="bi bi-collection-play-fill"></i> <span>Media Library</span> 
                    <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span></a>
                    <div class="collapse" id="sidebar-media">
                        <ul class="nav nav-sm flex-column mt-1">
                            <li class="nav-item"><a href="new-media" class="nav-link <?php if($page=='New Media'){echo 'fw-bold';}?>">Add New Media File</a></li>
                            <li class="nav-item"><a href="media" class="nav-link <?php if($page=='Media'){echo 'fw-bold';}?>">View All Media Files</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Quotes'){echo 'active';}?>" href="quotes"><i class="bi bi-quote"></i> <span>Quotes</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto d-none">🔥 Hot</span>
                    </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Users'){echo 'active';}?>" href="users"><i class="bi bi-people-fill"></i> <span>Users</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span>
                    </a>
                </li>
            </ul>

            <hr class="navbar-divider my-5 opacity-70">

            <ul class="navbar-nav">
                <li>
                    <span class="nav-link text-xs fw-semibold text-uppercase text-muted ls-wide">Resources</span>
                </li>
                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Profile'){echo 'active';}?>" href="profile"><i class="bi bi-person-fill-gear"></i> <span>Profile</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span>
                    </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Settings'){echo 'active';}?>" href="settings"><i class="bi bi-gear-fill"></i> <span>Settings</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto d-none">🔥 Hot</span>
                    </a>
                </li>
            </ul>

            <div class="mt-auto"></div>

            <div class="card bg-dark border-0 mt-5 mb-3">
                <div class="card-body">
                    <a href="logout" class="btn btn-sm btn-danger w-100">Log Out<i class="bi bi-box-arrow-left ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>