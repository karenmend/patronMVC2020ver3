<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jQuery.verticalCarousel.css">
    <title>Noticias</title>
</head>
<body>
    <h1>Noticias</h1>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
                <tr>
                    
                    <td>{{$noticia->titulo}}</td>
                    <td>
                        <a href="{{route('noticias.show',$noticia->id)}}">Ver mas</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <section class="services">
            <div class="text">
                <h2>Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services_area">
                            <div id="accordion">
                                <h3><i class="material-icons first">trending_up</i>Statistics<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img src="img/accordion1.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                </div>
                                <h3><i class="material-icons first">mail</i>inbox<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img src="img/accordion1.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                </div>
                                <h3><i class="material-icons first">group</i>team<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img src="img/accordion1.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                </div>
                                <h3><i class="material-icons first">settings</i>settings<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img src="img/accordion1.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                </div>
                                <h3><i class="material-icons first">rss_feed</i>feed<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img">
                                        <img src="img/accordion1.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>