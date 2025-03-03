<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.head')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- navbar -->
            <div class="navbar-bg"></div>
            @include('dashboard.layouts.header')

            <!-- sidebar -->
            @include('dashboard.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">

                @yield('content')

            </div>

            @include('dashboard.layouts.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    @include('dashboard.layouts.scripts')

</body>

</html>
