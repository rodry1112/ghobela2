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
        <img class="logo" src="{{ asset('image/GHO BELA.png') }}" >
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
                    <a href="#" class="nav-menu-link active">CATALOGO</a></li>
                -->
                <li class="nav-menu-item">
                    <a href="{{ route('Navigation.nosotros')}}" class="nav-menu-link inactive">NOSOTROS</a></li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link inactive">LOGIN</a></li>
            </ul>
        </div>
        <!--<i class="fa-solid fa-bars"></i>-->
    </section>
    <section class="contenedoraux-catalog">
        <section class="slideCatalogo swiper">
          <div class="slideContenido">
          <div class="slideContenedor swiper-wrapper" >
          <div class="tarjeta swiper-slide">
          <div class="imagenCatalogoTarjeta">
          <span class="overlay"></span>
          <div class="tarjeta-Imagen">
          <img src="{{ asset('image/ejemplocat.jpg') }}" alt="" class="tarjeta-img">
          </div>
          </div>
          <!--texto slide catalogo-->
          <div class="tarjeta-texto">
          <h2 class="nombrecat">ejemplo cat</h2>
          </div>
          </div>
          <div class="tarjeta swiper-slide">
          <div class="imagenCatalogoTarjeta">
          <span class="overlay"></span>
          <div class="tarjeta-Imagen">
          <img src="{{ asset('image/ejemp2.jpg') }}" alt="" class="tarjeta-img">
          </div>
          </div>
          <!--texto slide catalogo-->
          <div class="tarjeta-texto">
          <h2 class="nombrecat">ejemplo cat</h2>
          </div>
          </div>

          <div class="tarjeta swiper-slide">
              <div class="imagenCatalogoTarjeta">
              <span class="overlay"></span>
              <div class="tarjeta-Imagen">
              <img src="{{ asset('image/ejemp3.jpg') }}" alt="" class="tarjeta-img">
              </div>
              </div>
              <!--texto slide catalogo-->
              <div class="tarjeta-texto">
              <h2 class="nombrecat">ejemplo cat</h2>
              </div>
              </div>
        
              <!--primer contenedor-->
              <div class="tarjeta swiper-slide">
                  <div class="imagenCatalogoTarjeta">
                  <span class="overlay"></span>
                  <div class="tarjeta-Imagen">
                  <img src="{{ asset('image/ejemp4.jpg') }}" alt="" class="tarjeta-img">
                  </div>
                  </div>
                  <!--texto slide catalogo-->
                  <div class="tarjeta-texto">
                  <h2 class="nombrecat">ejemplo cat</h2>
                  </div>
                  </div>
                  <!--segundo contenedor-->
                  <div class="tarjeta swiper-slide">
                      <div class="imagenCatalogoTarjeta">
                      <span class="overlay"></span>
                      <div class="tarjeta-Imagen">
                      <img src="{{ asset('image/ejemplocat.jpg') }}" alt="" class="tarjeta-img">
                      </div>
                      </div>
                      <!--texto slide catalogo-->
                      <div class="tarjeta-texto">
                      <h2 class="nombrecat">ejemplo cat</h2>
                      </div>
                      </div>
                      <!--tercer contenedor-->
                      <div class="tarjeta swiper-slide">
                          <div class="imagenCatalogoTarjeta">
                          <span class="overlay"></span>
                          <div class="tarjeta-Imagen">
                          <img src="{{ asset('image/ejemplocat.jpg') }}" alt="" class="tarjeta-img">
                          </div>
                          </div>
                          <!--texto slide catalogo-->
                          <div class="tarjeta-texto">
                          <h2 class="nombrecat">ejemplo cat</h2>
                          </div>
                          </div>
          </div>
          </div>
          
          <!--area los botones de interaccion del slide-->
          <div class="swiper-button-next c"></div>
          <div class="swiper-button-prev c"></div>
          <div class="swiper-pagination c"></div>
          </section>
        </section>
        
    
    <section class="productogrid">
        <div class="item">
            <div class="foto-con">
            <figure class="img-prod">
            <img class="foto-prod" src="{{ asset('image/polera.jpg') }}" >
        </figure>
            </div>
            <div class="nombre-con"><p>nombre del producto</p></div>
<!--boton de ingreso a la ventana modal-->
<div class="boton-modal">
    <label for="btn-modal">ME INTERESA</label>
</div>
        </div>
        <div class="item">
            <div class="foto-con">
            <figure class="img-prod">
            <img class="foto-prod" src="{{ asset('image/polera.jpg') }}" >
        </figure>
            </div>
            <div class="nombre-con"><p>nombre del producto</p></div>
<!--boton de ingreso a la ventana modal-->
<div class="boton-modal">
    <label for="btn-modal">ME INTERESA</label>
</div>
        </div>
        <div class="item">
            <div class="foto-con">
            <figure class="img-prod">
            <img class="foto-prod" src="{{ asset('image/polera.jpg') }}" >
        </figure>
            </div>
            <div class="nombre-con"><p>nombre del producto</p></div>
