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


<section class="header_text sub">
    <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
    <h4><span>Login et Inscription</span></h4>
</section>
<section class="main-content">
    <div class="row">
        <div class="span5">
            <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
            <form action="#" method="post">
                <input type="hidden" name="next" value="/">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Nom</label>
                        <div class="controls">
                            <input type="text" placeholder="Enter votre nom" id="username" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Prenom</label>
                        <div class="controls">
                            <input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <input tabindex="3" class="btn btn-inverse large" type="submit" value="Connectez">
                        <hr>
                        <p class="reset">Oublier <a tabindex="4" href="#" title="Recover your username or password">Nom ou password</a></p>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="span7">
            <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
            <form action="#" method="post" class="form-stacked">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Nom</label>
                        <div class="controls">
                            <input type="text" placeholder="Entre votre Nom" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email :</label>
                        <div class="controls">
                            <input type="password" placeholder="Votre mail email" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Password:</label>
                        <div class="controls">
                            <input type="password" placeholder="Votre password" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">personage</label>
                        <div class="controls">
                            <select name="cars" id="cars">
                                <option value="volvo">client</option>
                                <option value="saab">jeux</option>
                                <option value="opel">cooperative</option>
                                <option value="audi">comerciale</option>
                                <option value="audi">docteur</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum?</p>
                    </div>
                    <hr>
                    <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Créer votre compte"></div>
                </fieldset>
            </form>
        </div>
    </div>
</section>

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
