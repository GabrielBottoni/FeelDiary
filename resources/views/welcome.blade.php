<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-f3py/G3t09pa4D49kwiW3mP0l1oAXGsN4H5qspBRfQjHlL1uyjm/XKzhKjeX7wfgsRgW8rSw6tL5pUD9yI4JnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg container-fluid fixed-top">
        <div class="container-fluid">
            <span class="navbar-brand me-auto">
                <img src="/img/principal_icon.svg" alt="Descrição da imagem" class="img-fluid">
                FeelDiary
            </span>

            
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">FeelDiary</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Características</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">FeedBacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/login" class="login-button">Login</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Fim Navbar -->

    <!-- Inicio apresentação -->
    <section class="apresentacao">
        <div class="container mt-5">
            <div class="row apresentacao-content">
                <!-- Coluna com o texto -->
                <div class="col-lg-6 mt-4">
                    <div class="container-fluid informacao mt-5 mb-4">
                        <h1 class="fs-3 fw-bold mt-4 lh-1">Conheça o FeelDiary, seu companheiro no acompanhamento de tratamentos psiquiátricos.</h1>
                        <p class="fs-6 mt-4 lh-base lh-sm">Com o FeelDiary, você pode registrar e acompanhar cada detalhe
                            do seu tratamento de forma simples e eficiente. Monitore seu humor diário, sintomas, adesão ao tratamento,
                            medicamentos e seus efeitos colaterais, tudo em um único lugar.</p>
                        <p class="lh-sm">O FeelDiary é mais do que um aplicativo; é um parceiro que está ao seu lado na jornada para o bem-estar.
                            Experimente hoje e veja como o acompanhamento do seu tratamento pode ser transformador.</p>
                        <p class="lh-sm pb-4 fw-bold">Baixe agora e comece a cuidar de você, com mais organização e tranquilidade.</p>
                        
                        <a class="info-button" href="#" role="button">Inscrever-se</a>
                        <a href="#" class="info-button">Saber mais</a>
                    </div>
                </div>
                            <!-- Coluna com a imagem (oculta em dispositivos médios e menores) -->
                <div class="col-lg-6 d-none justify-content-center align-items-center d-lg-block mt-5">
                    <img src="/img/iphone-display.svg" alt="Descrição da imagem" class="img-fluid img-info mt-5">
                </div>
                </div>

        </div>
    </section>
    <!-- Fim apresentação -->

    <!-- Inicio carrossel -->
    <section class="container-fluid">
        <div class="container-fluid mt-4 mb-4">
            <div class="text-center fs-3">
            <h2 class="carousel-title">Artigos</h2>
            </div>
            <div id="carouselExample" class="carousel slide d-none d-sm-block">
                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <div class="cards_wrapper">

                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 1</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="cards_wrapper">
                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 5</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 6</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="cards_wrapper">
                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 7</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 8</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="image-wrapper">
                                    <img src="/img/teste.jpg" class="img-card" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card 9</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div id="carouselExampleSmallScreen" class="carousel slide d-sm-none">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 8</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="image-wrapper">
                                <img src="/img/teste.jpg" class="img-card" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card 9</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSmallScreen"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSmallScreen"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>
    <!-- Fim carrossel -->

    <br>
    <br>
    <br>



    </div>
</body>

</html>
