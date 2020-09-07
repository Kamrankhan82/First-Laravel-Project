<html>
<head><title>@yield('title')</title></head>
<body>
    <center>
@section('header')
<div class="header">
    <h1>Header Part</h1>
    </div>
@show
    <div class="content">
    @yield('content')
    </div>
    @section('footer')
    <div class="footer">
    <h1>Footer Part</h1>
    </div>
    @show
        </center>
</body>
</html>