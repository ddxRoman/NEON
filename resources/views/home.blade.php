@props(['data'])
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous"> 
</head>
@vite(['resources/css/main.css','resources/css/modal.css','resources/css/button.css','resources/js/app.js'])
<body>
    <div class="modal_block">
        <div class="container_map maps">

            <a href="#maps" class="btn-open" id="maps">  <button class="btn_maps_close">Закрыть</button>    </a>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac86f43d5e2f18d19677bdf9125c9a6e930b87de104b08ed9390c10086fc5609a&amp;width=90%&amp;height=130%&amp;lang=ru_RU&amp;scroll=true"></script>    
 
        </div>

        </div>
  <div class="all_body_for_bg">
        <header>
            <div class="container-fluid">
                <div class="row header_row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 col-5">
                        <h1><a href="top"></a> NEON DON</h1>
                        <a class="logo_link" href="/">
                            <h1 class="blink"> NEON DON</h1>
                        </a>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-0 col-sm-1 col-1 navbar_block">
                        <nav class="header-nav__menu col-lg-12 col-md-4 text-center">
                            <ul class="navbar_li">
                                <a href="#example">
                                    <li class="btn btn-one">Вывески</li>
                                </a>
                                <a href="#price">
                                    <li class="btn btn-two ">Цены</li>
                                </a>
                                <a href="#reviews">
                                    <li class="btn btn-four">Отзывы</li>
                                </a>
                                <a href="#about">
                                    <li class="btn btn-three">Кто мы</li>
                                </a>
                                <a href="#order">
                                    <li class="btn btn-four">Связатся</li>
                                </a>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-8 col-md-8 col-sm-6 col-6 social">
                    <div class="social_messenger">
                        <a href="{{$data['contacts']['vkontakte']}}" target="_blank">
                            <img src="{{asset('images/icon/vk.svg')}}" alt="">
                        </a><a href="{{$data['contacts']['instagram']}}" target="_blank">
                            <img src="{{asset('images/icon/instagram.svg')}}" alt="">
                        </a><a href="{{$data['contacts']['telegram']}}" target="_blank">
                            <img src="{{asset('images/icon/telegram.svg')}}" alt="">
                        </a>
                    </div>
                        <span>
                            <a class="btn_totop" href="#top"><img src="{{asset('images/arrow-up.svg')}}"></a>
                            <a href="tel:{{$data['contacts']['telephone']}}" class="btn_TelNumLink">
                            <img class="img_btn_TelNumLink" src="{{asset('images/icon/call.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="section_hook">
                <div class="container section_hook_block">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
<x-article-card :article="$data['articles'][0]">
</x-article-card>
                        </div>
                        <div class="col-lg-6 col-0 section_hook_block_video-block">
                            <iframe class="video_block" src="{{asset('videos/intro.MP4')}}" frameborder="0" autoplay="false" allowfullscreen></iframe>
                        </div>


                            <button data-bs-toggle="modal" data-bs-target="#ModalCallback" class='glowing-btn'><span class='glowing-txt'>ЗА<span class='faulty-letter'>КА</span>ЗАТЬ</span></button>

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
                        <a href="#openModal">
                            <button data-bs-toggle="modal" data-bs-target="#ModalCallback" class='glowing-btn'><span class='glowing-txt'>ЗА<span class='faulty-letter'>КА</span>ЗАТЬ</span></button>
                                            </a>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <h3><a href="#competitors" class="heder-3_Link" name="competitors">Сравнение с конкурентами</a>
                        </h3>
                        <x-article-card :article="$data['articles'][1]">
