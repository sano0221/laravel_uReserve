<html>
    <head>
        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        livewire-test.registerテスト
        @livewire("register")

        @livewireScripts
    </body>
</html>