<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.adminmeta');
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    @include('includes.header');
    <!-- End Header -->

    <!-- Table lists -->
    @yield('content');

    <!-- End Table lists -->

    <!-- ======= Footer ======= -->
    @include('includes.adminscript');

</body>

</html>