</x-article-card>
                    </div>
                </div>
            </section>
            <section class="section_price">
                <div class="container">
                    <div class="row">
                        <h3>
                            <a href="#price" class="heder-3_Link" name="price">Цены</a>
                        </h3>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 price_block_list">
                            <table class="price">
                                    @foreach($data['prices'] as $position_price)
                                    <tr>
                                        <td>{{ $position_price->name_product}}</td>
                                        <td class="ghost_order">    <a href="#openModal">
                            <button data-bs-toggle="modal" data-bs-target="#ModalCallback">{{ $position_price->production_time}} Дня</button>
                                            </a>
                                            </td>
                                        <td class="price_coast">{{ $position_price->price}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-0 carousel_price_example">
                            <!-- Карусель должна генерится цbклом из базы -->
                            <div id="carouselExampleFade" class="carousel-price carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <figure>
                                            <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/Love.jpg')}}">
                                            <figcaption class="example_price">Цена1</figcaption>
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

<section class="spacer">
			
				<div class="testimonial-section">
					<div class="testi-user-img">
					<div class="swiper-container gallery-thumbs">
						  <div class="swiper-wrapper">
								  <div class="swiper-slide">
										<img class="u3" src="https://md-aqil.github.io/images/2091127763_1_1_1.jpg" alt="">
									</div>
                                </div>
					  </div>
					</div>
					<div class="user-saying">
						  <div class="swiper-container testimonial">
								  <!-- Additional required wrapper -->
								  <div class="swiper-wrapper ">
									  <!-- Slides -->
									  <div class="swiper-slide">
										  <div class="quote">
												  <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
											  <p>
                                                Ебанама ахуенная штука сделал. Красавелла нахуй
											  </p>
											  <div class="name">Наратаотвечун</div>
											  <div class="designation">Кафе-марафе</div>
											  
										  </div>
									  </div>
								  </div>
								  <!-- If we need pagination -->
								  <div class="swiper-pagination swiper-pagination-white"></div>
							  
							  </div>
					</div>
				</div>
			</section>
	<script src="https://md-aqil.github.io/images/swiper.min.js"></script>
    </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <h3>
                    <a href="#about" class="heder-3_Link" name="about">Кто мы</a>
                </h3>
                <div class="col-6">
                <x-article-card :article="$data['articles'][2]">
</x-article-card>     </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 section_callback">
                    <h3> <a href="#order" class="heder-3_Link" name="order">Остались вопросы?</a></h3>
                    <h4>Остаьте свой вопрос в форме ниже и мы ответим вам в ближайщее время</h4>
                    <br>
                    <form class="callback_order" method="post" action="TgBot.php">
                        <input class="order_form_input" name="name" type="text" placeholder="Как к вам можно обращаться" type="text"><br>
                        <input required id="phone-number" name="phone" type="text" class="mask-phone order_form_input" placeholder="Номер телефона"><br>
                        <input class="order_form_input" name="email" placeholder="Почта" type="text"><br>
                        <textarea class="order_form_textarea" name="msg" placeholder="Какая вывеска вам нужна, напишите свои пожелания" type="text"></textarea><br>
                        <button class="callback_form_btn">Отправить</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    </main>
    </div>

    
    <footer>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12 col-xs-4 col-4">
                    Вся представленная на сайте информация, касающаяся товаров и обслуживания, носит информационный
                    характер и не является публичной офертой, определяемой положениями ст. 437 (2) ГК РФ.
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-4 col-6">
                    <div class="row">
                        <div class="col-12 social-footer">
                            <a href="{{$data['contacts']['vkontakte']}}">
                                <img src="{{asset('images/icon/vk.svg')}}" alt="">
                            </a><a href="{{$data['contacts']['instagram']}}">
                                <img src="{{asset('images/icon/instagram.svg')}}" alt="">
                            </a><a href="{{$data['contacts']['telegram']}}">
                                <img src="{{asset('images/icon/telegram.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 TelLink_footer">
                            <a href="tel:{{$data['contacts']['telephone']}}" class="TelNumLink_footer">
                                <img src="{{asset('images/icon/call.svg')}}" alt="">
                                <span class="telnumber_footer">{{$data['contacts']['telephone']}}</span>
                            </a>
                            <span>


                            

        <a href="#maps" class="btn-open" id="maps">{{$data['contacts']['adress']}}
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-4 col-3">
                    <ul class="payment">
                        <li><img src="{{asset('images/logopay/mastercard.svg')}}" alt=""></li>
                        <li><img src="{{asset('images/logopay/mir.svg')}}" alt=""></li>
                        <li><img src="{{asset('images/logopay/visa.svg')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<!-- Модальное окно -->
<div class="modal fade" id="ModalCallback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Оформить заказ</h3> 
			</div>
			<div class="modal-body">
<form action="{{ route('TgBotSend') }}" method="post">
@csrf
    <input class="input_modal order_form_input" type="text" name="name" placeholder="Имя">
    <input class="input_modal mask-phone order_form_input" name="tel_number" type="tel" placeholder="Номер телефона"><br>
    <!-- <input class="input_modal mask-phone order_form_input" type="file" name="example"> -->
    <textarea class="textarea_modal order_form_textarea" name="msg" id="" placeholder="Опишите какую вывеску вы хотите"></textarea>
				<div class="modal-footer">
                    <button class="btn-modal">Заказать</button>
</form>
				</div>
			</div>
		</div>
	</div>
    


    


    
	<script>
                                $('.mask-phone').mask('+7 (999) 999-99-99');
                            </script>




</body>
</html>