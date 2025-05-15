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
                    <li><a href="#">name user</a></li>
                    </li>
                    <li><a href="{{ route('auth.logout') }}">Déconnecter</a></li>

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
            <a href="{{ route('home.page') }}" class="logo pull-left"><img src="{{ asset('images/log.png') }}" alt="Logo" class="site_logo"></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="{{ route('home.page') }}">Home</a></li>
                    <li><a href="#">Nouveau jeux</a></li>
                    <li><a href="contact.html">Resultat</a></li>
                </ul>
            </nav>
        </div>
    </section>
{{--< !--Fin Menu-- >--}}
