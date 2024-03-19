<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>

    @include('include.style')

</head>

<body>
<div id="app">
@include('include.sidebar')

<div style="text-align: center;">
    <header class="mb-5">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <h2 class="text-center">Selamat Datang di Dashboard Kepegawaian BKPSDM Kota Padang</h2>
</div>



    @include('include.footer')

    </div>
</div>

    @yield('content')
    @include('include.script')


</body>

</html>
