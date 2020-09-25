<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>FEJEA - Conectados</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }} " rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }} " rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div style="background-color:#6e1112; align-items: center; justify-content: center" class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_150,h_75/https://fejea.com.br/wp-content/uploads/2020/02/BRANCO-e1582372536283.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="/">
                                <i class="fas fa-chart-bar"></i>Início</a>
                        </li>
                        
                        <li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div style="background-color:#6e1112; align-items: center; justify-content: center" class="logo">
                <a href="#">
                    <img src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_150,h_75/https://fejea.com.br/wp-content/uploads/2020/02/BRANCO-e1582372536283.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="/">
                                <i class="fas fa-home"></i>Início</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST" >
                                <input disabled class="au-input au-input--xl" type="text" name="search" placeholder="Em breve..." />
                                <button disabled style="background-color: #00133d;" class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span style="background-color:#6e1112;" class="quantity" >1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>Você tem uma nova mensagem</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Temos uma plataforma nova pra ajudar nossas EJ's a serem conectadas. Se liga!</p>
                                                    <span class="time">3 minutos atrás</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span style="background-color:#6e1112;" class="quantity">0</span>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span  style="background-color:#6e1112;" class="quantity">5</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Você tem 5 notificações.</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div style="background-color: #00133d;" class="bg-c1 img-cir img-40">
                                                    <i class="fa fa-rocket"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Mais Fortes</p>
                                                    <span class="date">31 de Dezembro de 2020</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div style="background-color: #00133d;" class="bg-c2 img-cir img-40">
                                                    <i class="fa fa-code-fork"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Conectados</p>
                                                    <span class="date">31 de Dezembro de 2020</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div style="background-color: #00133d;" class="bg-c3 img-cir img-40">
                                                    <i class="fa fa-globe"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Em todo Brasil</p>
                                                    <span class="date">31 de Dezembro de 2020</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div style="background-color: #00133d;" class="bg-c1 img-cir img-40">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Formando líderes que fazem</p>
                                                    <span class="date">31 de Dezembro de 2020</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div style="background-color: #00133d;" class="bg-c2 img-cir img-40">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Mais Projetos de Alto Impacto</p>
                                                    <span class="date">31 de Dezembro de 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQFqI6dhSfAjkg/company-logo_200_200/0?e=2159024400&v=beta&t=LexJE8WuE70GwqbfIoC_-ycGcXmLw82_xHNvuL1ByR8" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">FEJEA</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. Direitos Reservado. Adaptado com ❤️ por <a href="https://www.instagram.com/candin/">Candin</a>.</p>
                    </div>
                </div>
            </div>
            
            <script src="{{ asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('template/assets/demo/datatables-demo.js') }}"></script>

    <script src="{{ asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js')}}"></script>
    
    @yield("script")
</body>

</html>