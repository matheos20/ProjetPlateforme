
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tool'art Solution || Bienvenue Jeux</title>
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
<style>
    .wrapper {
        width: fit-content;
        margin: 0 auto;
        display: flex;
        /*flex-direction: column;*/
        gap: 1rem;
        align-items: center;
    }

    .better-outline {
        font-family: inherit;
        font-size: 1rem;
        color: inherit;
        border: none;
        border-radius: calc((1rem + 1.25rem * 2) / 2);
        background-color: #333;
        padding: 0.75rem 1.25rem;
        box-shadow: none;
        transition: box-shadow 0.15s;
    }

    .better-outline::placeholder {
        font-style: italic;
    }

    /* Outline styles */
    .better-outline:focus {
        --width: 3px;
        --color: #1bdaf7;

        outline: transparent;
        box-shadow: 0 0 0px 3px #1bdaf7;
    }


    /* Ignore this */

    .better-outline.active {
        --width: 3px;
        --color: #1bdaf7;

        outline: transparent;
        box-shadow: 0 0 0px 3px #1bdaf7;
    }



    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-radius: 5px;
        overflow: hidden;
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr:hover {
        background-color: #e0f7fa;
        color: #009879;
        font-weight: bold;
    }

    /* Caption styling */
    .styled-table caption {
        font-size: 1.2em;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    .modal {
        display: none;
        position: fixed;
        /*z-index: 1;*/
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        width: 12%;
        height: 35%;
        border-radius: 8px;
    }
    .close {
        float: right;
        font-size: 24px;
        cursor: pointer;
    }
    #btnEnregister{
        background-color: #009879;
        color: #fff;
        margin-left: 35px;
        margin-top: 15px
    }
    #choix{
        width: 100px;
    }

    #btnADD {
        margin-top: -10px;
        text-align: center;
        height: 37px;
        left: 20px;
        background-color: #009879;
        color: #ffff;
    }
    .delete{
        border: none;
        color: red;
        background: white;
    }


</style>
@include('partials.headerJeux')




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


<section class="main-content">
    <div class="row">
        <div class="span12">
            <h4 class="title">
                <span class="pull-left"><span class="text"><span class="line">Services <strong>Jeux 🎮</strong></span></span></span>
            </h4>

            <div class="jeux">
                <h4 style="text-align: center">Saisir votre nombre</h4>
                <form method="POST" action="{{ route('jeux.store') }}" class="wrapper">
                    @csrf
                    <input type="number"  name="choix1" placeholder="Choix 1" class="better-outline" required id="choix">
                    <input type="number" name="choix2" placeholder="Choix 2" class="better-outline" required id="choix">
                    <input type="number" name="choix3" placeholder="Choix 3" class="better-outline" required id="choix">
                    <input type="number" name="choix4" placeholder="Choix 4" class="better-outline" required id="choix">
                    <input type="number" name="jackpot" placeholder="Jackpot" class="better-outline" required id="choix">
                    <button type="submit" class="btn" id="btnADD">Ajouter</button>
                </form>
            </div>

            <table class="styled-table">
                <caption>Historique des Jeux</caption>
                <thead>
                <tr>
                    <th>N° Ticket</th>
                    <th>Choix 1</th>
                    <th>Choix 2</th>
                    <th>Choix 3</th>
                    <th>Choix 4</th>
                    <th>Jackpot</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jeux as $jeu)
                    <tr>
                        <td>{{ $jeu->id }}</td>
                        <td>{{ $jeu->choix1 }}</td>
                        <td>{{ $jeu->choix2 }}</td>
                        <td>{{ $jeu->choix3 }}</td>
                        <td>{{ $jeu->choix4 }}</td>
                        <td>{{ $jeu->jackpot }}</td>
                        <td>
                            <a href="#" class="edit" data-id="{{ $jeu->id }}" data-choix1="{{ $jeu->choix1 }}" data-choix2="{{ $jeu->choix2 }}" data-choix3="{{ $jeu->choix3 }}" data-choix4="{{ $jeu->choix4 }}" data-jackpot="{{ $jeu->jackpot }}" data-toggle="modal" data-target="#editModal">
                                <i class="fa-solid fa-pen" style="color: green"></i>
                            </a>

                            <form action="{{ route('jeux.destroy', $jeu->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete" onclick="return confirm('Confirmer la suppression ?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- MODAL DE MODIFICATION -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h4 style="text-align: center">Modifier le Jeu</h4>
        <form method="POST" action="" id="editForm">
            @csrf
            @method('PUT')
            <input type="number" name="choix1" id="editChoix1" placeholder="Choix 1" class="better-outline" required>
            <input type="number" name="choix2" id="editChoix2" placeholder="Choix 2" class="better-outline" required>
            <input type="number" name="choix3" id="editChoix3" placeholder="Choix 3" class="better-outline" required>
            <input type="number" name="choix4" id="editChoix4" placeholder="Choix 4" class="better-outline" required>
            <input type="number" name="jackpot" id="editJackpot" placeholder="Jackpot" class="better-outline" required>
            <button type="submit" class="btn" id="btnEnregister">Enregistrer</button>
        </form>
    </div>
</div>



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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById("editModal");
        const closeBtn = document.querySelector(".close");
        const editForm = document.getElementById("editForm");

        document.querySelectorAll(".edit").forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault();
                const id = this.dataset.id;
                document.getElementById("editChoix1").value = this.dataset.choix1;
                document.getElementById("editChoix2").value = this.dataset.choix2;
                document.getElementById("editChoix3").value = this.dataset.choix3;
                document.getElementById("editChoix4").value = this.dataset.choix4;
                document.getElementById("editJackpot").value = this.dataset.jackpot;
                editForm.action = `/jeux/${id}`;
                modal.style.display = "block";
            });
        });

        closeBtn.addEventListener("click", function () {
            modal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    });
</script>
</body>
</html>
