<!DOCTYPE html>
<html lang="fr">

<head>
    @include('parts.head')
        <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body id="body">
   
    <main>
        @yield('main')
    </main>

    @vite('resources/js/app.js')

</body>

</html>
