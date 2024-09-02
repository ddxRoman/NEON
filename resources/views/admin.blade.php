<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://snipp.ru/cdn/bootstrap/3.4.1/bootstrap.min.css">
    <title>NEON Admin</title>
</head>

<style>
    li{
        color: black;
    }
    form{
        color: black;
    }
</style>

@vite(['resources/css/main.css','resources/css/button.css','resources/js/app.js'])
<body>

    <div class="header_row">
        <nav class="header-nav__menu col-lg-12 col-md-4 text-center">

<ul class="admin_nav">
    <a href="" target="admin_frame">
        <li>Первое окно</li>
        </a>
        
    <a href="" target="admin_frame">
        <li>Примеры работ</li>
        </a>
        
    <a href="" target="admin_frame">
        <li>Конкуренты</li>
        </a>
        
    <a href="" target="admin_frame">
        <li>Цены</li>
        </a>
        
    <a href="" target="admin_frame">
        <li>Отзывы о нас</li>
        </a>
        
    <a href="" target="admin_frame">
        <li>Кто мы</li>
        </a>
        
</ul>
</nav>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error){
            <li>{{$error}}</li>
        }
        @endforeach
    </ul>
</div>
@endif
<div class="admin_edit_block">
    <h3>ХУК</h3>
<form action="{{route('edit')}}" method="post">
    @csrf
    <input name="header" placeholder="h1" type="text"><br>
    <textarea name="body" placeholder="text" type="text"> </textarea><br>
    <input name="rank" placeholder="rank" type="number"><br>
    <button type="submit">Сохранить</button>
</form>

<!-- <iframe src="" name="admin_frame" frameborder="0"></iframe> -->
<h3>Прайс</h3>


<form action="{{route('price')}}" method="post">
    @csrf
    <input type="text" placeholder="Название" name="name_neon">
    <input type="number" placeholder="Сроки" name="time_neon">
    <input type="number" placeholder="Цена" name="coast_neon">
    <button type="submit">Сохрани</button>
    
</form>

</div>


</body>
</html>