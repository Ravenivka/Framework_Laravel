<!DOCTYPE html>
<html lang="ru">
<head>    
    @include('includes.head', ['title' => $title])
</head>
<body>
    <div class="container">
        <header class="row">
            @include('includes.header')
        </header>
        <main id="main" class="row">
            @yield('content')
        </main>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>