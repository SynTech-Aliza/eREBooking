    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle m-t-5">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <img src="../assets/images/profiles/<?php echo $userProfile ?>" class="profile" alt="" />
                            </div>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <h6 class="text-left font-weight-bold"><?php echo $userFirstName." ".$userMiddleName[0].". ".$userLastName ?></h6>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#profile"><i class="ti-user"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="#changepassword"><i class="ti-lock"></i> Change Password</a>
                                        </li>
                                        <li>
                                            <a href="../server/index?logout"><i class="ti-power-off"></i> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>