<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ATI LIMITED</title>
    <!-- BEGIN sections: Style -->
    @include('backend.includes.style')
    <!-- END sections: Style -->
</head>

<body class="sb-nav-fixed">
    <!-- BEGIN sections: Navbar -->
    @include('backend.includes.nave')
    <!-- END sections: Navbar -->

    <div id="layoutSidenav">
        <!-- BEGIN sections: SideNavbar -->
        @include('backend.includes.sidenav')
        <!-- END sections: SideNavbar -->

        <div id="layoutSidenav_content">
            <main>
                <!-- BEGIN sections: Content -->
                @yield('content')
                <!-- END sections: Content -->
            </main>

            <!-- BEGIN sections: Footer -->
            @include('backend.includes.footer')
            <!-- END sections: Footer -->
        </div>
    </div>
    <!-- BEGIN sections: Javascript -->
    @include('backend.includes.javascript')
    <!-- END sections: Javascript -->
</body>

</html>
