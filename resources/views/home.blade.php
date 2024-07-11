<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEON Донецк</title>
    <META NAME="description" CONTENT="<?= $description = 'Description' ?>">
    <meta name="Robots" content="index, follow">
    <!-- На главной индекс фоллов, на остальныйх NO при пагинации. NOindex NOfollow на технических страницах, превнекст при каталоге с пагинацией (Договора, документы и тд, не важные для юзера)-->
    <link rel="shortcut icon" href="img/icon/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://snipp.ru/cdn/bootstrap/3.4.1/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
@vite(['resources/css/main.css','resources/css/button.css','resources/js/app.js'])

<body>
    <div class="all_body_for_bg">


    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <h1><a href="top"></a> NEON DON</h1>
                    <a class="logo_link" href="/">
                        <h1 class="blink"> NEON DON</h1>
                    </a>
                </div>
                <div class="col-5 social">

                    <a href="">
                        <img src="{{asset('images/icon/vk.svg')}}" alt="">
                    </a><a href="https://www.instagram.com/neondonetsk/">
                        <img src="{{asset('images/icon/instagram.svg')}}" alt="">
                    </a><a href="https://t.me/neondn">
                        <img src="{{asset('images/icon/telegram.svg')}}" alt="">
                    </a>
                </div>
                <div class="col-3 telephone">
                    <a href="tel:+79495555555" class="TelNumLink">
                        <img src="{{asset('images/icon/call.svg')}}" alt="">
                        <span class="telnumber"> +7(949)-555-55-55</span>
                    </a>
                    <span>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a class="btn_totop" href="#top"><img src="{{asset('images/arrow-up.svg')}}"></a>
                    <nav class="header-nav__menu col-lg-12 col-md-4 text-center">
                        <ul class="navbar_li">
                            <a href="#example">
                                <li class="btn btn-one">Наши работы</li>
                            </a>
                            <a href="#price">
                                <li class="btn btn-two ">Цены</li>
                            </a>
                            <a href="#about">
                                <li class="btn btn-three">Кто мы</li>
                            </a>
                            <a href="#production">
                                <li class="btn btn-four">Производство</li>
                            </a>
                            <a href="#order">
                                <li class="btn btn-four">Заказать</li>
                            </a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section><div class="container"><div class="row"><div class="col-12"><h3>Цепляющий Хук</h3></div></div></div></section>

        <!-- Карусель должна генерится цыклом из базы 
        Размер фоток для слайдера 1100 на 650
        -->
        <section class="section_examples">
            <div class="container-fluid">
                <div class="row">
                    <h3><a href="#example" class="heder-3_Link" name="example">Примеры работ</a>
                    </h3>
                    <div id="carouselExampleCaptions" class="carousel slide section_examples_carousel" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/examples/Love.jpg')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/examples/Nike.png')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/examples/beer.png')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/examples/Wow.jpg')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- <button class='glowing-btn'><span class='glowing-txt'>ЗА<span class='faulty-letter'>КА</span>ЗАТЬ</span></button> -->
                </div>
            </div>


        </section>


        <section>
            <div class="container">
                <div class="row">
                    <h3>Сравнение с конкурентами</h3>
                </div>

            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <h3>Отзывы о нас</h3>
                </div>

            </div>
        </section>
        <section class="section_price">
            <div class="container">
                <div class="row">
                    <h3>
                        <a href="#price" class="heder-3_Link" name="price">Цены</a>
                    </h3>
                    <div class="col-6">

                        <a href="google.com">
                            <table class="price">
                                <tr>
                                    <td>Услуга</td>
                                    <td class="ghost_order">заказать</td>
                                    <td class="price_coast"> 2</td>
                                </tr>
                                <tr>
                                    <td>Услуга</td>
                                    <td class="ghost_order">заказать</td>
                                    <td class="price_coast"> 2</td>
                                </tr>
                                <tr>
                                    <td>Услуга</td>
                                    <td class="ghost_order">заказать</td>
                                    <td class="price_coast"> 2</td>
                                </tr>
                                <tr>
                                    <td>Услуга</td>
                                    <td class="ghost_order">заказать</td>
                                    <td class="price_coast"> 2</td>
                                </tr>



                            </table>
                        </a>

                    </div>
                    <div class="col-6">
                        <!-- Карусель должна генерится цыклом из базы -->
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/Love.jpg')}}">
                                        <figcaption class="example_price">Цена1</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/Nike.png')}}">
                                        <figcaption class="example_price">Цена2</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/Wow.jpg')}}">
                                        <figcaption class="example_price">Цена3</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/purple.jpg')}}">
                                        <figcaption class="example_price">Цена4</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/beer.png')}}">
                                        <figcaption class="example_price">Цена5</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/beer2.png')}}">
                                        <figcaption class="example_price">Цена6</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/like.png')}}">
                                        <figcaption class="example_price">Цена7</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/lash.png')}}">
                                        <figcaption class="example_price">Цена 8</figcaption>
                                    </figure>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    

                        <h3>
                            <a href="#about" class="heder-3_Link" name="about">Кто мы</a>
                        </h3>

    <div class="col-6">
        
        
    </div>
    <div class="col-6">
        <iframe width="562" height="800" src="{{asset('videos/intro.MP4')}}" frameborder="0" autoplay="false" allowfullscreen></iframe>
    </div>





             
                </div>
            </div>
        </section>
        <section>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3> <a href="#production" class="heder-3_Link" name="production">Этапы изготовление вывесок</a></h3>
                        <br>
                        Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты. Своего, снова? Продолжил буквоград инициал, всеми коварных сбить языком курсивных, своих над свой имени проектах имеет единственное lorem лучше несколько ему. Текстами правилами города, свою меня которое сих оксмокс всемогущая вскоре однажды она запятой ipsum ты реторический до последний курсивных гор сбить грустный страну проектах? Но ее буквенных речью предупредила лучше предложения залетают, ведущими алфавит ему океана подпоясал дороге буквоград всемогущая деревни своего прямо строчка рот которое что сбить переписали? Щеке единственное заглавных дал инициал это дорогу меня продолжил деревни предложения несколько запятой, безорфографичный дороге своих ему свой сбить что страна. Жизни города реторический эта маленький предложения точках, большой пояс подпоясал предупредила приставка? Единственное большой страна свое, осталось свой снова! Дал предложения использовало дороге языком, рыбными продолжил алфавит. Безопасную города текста снова которое семь несколько проектах свою, алфавит щеке одна ручеек за живет необходимыми ipsum наш точках. Которой эта дал запятой имеет жизни ручеек ее взгляд наш последний. Страну алфавит взобравшись, то рот подзаголовок власти ты это, проектах которой имени домах. Агентство своего предупреждал имени но, он не строчка лучше. Деревни его повстречался дороге запятой грустный маленький все возвращайся образ, подпоясал оксмокс если строчка эта агентство подзаголовок. Деревни заманивший свою журчит буквоград страна вопрос ipsum использовало силуэт большой рукопись домах моей, себя предупредила наш если диких последний строчка все! Коварный агентство букв переписали вершину? Страну, lorem вершину, точках букв заглавных вопрос собрал заманивший толку которой злых ipsum, буквоград даль? Семантика диких страну скатился океана, рот дорогу, осталось собрал жаренные вскоре продолжил своих послушавшись, точках строчка.
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3> <a href="#order" class="heder-3_Link" name="order">Оформить заказ</a></h3>
                        <br>

                        <form class="callback_order" method="post" action="">
                            <input class="order_form_input" type="text" placeholder="Как к вам можно обращаться" type="text"><br>
                            <input required id="phone-number " name="phone" type="text" class="mask-phone order_form_input" placeholder="Номер телефона"><br>
                            <input class="order_form_input" placeholder="вветиде данные" type="text"><br>
                            <textarea class="order_form_input" placeholder="Какая вывеска вам нужна, напишите свои пожелания" type="text"> </textarea><br>
                            <button>Заказать</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $('.mask-phone').mask('+7 (999) 999-99-99');
    </script>
    <hr class="line_neon-hr">
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    Вся представленная на сайте информация, касающаяся товаров и обслуживания, носит информационный характер и не является публичной офертой, определяемой положениями ст. 437 (2) ГК РФ.
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12 social-footer">

                            <a href="">
                                <img src="{{asset('images/icon/vk.svg')}}" alt="">
                            </a><a href="https://www.instagram.com/neondonetsk/">
                                <img src="{{asset('images/icon/instagram.svg')}}" alt="">
                            </a><a href="https://t.me/neondn">
                                <img src="{{asset('images/icon/telegram.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 TelLink_footer">




                            <a href="tel:+79495555555" class="TelNumLink_footer">
                                <img src="{{asset('images/icon/call.svg')}}" alt="">
                                <span class="telnumber_footer">+7(949)-555-55-55</span>
                            </a>
                            <span>

                        </div>
                    </div>
                </div>


                <div class="col-3">

                    <ul class="payment">
                        <li><img src="{{asset('images/logopay/mastercard.svg')}}" alt=""></li>
                        <li><img src="{{asset('images/logopay/mir.svg')}}" alt=""></li>
                        <li><img src="{{asset('images/logopay/visa.svg')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>