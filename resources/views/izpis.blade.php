<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Izpis</title>
</head>
<body>
    <ul>
    @foreach ($posts as $vrstica)
    <li>{{ $vrstica->naslov }}  - {{ $vrstica->opis }}</li>
    @endforeach
    </ul>
</body>
</html>