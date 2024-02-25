<div class="d-none d-lg-flex py-3">
    <div class="hstack flex-fill justify-content-end flex-nowrap gap-6 ms-auto px-6 px-xxl-8">
        <div class="dropdown">
            <a href="#" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-sun-fill"></i>
            </a>
            <div class="dropdown-menu">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">Light</button> 
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">Dark</button>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">System</button>
            </div>
        </div>
        <div class="dropdown">
            <a class="avatar avatar-sm text-bg-dark rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <img src="<?php echo $_SESSION['picture']; ?>">
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <div class="dropdown-header">
                    <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                    <span class="d-block text-heading fw-semibold"><?php echo $_SESSION['firstName']?> <?php echo $_SESSION['lastName']?></span>
                </div>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="profile"><i class="bi bi-person-gear me-3"></i>Profile</a>
                <a class="dropdown-item" style="display: <?php if($_SESSION['designation'] == "Admin"){echo 'none';}?>" href="settings"><i class="bi bi-gear me-3"></i>Settings </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left me-3"></i>Logout</a>
            </div>
        </div>
    </div>
</div>