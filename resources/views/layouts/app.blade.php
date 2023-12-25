<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Laravel App</title>

    <!-- Sertakan file CSS Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- ... konten lainnya ... -->
</head>
<body>

    <!-- ... konten lainnya ... -->

    <!-- Sertakan file JavaScript Bootstrap (dan jQuery jika diperlukan) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- ... konten lainnya ... -->
    
    <!-- Sertakan file JavaScript Laravel -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
