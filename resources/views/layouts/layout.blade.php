<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }} | Pet Clinic</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>

    @include('partials/nav')

    @yield('content')


</body>
</html>