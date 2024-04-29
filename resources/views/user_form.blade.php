<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label, input {
            display: block;
        }
        input {
            width: 30%;
            box-sizing: border-box;
            padding: 8px;
        }
        button {
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form method="POST" action="/store_form">
    @csrf
    <div class="form-group">
        <label for="first_name">Имя:</label>
        <input type="text" id="first_name" name="first_name" required>
    </div>
    <div class="form-group">
        <label for="last_name">Фамилия:</label>
        <input type="text" id="last_name" name="last_name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <button type="submit">Отправить</button>
    </div>
</form>
</body>
</html>
