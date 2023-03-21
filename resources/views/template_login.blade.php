<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Halaman Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons -->
    <script src="{{ url('atlantis-lite') }}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ url('atlantis-lite') }}/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('atlantis-lite') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('atlantis-lite') }}/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ url('atlantis-lite') }}/css/demo.css">
</head>

<body>

    {{-- konten --}}
    @yield('container_section')

    <script src="{{ url('atlantis-lite') }}/js/atlantis.min.js"></script>
    <script src="{{ url('atlantis-lite') }}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ url('atlantis-lite') }}/js/core/popper.min.js"></script>
    <script src="{{ url('atlantis-lite') }}/js/core/bootstrap.min.js"></script>

    <!-- Atlantis JS -->
    <script src="{{ url('atlantis-lite') }}/js/main.js"></script>
</body>

</html>
