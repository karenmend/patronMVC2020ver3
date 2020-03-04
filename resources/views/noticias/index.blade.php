<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jQuery.verticalCarousel.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Noticias</title>
</head>
<body>
    <section class="services">
            <div class="text">
                <h2>Noticias</h2>
                <p></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services_area">
                            <div id="accordion">
                             @foreach($noticias as $noticia)
                                <h3><i class="material-icons first">list_alt</i>{{$noticia->titulo}}<i class="material-icons last">arrow_drop_down</i></h3>
                                <div class="slide_up">
                                    <div class="accordion_img" >
                                        <img  src="/storage/portadas/{{$noticia->portada}}" alt="">
                                    </div>
                                    <div>
                                        {{$noticia->cuerpo}}
                                        <br>
                                        <div>
                                            <a href="{{route('noticias.show',$noticia->id)}}">Ver mas</a>
                                        </div>
                                    </div>
                                </div>
                    @endforeach    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jQuery.verticalCarousel.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/active.js"></script>
</body>
</html>