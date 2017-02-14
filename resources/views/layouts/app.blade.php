<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
<div id="app">
    @include('partials.header')

    @yield('content')
</div>
<div class="navbar-fixed-bottom text-center">
    <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }}<a href="http://jaar.lt"> JAAR</a></p>
</div>
<!-- Scripts -->
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('.datatable').DataTable();
    });
</script>
</body>
</html>
