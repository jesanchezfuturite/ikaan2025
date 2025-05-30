<header class="large">
	<nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('assets/img/logo-ikaan-White.png') }}" class="img-responsive nuevoIcnoMovil" alt="icono">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                    <li><a href="{{ url('servicios') }}">Servicios</a></li>
                    <li><a href="{{ url('amenidades') }}">Amenidades</a></li>
                    <li><a href="{{ url('reservacion-ikaan') }}">Reservaciones</a></li>
                    <li><a href="{{ url('contacto') }}">Contacto</a></li>
                    <li>
                        <a href="en/index-en.php">
                             <img src="{{ url('assets/img/ingles.png') }}" class="img-responsive bandera" alt="icono">
                        </a>
                   </li>
                    <li><a href="index.php">
                        <img src="{{ url('assets/img/espanol.png') }}" class="img-responsive bandera" alt="icono">
                    	</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
	</nav>
</header>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).on("scroll", function() {
        if($(document).scrollTop()>300) {
            $("header").removeClass("large").addClass("large");
        } else {
            $("header").removeClass("large").addClass("large");
        }

    });
</script>