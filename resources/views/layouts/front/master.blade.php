<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="description" content="Hotel Ikaan Villa Spa queremos que nuestros huéspedes experimenten la paz física y mental a través de distintas actividades de relajación dentro de nuestras instalaciones">
    <meta name="keywords" content="Hotel Ikaan Villa Spa ">
    <meta name="author" content=" servicios de spa, un programa alimenticio perzonalizado.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Metatags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Metodikat TI">

    <!-- Structured data -->
    <!--Start Datos Estructurados-->
    <meta property="og:title" content="Hotel Ikaan Villa Spa queremos que nuestros hu�spedes experimenten la paz f�sica y mental a trav�s de distintas actividades de relajaci�n" />
    <meta property="og:image" content="http://www.ikaan-master/assets/img/home/hospitaria-id-alt-navbar.png" />
    <meta property="og:url" content="http://www.ikaan-master/index.php/" />
	<script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function()

            {n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}
            ;
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '233984170493805',

                { 'em': 'mail', 'fn': 'nombre', 'ln': 'apellido', 'ge': 'genero', 'db': 'fecha', 'ct': 'ciudad', }
            );
            fbq('track', 'PageView');
   	</script>
   	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=233984170493805&ev=PageView&noscript=1"/></noscript>
    <title> @yield('pageTitle') - {!! ENV('APP_NAME') !!} </title>
   	<link rel="shortcut icon" href="assets/img/favicon-ikaan.ico">

   	<!--Preloader -->
   	<link href="{{ url('assets/css/preloader.css') }}" rel="stylesheet" />
   	<script src="{{ url('assets/js/preloader.js') }}"></script>
   	<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

   	<!-- FONTAWESOME -->
   	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   	<link href="{{ url('assets/css/main.css') }}" rel="stylesheet" />
   	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
        <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
        </style>
     <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
            window.$zopim||(function(d,s){var z=$zopim=function(c){
                z._.push(c)},$=z.s=
                d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
            _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
                $.src='https://v2.zopim.com/?5Oe74yHrr8U3dM76GdpRJ3B4Q9zKNqXI';z.t=+new Date;$.
                    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-107571531-1', 'auto');
        ga('send', 'pageview');

    </script>

    <link rel="stylesheet" type="text/css" href="{{ url('assets/js/front/bxslider-4-4.2.12/dist/jquery.bxslider.min.css') }}">
    
    <link href="assets/js/lightbox/src/css/lightbox.css" rel="stylesheet">


    <meta name="google-site-verification" content="WjlE6fSUyApxW8xUF7VkvI4dnMNO42GW1Qg4GXM5TPY" />
    <!--End Redes Sociales-->
    <script type="application/ld+json">
        {
         "@context" : "http://schema.org",
         "@type" : "Organization",
         "name" : "WooRank",
         "url" : "https://www.ikaan.com.mx",
         "sameAs" : [
           "https://www.facebook.com/ikaanVillaSpa"
          ]
        }
    </script>
	@section('pageCSS')
    @show
</head>



<body>



    <div id="pageContent" class="main-wrapper">



        {{--  Header section --}}

        @include('layouts.front.partials.header')





        {{-- Content section --}}

        @yield('content')



        {{-- Footer section --}}

        @include('layouts.front.partials.footer')

    </div>



    {{--  Page JS --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="{{ url('assets/lib/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="assets/js/lightbox/src/js/lightbox.js"></script>
    <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
    <script src="{{ url('assets/js/front/confirmacion_pago.js') }}"></script>

    <!--Home-->
    
    <script>
        $(function() {
            $("img.lazy").lazyload();
        });
    </script>
    <script src="js/gmaps.min.js"></script>
    <script  src="js/sucursales.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX1pkPNu8_XHaTKtnMGyCqGclN6W8gPPQ&callback=initMap" type="text/javascript"></script>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Home-->
    <!--Home-->
    <!--Home-->
    <!--Home-->
    <!--Home-->
    <!--Home--> 

    @section('pageJS')

    @show
</body>

</html>

