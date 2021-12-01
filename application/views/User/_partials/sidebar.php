
        <!-- Sidebar -->
        <ul class="navbar-nav own-bg sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('')?>Shop/Page/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="<?= base_url('')?>admin_assets/img/sidebar-icon.png" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">Skin Lab</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>
            
            <!-- Nav Item  -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('')?>User/Page/">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item  -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('')?>User/Page/editProfile">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li> -->
            <!-- Nav Item  -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('')?>User/Page/changePassword">
                    <i class="fas fa-fw fa-unlock-alt"></i>
                    <span>Change Password</span></a>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user-cog"></i>
                    <span>Profile Settings</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile Utilities:</h6>
                        <a class="collapse-item" href="<?= base_url('')?>User/Page/editProfile">
                            <i class="fas fa-fw fa-user-edit"></i>
                            <span>Edit Profile</span></a>
                        </a>
                        <a class="collapse-item" href="<?= base_url('')?>User/Page/changePassword">
                            <i class="fas fa-fw fa-unlock-alt"></i>
                            <span>Change Password</span></a>
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index.php/Login/Auth/logout')?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->