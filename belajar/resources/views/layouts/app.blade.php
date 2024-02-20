@include('layouts.head')

<body>
    <div id="app">
        @include('layouts.navbar')

        @yield('content')
        
    </div>
    
    @include('layouts.foot')
</body>
</html>
    