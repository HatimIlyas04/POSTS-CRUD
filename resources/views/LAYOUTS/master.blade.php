<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
</head>
<body>

    @yield('content')

    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
    @include('sweetalert::alert')
</body>
</html>
