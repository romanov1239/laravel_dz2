<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
<h2>Привет, {{ $user['first_name'] }}!</h2>
<h3>Данные пользователя</h3>
<p>Имя: {{ $user['first_name'] }}</p>
<p>Фамилия: {{ $user['last_name'] }}</p>
<p>Email: {{ $user['email'] }}</p>
</body>
</html>
