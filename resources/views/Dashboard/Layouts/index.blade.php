<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('Dashboard.Template.head')
</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- sidebar --}}
    @include('Dashboard.Template.sidenav')
    {{-- endsidebar --}}
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        @include('Dashboard.Template.navbar')
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="row">
                {{-- @include('Dashboard.Template.conten') --}}
                @yield('content')
            </div>

            <div class="row my-4">
                @yield('container')
            </div>
            <footer class="footer pt-3  ">

                @include('Dashboard.Template.footer')

            </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    @include('Dashboard.Template.script')
</body>

</html>