<!--boton de ingreso a la ventana modal-->
<div class="boton-modal">
    <label for="btn-modal">ME INTERESA</label>
</div>
        </div>
        <div class="item">
            <div class="foto-con">
            <figure class="img-prod">
            <img class="foto-prod" src="{{ asset('image/polera.jpg') }}" >
        </figure>
            </div>
            <div class="nombre-con"><p>nombre del producto</p></div>
<!--boton de ingreso a la ventana modal-->
<div class="boton-modal">
    <label for="btn-modal">ME INTERESA</label>
</div>
        </div>
        <div class="item">
            <div class="foto-con">
            <figure class="img-prod">
            <img class="foto-prod" src="{{ asset('image/polera.jpg') }}" >
        </figure>
            </div>
            <div class="nombre-con"><p>nombre del producto</p></div>
<!--boton de ingreso a la ventana modal-->
<div class="boton-modal">
    <label for="btn-modal">ME INTERESA</label>
</div>
        </div>
        <div class="item">
            <div class="foto-con">
            <figure class="img-prod">
            <img class="foto-prod" src="{{ asset('image/polera.jpg') }}" >
        </figure>
            </div>
            <div class="nombre-con"><p>nombre del producto</p></div>
<!--boton de ingreso a la ventana modal-->
<div class="boton-modal">
    <label for="btn-modal">ME INTERESA</label>
</div>
        </div>
    </section>
    <section class="contenedoraux-prod">
    <section class="slideproducto swiper">
        <div class="slideprodcontenido">
        <div class="slideContenedor swiper-wrapper">
            <div class="tarjeta swiper-slide">
                <div class="item">
                    <figure class="img-prod slide-img-p">
                    <img class="img-slide-p" src="{{ asset('image/ejemp2.jpg') }}">
                </figure>
                    <p class="nombreProd">nombre del producto</p>
                    <!--boton de ingreso a la ventana modal-->
                    <div class="boton-modal">
                        <label for="btn-modal">ME INTERESA</label>
                    </div>
                </div>
            <!--texto slide catalogo-->
            </div>
            <div class="tarjeta swiper-slide">
                <div class="item">
                    <figure class="img-prod slide-img-p">
                    <img class="img-slide-p" src="{{ asset('image/ejemp2.jpg') }}">
                </figure>
                    <p class="nombreProd">nombre del producto</p>
                    <!--boton de ingreso a la ventana modal-->
                    <div class="boton-modal">
                        <label for="btn-modal">ME INTERESA</label>
                    </div>
                </div>
            </div>
            <div class="tarjeta swiper-slide">
                <div class="item">
                    <figure class="img-prod slide-img-p">
                    <img class="img-slide-p" src="{{ asset('image/ejemp2.jpg') }}">
                </figure>
                    <p class="nombreProd">nombre del producto</p>
                    <!--boton de ingreso a la ventana modal-->
                    <div class="boton-modal">
                        <label for="btn-modal">ME INTERESA</label>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--area los botones de interaccion del slide-->
        <div class="swiper-button-next ps"></div>
        <div class="swiper-button-prev ps"></div>
        <div class="swiper-pagination ps"></div>
        </section>
    </section>
<!--ventana modal detalles producto-->
<input type="checkbox" id="btn-modal"> 
<div class="contenedor-Vmodal">
    <div class="contenido-Vmodal">
        <div class="boton-cerrarVmodal">
            <label for="btn-modal">
                <i class="fa-solid fa-x fa-sm"></i>
            </label>
        </div>
        <div class="contenVmodal">
            <div class="cont1">
                <div class="nombreprodM">
                  <h3 class="mnombreprod">producto</h3>
                </div>
                <div class="img-prodm">
                  <img class="img-vm" src="{{ asset('image/polera.jpg') }}">
              
                </div>
               </div>
              
               <div class="cont2">
              <div class="contenido1">
                       <p class="p1">Precio:<span class="p2"> $99.99</span></p>
                       <p class="p1">Tallas:<span class="p2"> S, M, L</span></p>
                       <p class="p1">Género:<span class="p2"> Unisex</span></p>
              </div>
              <div class="contenido2">
                <p class="p1">Temporada:<span class="p2"> Primavera/Verano</span></p>
                  <p class="p1">Colores:<span class="p2"> Rojo, Azul, Verde</span></p>
              </div>
              <div class="descripcion">
                <p class="p3">Descripción:<span class="p2"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consequatur ad molestiae eum repellendus aperiam?</span></p>
                  <button type="button" class="consultanos">¡¡CONSULTANOS!!</button>
                </div>
               </div>

        </div>
    </div>
    <!--cierre de la Vmodal con el fondo-->
    <label for="btn-modal" class="cerrar-modal"></label>
</div>
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
<script src="{{ asset('js/scriptslidecat.js') }}"></script>
</html>