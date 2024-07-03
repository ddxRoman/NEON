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
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
</head>

<body>
    <header>
        <h1><a href="top"></a> NEON DON</h1>
        <span>gfdkjhkrejtbvdbgrfty</span>
        <a class="btn_totop" href="#top"><img src="{{asset('images/arrow-up.svg')}}"></a>
        <nav class="header-nav__menu col-lg-12 col-md-4 text-center">
            <ul class="navbar_li">
                <a href="#example">
                    <li class="btn btn-start">Наши работы</li>
                </a>
                <a href="#price">
                    <li class="btn ">Цены</li>
                </a>
                <a href="#about">
                    <li class="btn">Кто мы</li>
                </a>
                <a href="#production">
                    <li class="btn btn-end">Производство</li>
                </a>
            </ul>
        </nav>

    </header>
    <main>

    <!-- Карусель должна генерится цыклом из базы -->
        <section class="section_examples">
            <h3><a name="example">Примеры работ</a>
            </h3>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
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



        </section>
        <section>
            <div class="container">
                <div class="row">


                    <h3>
                        <a name="price">Цены</a>
                    </h3>
                    <div class="col-6">
                        <ul>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                            <li>Услуга.....................................2</li>
                        </ul>
                    </div>
                    <div class="col-6">
                                                <!-- Карусель должна генерится цыклом из базы -->
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <figure>
                                <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/Love.jpg')}}">
                                <figcaption class="example_price">Цена</figcaption>
                            </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure>
                                        <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/Nike.png')}}">
                                        <figcaption class="example_price">Цена</figcaption>
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                <figure>
                                <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/Wow.jpg')}}">
                                <figcaption class="example_price">Цена</figcaption>
                            </figure>
                                </div>
                                <div class="carousel-item">
                                <figure>
                                <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/purple.jpg')}}">
                                <figcaption class="example_price">Цена</figcaption>
                            </figure>
                                </div>
                                <div class="carousel-item">
                                <figure>
                                <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/beer.png')}}">
                                <figcaption class="example_price">Цена</figcaption>
                            </figure>
                                </div>
                                <div class="carousel-item">
                                <figure>
                                <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/beer2.png')}}">
                                <figcaption class="example_price">Цена</figcaption>
                            </figure>
                                </div>
                                <div class="carousel-item">
                                <figure>
                                <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/like.png')}}">
                                <figcaption class="example_price">Цена</figcaption>
                            </figure>
                                </div>
                                <div class="carousel-item">
                                <figure>
                                <img class="aside_note_breeds_picture" width="100%" src="{{asset('images/examples/lash.png')}}">
                                <figcaption class="example_price">Цена</figcaption>
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
            <h3>
                <a name="about">Кто мы</a>

            </h3>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla dolor itaque nam rerum error corrupti ipsam sed sint nesciunt quibusdam fuga excepturi minus, aliquam, dolorem perspiciatis. Adipisci mollitia aspernatur consequatur reprehenderit animi sequi ducimus dolorum nulla molestias corrupti deserunt facere praesentium et earum soluta sapiente, ullam eius error. Rerum ex tempora aliquam. Ex similique minima fuga qui? Minima quis provident eum animi vel, suscipit neque perspiciatis. Corrupti accusamus blanditiis quaerat facilis repudiandae porro vitae, neque rerum eum, corporis adipisci atque, dolorem quas delectus. Harum eum natus qui neque error doloremque aspernatur consequatur nesciunt, id tenetur alias nam at voluptatem consectetur minima similique. Quasi explicabo voluptate eum harum veniam tempora dignissimos, ex maxime similique possimus, voluptates corporis, nihil dolorum fugit. Autem ut vero laboriosam odit, deleniti nemo obcaecati similique qui soluta facilis temporibus veniam voluptates consequatur doloremque non explicabo alias repudiandae iure molestias quas modi, sapiente vitae laborum. Vero molestias incidunt inventore illo nesciunt, animi sapiente in adipisci laboriosam amet magni delectus, ea libero atque quas voluptate repellendus sed? Vitae fuga culpa adipisci aliquid ad, libero nulla at, accusamus quis magni maiores repellat, aperiam quisquam numquam ducimus accusantium non iusto quod dignissimos consequatur cum itaque! Debitis culpa sit esse dolore quibusdam hic velit, quisquam quos dignissimos possimus vel doloremque ex maiores eveniet atque, consequuntur distinctio voluptas tenetur sequi asperiores recusandae laboriosam minus odio! Fugit, sunt eveniet quidem unde ipsa sequi doloribus possimus officia enim eum officiis blanditiis quas rerum iusto, nihil nemo exercitationem expedita maxime reiciendis impedit dolorem perferendis. Veritatis enim molestiae sapiente amet officia.
        </section>
        <section>
            <h3> <a name="production">Этиапы изготовление вывесок</a></h3>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla dolor itaque nam rerum error corrupti ipsam sed sint nesciunt quibusdam fuga excepturi minus, aliquam, dolorem perspiciatis. Adipisci mollitia aspernatur consequatur reprehenderit animi sequi ducimus dolorum nulla molestias corrupti deserunt facere praesentium et earum soluta sapiente, ullam eius error. Rerum ex tempora aliquam. Ex similique minima fuga qui? Minima quis provident eum animi vel, suscipit neque perspiciatis. Corrupti accusamus blanditiis quaerat facilis repudiandae porro vitae, neque rerum eum, corporis adipisci atque, dolorem quas delectus. Harum eum natus qui neque error doloremque aspernatur consequatur nesciunt, id tenetur alias nam at voluptatem consectetur minima similique. Quasi explicabo voluptate eum harum veniam tempora dignissimos, ex maxime similique possimus, voluptates corporis, nihil dolorum fugit. Autem ut vero laboriosam odit, deleniti nemo obcaecati similique qui soluta facilis temporibus veniam voluptates consequatur doloremque non explicabo alias repudiandae iure molestias quas modi, sapiente vitae laborum. Vero molestias incidunt inventore illo nesciunt, animi sapiente in adipisci laboriosam amet magni delectus, ea libero atque quas voluptate repellendus sed? Vitae fuga culpa adipisci aliquid ad, libero nulla at, accusamus quis magni maiores repellat, aperiam quisquam numquam ducimus accusantium non iusto quod dignissimos consequatur cum itaque! Debitis culpa sit esse dolore quibusdam hic velit, quisquam quos dignissimos possimus vel doloremque ex maiores eveniet atque, consequuntur distinctio voluptas tenetur sequi asperiores recusandae laboriosam minus odio! Fugit, sunt eveniet quidem unde ipsa sequi doloribus possimus officia enim eum officiis blanditiis quas rerum iusto, nihil nemo exercitationem expedita maxime reiciendis impedit dolorem perferendis. Veritatis enim molestiae sapiente amet officia.
        </section>
    </main>
    <footer>
        inc copyrignt

    </footer>
</body>

</html>