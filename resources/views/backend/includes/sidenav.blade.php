<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Work</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Profiles
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admins') }}">Admin</a>
                        <a class="nav-link" href="{{ route('employees') }}">Employee</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="{{ route('email') }}" data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Send mail
                </a>
                <a class="nav-link collapsed" href="{{ route('pdf') }}" data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false" aria-controls="pagesCollapseAuth">
                    PDF
                </a>
                <a class="nav-link collapsed" href="{{ route('sms') }}" data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false" aria-controls="pagesCollapseAuth">
                    SMS
                </a>
                <a class="nav-link collapsed" href="{{route('summarised.reports') }}" data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Summarised Reports
                </a>
            </div>
        </div>
    </nav>
</div>
