<!DOCTYPE html>
<html>
<head> 
    <title>Build a Popup with Jquery</title> 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous"> 

</head>
@vite(['resources/css/main.css','resources/css/modal.css','resources/css/button.css','resources/js/app.js'])

<body>
    <div class="modal_map">
        <div class="container_map cookies">
            <i class="fas fa-times close"></i>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac86f43d5e2f18d19677bdf9125c9a6e930b87de104b08ed9390c10086fc5609a&amp;source=constructor" width="200" height="200" frameborder="0"></iframe>
        </div>
        <div class="container_map logged">
            <i class="fas fa-times close"></i>
            <img src="https://image.flaticon.com/icons/svg/3093/3093188.svg" class="img" alt="Cookies">
            <p class="text">You will be logged out immedаiately!</p>
            <a href="#" class="">Extent login</a>
        </div>
        <a href="#" class="btn-open" id="cookies">Open cookies</a>
        <a href="#" class="btn-open" id="logged">Open logged</a>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
</html>
