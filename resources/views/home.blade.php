@extends('index')
@section('home')
    <div class="container-fluid header-back p-0">

        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end  info-top">
                    <div class="icons-header">
                        <i class="lab la-facebook-f"></i>
                        <i class="lab la-instagram"></i>
                    </div>
                    <div class="phone-header d-flex align-items-center">
                        <i class="las la-phone"></i>
                        <p>(24) 3346-4566</p>
                    </div>
                    <div class="email-header d-flex align-items-center">
                        <i class="las la-envelope"></i>
                        <p>contato@artemoveis.net</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex header-main d-sm-none d-md-none d-lg-flex">
            <div class="logo-part">
                <div class="logo">
                    <img src="img/logo.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="main-menu">
                <nav class="navbar navbar-expand-lg ">

                    <div class="menu m0">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lojas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contato</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Orçamento</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="header-mob d-sm-block d-md-block d-lg-none">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-mob">
                    <a class="navbar-brand" href="#"> <img src="img/logo.png" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="las la-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lojas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Orçamento</a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="header-sticky">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-mob">
                    <a class="navbar-brand" href="#"> <img src="img/logo.png" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="las la-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lojas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Orçamento</a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <div class="container">
            <div class="row wooden-work mt-5 align-items-center">
                <div class="col-md-6">
                    <h2>We are Available <br> <span>for your wooden work</span></h2>
                    <p class="works"></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates incidunt aperiam accusamus
                        corrupti ea consequatur. Delectus voluptatum corporis quas cupiditate</p>

                    <div class="row">
                        <button class="btn animated-1">Purchase now</button>
                        <button class="btn animated-1">Our Services</button>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="img/woodwork.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>


    </div>

    <section class="mt-5">
        <div class="container intro-wood">
            <div class="row">
                <div class="col-md-5">
                    <img src="woodwork2.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <h3>Tudo sobre Madeira</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem odit temporibus ipsum, expedita vero
                        repudiandae</p>


                    <div class="row ">
                        <div class="col-md-6">
                        <div class="accordion">
                            <div class=" d-flex align-items-center">
                                <i class="las la-arrow-right"></i>
                                <span>Visão</span>
                            </div>
                            <div class="content">
                                <p>Oferecer atendimento de qualidade e diferenciado, produtos de primeira e soluções
                                    adequadas ao cliente que deseja realizar seu projeto;</p>
                            </div>
                        </div>

                        <div class="accordion2">
                            <div class=" d-flex align-items-center">
                                <i class="las la-arrow-right"></i>
                                <span>Missão</span>
                            </div>
                            <div class="content">
                                <p>Oferecer atendimento de qualidade e diferenciado, produtos de primeira e soluções
                                    adequadas ao cliente que deseja realizar seu projeto;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 loja">
                        <img src="img/loja.png" alt="" class="img-fluid">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
