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

                    <div class="col-2">
                        <h1><a href="top"></a> NEON DON</h1>
                        <a class="logo_link" href="/">
                            <h1 class="blink"> NEON DON</h1>
                        </a>
                    </div>
                    <div class="col-7">
                        <nav class="header-nav__menu col-lg-12 col-md-4 text-center">
                            <ul class="navbar_li">
                                <a href="#example">
                                    <li class="btn btn-one">Вывески</li>
                                </a>
                                <a href="#price">
                                    <li class="btn btn-two ">Цены</li>
                                </a>
                                <a href="#production">
                                    <li class="btn btn-four">Отзывы</li>
                                </a>
                                <a href="#about">
                                    <li class="btn btn-three">Кто мы</li>
                                </a>
                                <a href="#order">
                                    <li class="btn btn-four">Заказать</li>
                                </a>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-3 social">
                    <a href="tel:+79495555555" class="TelNumLink">
                            <!-- <img src="{{asset('images/icon/call.svg')}}" alt=""> -->
                            <span class="telnumber"> +7(949)-555-55-55</span>
                        </a>
                        <a href="">
                            <img src="{{asset('images/icon/vk.svg')}}" alt="">
                        </a><a href="https://www.instagram.com/neondonetsk/">
                            <img src="{{asset('images/icon/instagram.svg')}}" alt="">
                        </a><a href="https://t.me/neondn">
                            <img src="{{asset('images/icon/telegram.svg')}}" alt="">
                        </a>
                        <br>

                        <span>
                        <a class="btn_totop" href="#top"><img src="{{asset('images/arrow-up.svg')}}"></a>
                    </div>
                </div>

            </div>
        </header>
        <main>
            <section class="sectiono_hook">
                <div class="container sectiono_hook_block">
                    <div class="row">

                            <!-- <h3>Цепляющий Хук</h3>
                            <h3>Сюда же можно справа сделать видео</h3>
                            <p class="section_hook_p">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. На берегу имени заголовок знаках букв своего, не первую все коварных бросил жизни они пустился повстречался предложения большого курсивных рыбными, свое вершину дороге продолжил! Взгляд там лучше что, свое по всей над которой это приставка, запятой своего маленькая страна речью, текст диких парадигматическая журчит единственное живет наш заголовок предложения злых? Снова строчка всеми все! Подпоясал по всей, переписали коварных диких скатился океана правилами свое маленький, текста города языком последний ведущими реторический несколько прямо всеми живет рыбными пунктуация, текстов путь пор своего? Не которой города мир вершину взгляд. Живет бросил лучше текстов щеке букв.</p>
                            -->
                           
                            <div class="col-6">
                                <h3>Налетай подешевело</h3>
                                <p>
                                    Нужна вывеска? заказывай быстрее только первые 846548913 клиентов получать ни-ху-я
                                    Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Наш всемогущая рекламных власти деревни, имени алфавит взобравшись безопасную, не, свою если сих подзаголовок текстов.
                                </p>
                            </div>
                            <div class="col-6 sectiono_hook_block_video-block">
                            <iframe width="262" height="450" src="{{asset('videos/intro.MP4')}}" frameborder="0" autoplay="false" allowfullscreen></iframe>
                        </div>
                            <button class='glowing-btn'><span class='glowing-txt'>ЗА<span class='faulty-letter'>КА</span>ЗАТЬ</span></button>

                    </div>
                </div>
            </section>

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


                        <button class='glowing-btn'><span class='glowing-txt'>ЗА<span class='faulty-letter'>КА</span>ЗАТЬ</span></button>
                    </div>
                </div>


            </section>


            <section>
                <div class="container">
                    <div class="row">

                    <h3><a href="#competitors" class="heder-3_Link" name="competitors">Сравнение с конкурентами</a>
                    </h3>


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


            <section class="reviews">
                <div class="container">
                    <div class="row">
                        <h3><a href="#reviews" class="heder-3_Link" name="reviews">Отзывы о нас</a>
                        </h3>
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
                        <!-- <div class="col-6">
                            <iframe width="562" height="800" src="{{asset('videos/intro.MP4')}}" frameborder="0" autoplay="false" allowfullscreen></iframe>
                        </div> -->






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
        <div class="container-fluid ">
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