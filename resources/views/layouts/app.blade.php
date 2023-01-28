<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Parsinta</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
     {{ $styles }}
</head>
<body style="font-family: 'Mulish';">

    <x-navbar></x-navbar>

    {{ $slot }}
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
