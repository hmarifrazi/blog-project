<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout._head')
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('layout._navbar')
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                @yield('PageHeader')
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            @yield('content')
        </div>
        <!-- Footer-->
        @include('layout._footer')
        <!-- Bootstrap core JS-->
        @include('layout._script')
    </body>
</html>
