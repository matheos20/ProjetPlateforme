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
<style>
    #validation {
        display: none;
    }
</style>

<body>

@include('partials.header')


<section class="header_text sub">
    <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
    <h4><span>Login et Inscription</span></h4>
</section>
<section class="main-content">
    <div class="row">
        <!-- LOGIN -->
        <div class="span5">
            <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>

            {{-- Affichage des messages --}}
            @if(session('message'))
                <div class="alert alert-info">{{ session('message') }}</div>
            @endif

            @if(session('success_confirm'))
                <div class="alert alert-success">{{ session('success_confirm') }}</div>
            @endif

            @if(session('error_confirm'))
                <div class="alert alert-danger">{{ session('error_confirm') }}</div>
            @endif

            @if(session('error_login'))
                <div class="alert alert-danger">{{ session('error_login') }}</div>
            @endif
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input type="email" name="email" placeholder="Entrer votre email" class="input-xlarge" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Votre mot de passe" class="input-xlarge" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <input class="btn btn-inverse large" type="submit" value="Connectez">
                        <hr>
                        <p class="reset">Oublié ? <a href="#">Nom ou mot de passe</a></p>
                    </div>
                </fieldset>
            </form>
        </div>

        <!-- REGISTER -->
        <div class="span7">
            <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>

            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p style="color: red">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('auth.register') }}" method="POST" class="form-stacked">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Nom</label>
                        <div class="controls">
                            <input type="text" name="name" placeholder="Entrer votre Nom" class="input-xlarge" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email :</label>
                        <div class="controls">
                            <input type="email" name="email" placeholder="Votre adresse email" class="input-xlarge" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Mot de passe:</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Votre mot de passe" class="input-xlarge" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Rôle</label>
                        <div class="controls">
                            <select name="role" class="input-xlarge" required>
                                <option value="client">client</option>
                                <option value="jeux">jeux</option>
                                <option value="cooperative">cooperative</option>
                                <option value="comerciale">comerciale</option>
                                <option value="docteur">docteur</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <p>En vous inscrivant, vous acceptez nos conditions d'utilisation.</p>
                    </div>
                    <hr>
                    <div class="actions">
                        <input class="btn btn-inverse large" type="submit" value="Créer votre compte">
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="span6 col-md-4">
            <h4 class="title"><span class="text"><strong>Code</strong> de confirmation</span></h4>
            <form action="{{ route('confirm.code') }}" method="POST" class="validation" id="validation">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input type="email" name="email" placeholder="Votre email" class="input-xlarge form-control" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Code reçu</label>
                        <div class="controls">
                            <input type="text" name="code" placeholder="Entrez le code" class="input-xlarge form-control" required>
                        </div>
                    </div>
                    <hr>
                    <div class="actions">
                        <input class="btn btn-dark btn-block" type="submit" value="Confirmer le code">
                    </div>
                </fieldset>
            </form>
            <form method="POST" action="{{ route('resend.code') }}">
                @csrf
                <input type="hidden" name="email" value="{{ old('email') }}">
                <button type="submit" class="btn btn-warning">Renvoyer le code</button>
            </form>
        </div>

    </div>
</section>

@include('partials.footer')

@if(session('need_confirmation'))
    <script>
        $(document).ready(function () {
            // Affiche le formulaire de confirmation
            $('#validation').fadeIn();

            // Préremplit l'email si transmis depuis la session
            @if(session('email'))
            $('input[name="email"]').val('{{ session('email') }}');
            @endif

            // Scroller vers le formulaire
            $('html, body').animate({
                scrollTop: $('#validation').offset().top
            }, 600);
        });
    </script>
@endif

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
