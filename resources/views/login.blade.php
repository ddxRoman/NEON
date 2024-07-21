<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/css/main.css','resources/css/button.css','resources/js/app.js'])
<body>
    <div class="login_page_body">
        <form class="login_form" action="contact/submit" method="post">
            <input placeholder="login" type="text">
            <input placeholder="password" type="password">
            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>