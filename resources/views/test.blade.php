<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/css/app.css','resources/js/app.js'])
<style>
    body,
ul {
  margin: 0;
  padding: 0;
}

ul {
  display: flex;
}

ul li {
  list-style-type: none;
  flex-basis: auto;
  flex-grow: 1;
  background: #000;
  text-align: center;
}

ul li:nth-child(2n) {
  background: #ccc;
}

ul li a {
  padding: 20px 0;
  text-decoration: none;
  color: #ccc;
  display: block;
}

ul li:nth-child(2n) a {
  color: #000;
}
</style>
<body>

<nav>
  <ul>
    <li><a href="">Продукция</a></li>
    <li><a href="">Сообщества</a></li>
    <li><a href="">Мероприятия и акции</a></li>
    <li><a href="">Поддержка</a></li>
  </ul>
</nav>
</body>
</html>