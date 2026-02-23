<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulár</title>
</head>
<body>

<form method="POST" action="/example/result2">
    @csrf

    <p>
        <label>Zadaj počet čísel:</label>
        <input type="number" name="n" min="1" required>
    </p>>

        <button type="submit">Vypísať</button>
</form>

</body>
</html>
