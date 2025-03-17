<!DOCTYPE html>
<html lang="ru">
<head>    
    @include('shared.head', ['title' => $title])
</head>
<body>
    @include('shared.menu')
    <div class="basic">        
        <main id="main" class="row">
            @yield('content')
        </main>
    </div>
</body>
</html>