<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>responsive catalogo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'  href="{{ asset('css/styleindex.css')}}">
    <script src="https://kit.fontawesome.com/018bf9d29d.js" crossorigin="anonymous"></script>
    <script defer src="{{ asset('js/bar-para-movil.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body>
    
    <section class="header">
        <div class="caja-logo">
        <img class="logo" src="{{ asset('image/GHO BELA.png') }}">
        </div>
        <button class="nav-toggle">
            <i class="fa-solid fa-bars fa-xl"></i>
        </button>
        <div class="nav">
            <ul class="nav-menu ">
                <li class="nav-menu-item">
                    <a href="{{ route('Navigation.home')}}" class="nav-menu-link inactive">INICIO</a></li>
                <!--
                    <li class="nav-menu-item">
                    <a href="{{ route('Navigation.catalogo')}}" class="nav-menu-link inactive">CATALOGO</a></li>
                    -->
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link active">NOSOTROS</a></li>
                <li class="nav-menu-item">
                    @Auth
                        <a href="{{route ('dashboard')}}" class="nav-menu-link inactive">{{Auth::user()->name}}</a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" class="nav-menu-link inactive">LOGIN</a>    
                    @endguest
                </li>
            </ul>
        </div>
    </section>
    <section class="baner">
        <!--background-image: url('image/Carta_de_presentación.png')-->
    <div class="cartaP" style="background-image: url({{ asset('image/cocha.png')}})" >
        <div class="texto">
            <p class="bienv1"><span class="bienvini">BIENVENIDO A </span> GHO BELA</p>
            <p class="bienv2">¿BUSCAS DISEÑOS PERSONALIZADOS?<br>NOSOTROTROS PODRIAMOS AYUDARTE</p>
       </div>
    </div>
</section>
    
 
<!--ventana modal detalles producto-->
<section class="contactanossect">
    <div class="columna colum">
        <label class="labelcontact" for="nombre">Nombre:</label>

        <input class="inputcontact" type="text" id="nombre" name="nombre" required>
        
        <label class="labelcontact" for="email">Email:</label>

        <input class="inputcontact" type="email" id="email" name="email" required>
        
        <label class="labelcontact" for="telefono">Teléfono:</label>

        <input class="inputcontact" type="tel" id="telefono" name="telefono">

        <button type="button" class="enviar"> ENVIAR</button>
      </div>
      
      <div class="columna-mensaje colum">
        <p class="encavezado">¿quieres contactarnos?</p>
        <label class="labelcontact" for="mensaje">Mensaje:</label>
        <input class="inputcontact mensaje" type="text" id="mensaje" name="mensaje" required>
      </div>
      
      <div class="columna-maps colum">
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2523.8484156241057!2d-68.12272818905221!3d-16.503964447399433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2066540d5ceb%3A0x643721d1c13d4b2c!2sUniversidad%20Privada%20Domingo%20Savio!5e0!3m2!1ses-419!2sbo!4v1697580957588!5m2!1ses-419!2sbo" width="500" height="787" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!-- Contenido del maps -->
        </div>
      </div>
</section>
    <section class="footer">    
        <div class="fila-contactos">
            <h2>Contacto</h2>
            <p>Email: ejemplo@correo.com</p>
            <p>Teléfono: +123456789</p>
          </div>
          <div class="fila-redes">
            <h2>Redes Sociales</h2>
            <br>
            <a  href="#" class="1c"><i class="fa-brands fa-facebook fa-2xl " style="color: #fbf9fe;"></i></a>
            <a  href="#"class="1c"><i class="fa-solid fa-globe fa-2xl " style="color: #fbf9fe;"></i></a>
            <a  href="#"class="1c"><i class="fa-solid fa-envelope fa-2xl " style="color: #fbf9fe;"></i></a>
            <a  href="#"class="1c"><i class="fa-brands fa-whatsapp fa-2xl " style="color: #fbf9fe;"></i></a>
          
            </div>
    </section>
    <section class="footer2">
        <p>© GHO Bela - Todos los derechos reservados</p>
    </section>
</body>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<!--script de swiper-->
<script src="{{ asset('js/swiper-scriptslidecat.js') }}"></script>
</html>