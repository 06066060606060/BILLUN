<!DOCTYPE html>
<html lang="Fr">

<head>
    @include('parts.head')
</head>

<body id="body">
   
    <main>
        @yield('main')
    </main>

    @vite('resources/js/app.js')

</body>

</html>
