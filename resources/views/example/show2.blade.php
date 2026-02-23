<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Výpis</title>
</head>
<body>

<h1>Fibonacciho postupnosť</h1>

<ul>
    @foreach($sequence as $number)
        <li>{{ $number }}</li>
    @endforeach
</ul>

<br><br>

<p>
    <a href="/example/create2">Späť</a>
</p>

</body>
</html>
