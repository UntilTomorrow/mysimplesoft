<div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">

                            <div class="sidenav-menu-heading d-sm-none">Account</div>

                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                                Alerts
                                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                            </a>
                            
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                                Messages
                                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                            </a>
                            <div class="sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{ route('dashboardcrm') }}">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboards
                                <span class="badge bg-primary-soft text-primary ms-auto">New</span>
                            </a>
                            <div class="sidenav-menu-heading">Feature</div>
                            <!-- Leads Menu -->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePagesleads" aria-expanded="false" aria-controls="collapsePagesleads">
                                <div class="nav-link-icon"><i class="fa-solid fa-list-check"></i></div>
                                <span>Leads</span>
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesleads" data-bs-parent="#accordionSidenavLeads">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                    <a class="nav-link" href="{{ route('leadscrm') }}">List</a>
                                    <a class="nav-link" href="{{ route('leadssource') }}">Source</a>
                                    <a class="nav-link" href="{{ route('leadsstatus') }}">Status</a>
                                    <a class="nav-link" href="#">Setting</a>
                                </nav>
                            </div>
                            <!-- Proposals Menu -->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePagesProposals" aria-expanded="false" aria-controls="collapsePagesProposals">
                                <div class="nav-link-icon"><i class="fa-solid fa-envelope"></i></div>
                                <span>Proposals</span>
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesProposals" data-bs-parent="#accordionSidenavProposals">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenuProposals">
                                    <a class="nav-link" href="#">List</a>
                                    <a class="nav-link" href="#">Setting</a>
                                </nav>
                            </div>
                            <!-- User Management Menu -->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePagesUsers" aria-expanded="false" aria-controls="collapsePagesUsers">
                                <div class="nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                <span>Management Users</span>
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesUsers" data-bs-parent="#accordionSidenavUsers">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenuUsers">
                                    <a class="nav-link" href="{{ route('users') }}">User List</a>
                                    <a class="nav-link" href="#">Group List</a>
                                    <a class="nav-link" href="#">Role List</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Valerie Luna</div>
                        </div>
                    </div>
                </nav>
            </div>