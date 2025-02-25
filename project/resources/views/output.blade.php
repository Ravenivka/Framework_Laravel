<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <h1 align="center">Hi! {{ $info['Name'] }}</h1>
    <table style="width: 40vw; margin: 0 auto;">
        <tr>
            <td>Name</td><td>{{ $info['Name'] }}</td>
        </tr>
        <tr>
            <td>Family</td><td>{{ $info['Family'] }}</td>
        </tr>
        <tr>
            <td>e-mail</td><td>{{ $info['e-mail'] }}</td>
        </tr>
    </table>
</body>
</html>