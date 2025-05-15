<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tool'art Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->

    <!-- Bootstrap CSS local -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrappage.css') }}">

    <!-- global styles -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <!-- scripts -->
    <script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolltotop.js') }}"></script>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.jsrespond.min.js') }}"></script>
    <![endif]-->
</head>
<body>

@include('partials.header')




{{--< !-- section premier-- >--}}

<section  class="homepage-slider" id="home-slider">
    <div class="flexslider">
        <section class="home" id="home">
            <div class="home-text">
                <h3>Bienvenue sur</h3>
                <h1>sur Tool'Art Solution</h1>
                <p>Subtitle: There are many variations of the passages of lorem Ipsum from available,variations of the passages.
                    Btn text: Get free estimation</p>
                <a href="#" class="btn">Plus info</a>
            </div>
            <div class="home-img">

            </div>
        </section>
    </div>
</section>

{{--fin section premier--}}

{{--< !-- section deuxieme-- >--}}
<section class="header_text">
    We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates.
    <br/>Don't miss to use our cheap abd best bootstrap templates.
</section>

{{--< !-- fin section deuxieme-- >--}}

{{--< !-- section troisieme -- >--}}
<section class="main-content">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Feature <strong>Services</strong></span></span></span>
                    </h4>
                    <!-- about -->
                    <div class="about">
                        <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
                            <span class="icon"></span>
                        </a>
                        <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
                            <span class="icon"></span>
                        </a>
                        <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
                            <span class="icon"></span>
                        </a>
                        <a class="bg_links logo"></a>
                    </div>
                    <!-- end about -->

                    <!-- presentation services -->


                    <div class="card-container">
                        <!-- Card 1 -->
                        <div class="card">
                            <div class="logo">
                                <img src="{{ asset('images/game.jpg') }}" alt="game">
                            </div>
                            <h3>Jeux</h3>
                            <p>Petite description de la carte 1.</p>
                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-snapchat-ghost"></i>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="card">
                            <div class="logo">
                                <img src="{{ asset('images/shop.png') }}" alt="shop">
                            </div>
                            <h3>Shop</h3>
                            <p>Description personnalisée pour la deuxième carte.</p>
                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-snapchat-ghost"></i>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="card">
                            <div class="logo">
                                <img src="{{ asset('images/car.jpg') }}" alt="car">
                            </div>
                            <h3>Reservation</h3>
                            <p>Un autre texte descriptif pour la carte.</p>
                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-snapchat-ghost"></i>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="card">
                            <div class="logo">
                                <img src="{{ asset('images/docteur.jpg') }}" alt="docteur">
                            </div>
                            <h3>Docteur</h3>
                            <p>Et voici la quatrième carte du groupe.</p>
                            <div class="social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-snapchat-ghost"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br/>
            <div class="row">
                <div class="span12">
                    <h4 class="title">
                        <span class="pull-left"><span class="text"><span class="line">Mode <strong>Payement</strong></span></span></span>
                    </h4>
                    <div class="row feature_box">
                        <div class="span4">
                            <div class="service">
                                <div class="responsive">
                                    <img src="{{ asset('images/feature_img_2.png') }}" alt="feature1">
                                    <h4>MODE DE <strong>PAYEMENT</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="customize">
                                    <img src="{{ asset('images/feature_img_1.png') }}" alt="feature2">
                                    <h4>Nos <strong>SERVICES</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="service">
                                <div class="support">
                                    <img src="{{ asset('images/feature_img_3.png') }}" alt="feature3">
                                    <h4>APP MOBIL <strong>APP WEB</strong></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{--< !-- Fin section troisieme -- >--}}

{{--< !-- section quatrieme -- >--}}
<section class="our_client">
    <h4 class="title"><span class="text"><span class="line"> <strong></strong></span></span></span></h4>
    <div class="row">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br/>
        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset <br/>
        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br/>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.<br/>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.<br/>
        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset <br/>
    </div>
</section>
{{--< !-- fin section quatrieme -->--}}

{{--< !-- section cinquieme -->--}}
<section class="our_client">
    <h4 class="title"><span class="text"><span class="line">Mode <strong>Stats</strong></span></span></span></h4>
    <div class="row" id="progress-bar">
        <div class="circular-progress" data-inner-circle-color="white" data-percentage="85" data-progress-color="#28a745" data-bg-color="grey">
            <div class="inner-circle"><p style="margin: 20px">Services</p></div>
            <p class="percentage">0%</p>
        </div>

        <div class="circular-progress" data-inner-circle-color="white" data-percentage="75" data-progress-color="#28a745" data-bg-color="grey">
            <div class="inner-circle"><p style="margin: 20px">collaborateurs</p></div>
            <p class="percentage">0%</p>
        </div>

        <div class="circular-progress" data-inner-circle-color="white" data-percentage="80" data-progress-color="#28a745" data-bg-color="grey">
            <div class="inner-circle"><p style="margin: 20px">client</p></div>
            <p class="percentage">0%</p>
        </div>
    </div>
</section>
{{--< !-- Fin section cinquieme -->--}}

{{--< !-- section sixieme -->--}}
<section class="our_client">
    <h4 class="title"><span class="text"><span class="line">Plus <strong>Info</strong></span></span></span></h4>
    <div class="row">
        <div class="row feature_box">
            <div class="span4">
                <div class="service">
                    <div class="responsive">
                        <!--									<img src="themes/images/feature_img_2.png" alt="" />-->
                        <h4>Nos <strong>Adresse</strong></h4>
                        <p>Lorem Ipsum is simply dummy text of.</p>
                        <p>Tulear centre lot 2020T tol.</p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="service">
                    <div class="customize">
                        <!--									<img src="themes/images/feature_img_1.png" alt="" />-->
                        <h4>Nos <strong>Contactez</strong></h4>
                        <h6>Nos <strong>Mail:</strong></h6><span>toliarasolution@gmail.com</span>
                        <h6>Nos <strong>WatchApp:</strong></h6><span>0343403434</span>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="service">
                    <div class="support">
                        <!--									<img src="themes/images/feature_img_3.png" alt="" />-->
                        <h4>Nos <strong>Services</strong></h4>
                        <span>Jeux</span></br>
                        <span>Reservation</span></br>
                        <span>Shop</span></br>
                        <span>Rendez-vous docteur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--< !--Fin section sixieme -->--}}



@include('partials.footer')
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });
</script>
</body>
</html>
