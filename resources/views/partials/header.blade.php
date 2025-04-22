{{--< !-- sub Menu-- >--}}
<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="Rechercher ...">
            </form>
        </div>
        <div class="span8">
            <nav class="account pull-right" id="menu">
                <ul class="user-menu">
                    <li><a href="#">Inscription</a></li>
                    <li><a href="register.html">Login</a>
                    </li>
                    <li><a href="#">Déconnecter</a></li>

                </ul>
            </nav>
        </div>
    </div>
</div>
{{--< !--Fin sub Menu-- >--}}



<div id="wrapper" class="container">
    {{--< !--  Menu-- >--}}
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="index.html" class="logo pull-left"><img src="{{ asset('images/log.png') }}" alt="Logo" class="site_logo"></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href="#">Game</a></li>
                            <li><a href="./products.html">Shop</a></li>
                            <li><a href="./reservation.html">Reservation</a></li>
                            <li><a href="./docteur.html">Docteur</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </section>
{{--< !--Fin Menu-- >--}}
