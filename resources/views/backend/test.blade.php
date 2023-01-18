<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('backend.layouts.header')
<!-- End Header -->

<body>
    <div class="layer"></div>

    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">

        <!-- Sidebar -->
        @include('backend.layouts.sidebar')
        <!-- End Sidebar -->

        <div class="main-wrapper">
            <!-- navbar -->
            @include('backend.layouts.navbar')
            <!-- End Main navbar -->

            <!-- Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">

                    <!-- Main Content -->
                    @yield('content')
                    <!-- End Main Content -->

                </div>
            </main>
            <!-- End Main -->

            <!-- Footer -->
            @include('backend.layouts.footer')
            <!-- End Footer -->

        </div>
    </div>
    <!-- Script -->
    @include('backend.layouts.script')
    <!-- End Script -->
</body>

</html>
