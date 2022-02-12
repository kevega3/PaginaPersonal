<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--LETRAS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,600&family=Raleway:wght@200&display=swap" rel="stylesheet"> 


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c4cc899971.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../web/css/efectoNeon.css">
    <link rel="stylesheet" href="../../web/css/info.css">
    <link rel="stylesheet" href="../../web/css/iconos.css">
    <link rel="stylesheet" href="../../web/css/resumen.css">
    <link rel="stylesheet" href="../../web/css/footer.css">
     <link rel="stylesheet" href="../../web/css/portafolio.css"> 
    <link rel="stylesheet" href="../../web/css/contacto.css">
    <link rel="stylesheet" href="../../web/css/prueba.css">
    <link rel="stylesheet" href="immersive-slider.css">
    <link rel="stylesheet" href="../../web/css/formulario.css">
<?php
include("../../Templates/Links.php") 
 ?>
 <link rel="stylesheet" href="../../web/css/Menu.css">
 <link rel="stylesheet" href="../../web/css/stilos.css">
 <link rel="stylesheet" href="../../web/css/main.css">
 <!--funtes-->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,900&display=swap" rel="stylesheet">



 <!--final-->
 <title>Kevin's Vega</title>
 <!--icono-->   
 <link rel="icon" href="../../img/NuevoLogo.png">
 <!---->
</head>
<body >



    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    



<section id="Imagen" class="particulas">


    <div class="HeaderContenedor">
        <div class="ContenedorSegundario">
        <!-- <div class="videoContenedor"> -->
            <div id="particles-js"></div>
       <!--  </div> -->

         <div class="contentSub"> 
            <p class="Subtitulo">Diseño Web/Programacion Web/Junior</p>
            <h2 class="escritura"><span class="typed"></span></h2>
        </div> 

        <!-- <div class="contentBtn"> -->
            <a href="https://drive.google.com/file/d/1YaHQDVPZs37Yonc4EoEP1CWGeBnSIbix/view?usp=sharing" class="btn btonHV" target="_blank">DESCARGAR HV</a>
        <!-- </div> -->
        </div>



    </div>
   


</section>

<!--MENU-->
    <div class="sticky-sm-top">
        <?php include("Menu.php") ?></div>
    <!--fINALMENU-->
<section id="acercaDemi">
<!--Info-->

<?php include("info.php") ?>   
<div>

</div>
</section>



<section id="Resumen">
<!--Resumen-->

<?php include("resumen.php") ?>   
</section>

<section id="Portafolio">
    <?php include("demo.html") ?>
</section>


<section id="Contacto">
    

    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-md-block col-md-1 col-lg-1 bloque2-azul">
                <div class="bloque2-azul"></div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-10 contenedorContacto">
                     <div class="row">
                        
                        <div class="col-md-6 col-lg-6 contenedorIconos">  
                             <div class="iconoContacto">
                                    <div class="IconoSimbolo">
                                        <i class="fas fa-envelope iconoCont "></i>
                                    </div>

                                    <div class="TextoContacto">
                                        <h2 class="">Email</h2>
                                        <p>antirap3@gmail.com</p>   
                                    </div>

                                 <!--Final iconoContacto-->
                             </div>
                             <div class="iconoContacto">
                                 <div class="IconoSimbolo">
                                        <i class="fas fa-phone iconoCont"></i>
                                 </div>

                                 <div class="TextoContacto">
                                        <h2 class="">Celular</h2>
                                        <p>+52 311 444 40 64</p>   
                                </div>
                                 
                             </div>
                             <div class="iconoContacto">

                                <div class="IconoSimbolo">
                                        <i class="fas fa-map-marker-alt iconoCont"></i>
                                 </div>

                                 <div class="TextoContacto">
                                        <h2 class="">Dirección</h2>
                                        <p>Cra 107 a # 70F 76</p>   
                                </div>
                                 
                             </div>

                        </div>

                        <div class="col-md-6 col-lg-6 contenedorContactos">
                            <?php include("formulario.html") ?>
                        </div>                       
                     </div>   
                     
            </div>

            <div class="d-none d-md-block col-md-1 col-lg-1 bloque2-azul">
                <div class="bloque2-azul"></div>
            </div>
        
   
        <!--Final row-->
        </div>
    <!--Fin contenedor-->
    </div>
</section>




<section>
    <?php include("footer.php") ?>
</section>



























































<!--Idioma-->
 <script src="../../web/js/idioma.js"></script>

<!--Particulas-->
<script src="../../web/js/particles.min.js"></script>
<script src="../../web/js/app.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--Smooth Scroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../../web/js/BajaLento.js"></script>

<!--Carousel-->
<script src="jquery.immersive-slider.js"></script>


<!--formulario-->
<script src="../../web/js/formulario.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--Scrips LETRAS-->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="../../web/js/main.js"></script>
</body>
<!--icono carga-->
<script>
        window.onload=function(){
            var contenedor = document.getElementById('contenedor_carga');

            contenedor.style.visibility='hidden';
            contenedor.style.opacity='0';
            
        }
    </script>

</html>