<!DOCTYPE html>
<html lang="id">
    <x-head :title="$title"></x-head>

    <body>
        <x-nav-bar></x-nav-bar>

        @yield('page')

        <x-footer></x-footer>
        <x-end-body></x-end-body>
    </body>

</html>
