<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </a>
                    <!-- <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        Master
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="blood_group_data.php">Blood Group</a>
                            <a class="nav-link" href="donor_list.php">Donor List</a>
                            <a class="nav-link" href="requests_list.php">Requests List</a>
                        </nav>
                    </div> -->
                    <a class="nav-link" href="blood_group_data.php">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        Blood Group
                    </a>
                    <a class="nav-link" href="donor_list.php">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-list-alt"></i>
                        </div>
                        Donor List
                    </a>
                    <a class="nav-link" href="requests_list.php">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-list-alt"></i>
                        </div>
                        Requests List
                    </a>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon">
                            <i class="fa fa-file"></i>
                        </div>
                        Reports
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="donation_list.php">Donation Report</a>
                            <a class="nav-link" href="requested_user.php">Request Report</a>
                            <a class="nav-link" href="hand_over.php">Handed Over Blood Report</a>
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        Users
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="Adminlogin_data.php">Admin</a>
                            <a class="nav-link" href="hospital_login.php">Hospital</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php echo $_SESSION['admin_email'];?>
            </div>
        </nav>
    </div>