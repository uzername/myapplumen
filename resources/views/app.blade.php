<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
        @stack('scripts')
    </head>
    <body>
        <div class="top-bar">    
        @include('topline')     
        </div>
        <div class="container">
            @yield('content')
                        
        </div>
    </body>
</html>