<!DOCTYPE html>
<html lang="en">
<?php
include("Views/Layouts/head.php");
?>
<body>
    <div class="header">
        <div class="logo">
            <input type="checkbox" name="" id="toggler" onchange="miFuncion()">
            <label for="toggler" class="fas fa-bars"></label>
            <h3>Departamentos</h3>
        </div>

        <?php if(isset($_GET['p']) and isset($_GET['id'])){ ?>
            <div class="titulo">
                <h1><?php echo $departamento[0] ?></h1>
            </div>
        <?php } else {?>
            <div class="titulo">
                <h1>Novedades</h1>
            </div>  
        <?php } ?>
        
        <div class="iconos">
            <div class="icon">
                <a class="fas fa-user dropbtn" href="index.php?m=login"></a>
            </div>
        </div>
    </div>

    <div class="nav" id="lateral">
        <div class="departamentos">
            <a href="index.php"><li><i class="fas fa-home"></i></i> Novedades</li></a>
            <a href="index.php?p=departamentos&id=1"><li><i class="far fa-circle"></i></i> Control Escolar</li></a>
            <a href="index.php?p=departamentos&id=2"><li><i class="far fa-circle"></i></i> Prácticas Profesionales</li></a>
            <a href="index.php?p=departamentos&id=3"><li><i class="far fa-circle"></i></i> Servicio Social</li></a>
            <a href="index.php?p=departamentos&id=4"><li><i class="far fa-circle"></i></i> Dirección</li></a>
            <a href="index.php?p=departamentos&id=5"><li><i class="far fa-circle"></i></i> Promocion Cultural y Deportiva</li></a>
            <a href="index.php?p=departamentos&id=6"><li><i class="far fa-circle"></i></i> Prefectura</li></a>
            <a href="index.php?p=departamentos&id=7"><li><i class="far fa-circle"></i></i> Orientación Educativa</li></a>
            <a href="index.php?p=departamentos&id=8"><li><i class="far fa-circle"></i></i> Cordinacion de Carreras</li></a>
        </div>
    </div>

<div class="cont">
    <div class="encabezado">
        <?php if(isset($_GET['p']) and isset($_GET['id'])){ ?>
            <h1><?php echo $departamento[0] ?></h1>
        <?php } else {?>
            <h1>Ultimas Publicaciones</h1>  
        <?php } ?>
    </div>

    <div class="principal">
        <div class="publicacion">
            <div class="imagen">
                <img src="<?php echo $ultima['imagen1']?>">
            </div>
            <div class="departamento">
                <p> <span id="underline"><?php echo $ultima['departamento']?></span></p>
            </div>
            <div class="titular">
                <a href="index.php?p=publicacion&id=<?php echo $ultima['id']?>"><h1><?php echo $ultima['titular']?></h1></a>
            </div>
            <div class="descripcion">
                <p><?php echo $ultima['cuerpo']?>.</p>
            </div>
        </div>
    </div>

    <div class="secciones">
        <div class="titulo">
            <h1>Novedades</h1>
            <div class="linea-horizontal">
                <div></div>
            </div>
        </div>
        <div class="publicaciones">
        <?php foreach($resultado as $row)
        { 
            $id = $row['id'];
            $titular = $row['titular']; 
            $fecha = $row['fecha']; 
            $imagen1 = $row['imagen1'];
            $imagen2 = $row['imagen2'];
            $imagen3 = $row['imagen3']; 
            $id_departamento = $row['id_departamento']; 
            $departamento = $row['departamento']; 
        ?>
            <div class="publicacion">
                <div class="imagen">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                        <?php if(empty($imagen3) and $imagen2==true){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                        <?php } elseif(empty($imagen2) and empty($imagen3)){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                        <?php } else{ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen3?>">
                            </div>
                        <?php } ?>
                        </div>
            
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>       
                </div>
                <div class="titulos">
                    <p> <a href="index.php?p=departamentos&id=<?php echo $id_departamento?>" style="color: #A7201F"><span><?php echo $departamento?></span> </a></p>
                </div>
                <div class="descripcion texto-limitado">
                    <h1><?php echo $titular?></h1>
                </div>
            </div>
            <?php } ?>    
        </div>
    </div>
    
    <div class="secciones">
        <div class="titulo">
            <h1>Control Escolar</h1>
            <div class="linea-horizontal">
                <div></div>
            </div>
        </div>
        <div class="publicaciones">
        <?php foreach($control as $row)
        { 
            $id = $row['id'];
            $titular = $row['titular']; 
            $fecha = $row['fecha']; 
            $imagen1 = $row['imagen1'];
            $imagen2 = $row['imagen2'];
            $imagen3 = $row['imagen3']; 
            $id_departamento = $row['id_departamento']; 
            $departamento = $row['departamento']; 
        ?>
            <div class="publicacion">
                <div class="imagen">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                        <?php if(empty($imagen3) and $imagen2==true){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                        <?php } elseif(empty($imagen2) and empty($imagen3)){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                        <?php } else{ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen3?>">
                            </div>
                        <?php } ?>
                        </div>
            
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>       
                </div>
                <div class="titulos">
                    <p> <a href="index.php?p=departamentos&id=<?php echo $id_departamento?>" style="color: #A7201F"><span><?php echo $departamento?></span> </a></p>
                </div>
                <div class="descripcion texto-limitado">
                    <h1><?php echo $titular?></h1>
                </div>
            </div>
            <?php } ?>    
        </div>
    </div>
    
    <div class="secciones">
        <div class="titulo">
            <h1>Prácticas Profesionales</h1>
            <div class="linea-horizontal">
                <div></div>
            </div>
        </div>
        <div class="publicaciones">
        <?php foreach($practicas as $row)
        { 
            $id = $row['id'];
            $titular = $row['titular']; 
            $fecha = $row['fecha']; 
            $imagen1 = $row['imagen1'];
            $imagen2 = $row['imagen2'];
            $imagen3 = $row['imagen3']; 
            $id_departamento = $row['id_departamento']; 
            $departamento = $row['departamento']; 
        ?>
            <div class="publicacion">
                <div class="imagen">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                        <?php if(empty($imagen3) and $imagen2==true){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                        <?php } elseif(empty($imagen2) and empty($imagen3)){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                        <?php } else{ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen3?>">
                            </div>
                        <?php } ?>
                        </div>
            
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>       
                </div>
                <div class="titulos">
                    <p> <a href="index.php?p=departamentos&id=<?php echo $id_departamento?>" style="color: #A7201F"><span><?php echo $departamento?></span> </a></p>
                </div>
                <div class="descripcion texto-limitado">
                    <h1><?php echo $titular?></h1>
                </div>
            </div>
            <?php } ?>    
        </div>
    </div>
    
    <div class="secciones">
        <div class="titulo">
            <h1>Dirección</h1>
            <div class="linea-horizontal">
                <div></div>
            </div>
        </div>
        <div class="publicaciones">
        <?php foreach($direccion as $row)
        { 
            $id = $row['id'];
            $titular = $row['titular']; 
            $fecha = $row['fecha']; 
            $imagen1 = $row['imagen1'];
            $imagen2 = $row['imagen2'];
            $imagen3 = $row['imagen3']; 
            $id_departamento = $row['id_departamento']; 
            $departamento = $row['departamento']; 
        ?>
            <div class="publicacion">
                <div class="imagen">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                        <?php if(empty($imagen3) and $imagen2==true){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                        <?php } elseif(empty($imagen2) and empty($imagen3)){ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                        <?php } else{ ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen1?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen2?>">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo $imagen3?>">
                            </div>
                        <?php } ?>
                        </div>
            
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>       
                </div>
                <div class="titulos">
                    <p> <a href="index.php?p=departamentos&id=<?php echo $id_departamento?>" style="color: #A7201F"><span><?php echo $departamento?></span> </a></p>
                </div>
                <div class="descripcion texto-limitado">
                    <h1><?php echo $titular?></h1>
                </div>
            </div>
            <?php } ?>    
        </div>
    </div>

    

<?php 
    include("Views/modales.php"); 
?>
</div>
</body>
<script src="Public/js/main.js"></script>
<script>
    var mediaQuery = window.matchMedia("(max-width: 900px)");

    mediaQuery.addListener(function(mediaQuery) {
    var lat = document.getElementById("lateral");
    if (mediaQuery.matches) {
        // La regla @media se cumple, realiza alguna acción
        lat.style.display = "none"
    } else {
        // La regla @media no se cumple, realiza alguna otra acción
        lat.style.display = "block"
    }
    });
</script>

<!-- Al final del body -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  // Inicializar Swiper cuando el DOM esté listo
  document.addEventListener("DOMContentLoaded", function () {
    var mySwiper = new Swiper(".swiper-container", {
      // Opciones del slider (puedes personalizarlo según tus necesidades)
      loop: true,
      spaceBetween: 30,
      slidesPerView: 1,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000,       // Tiempo de intervalo entre diapositivas en milisegundos
      },
    });
  });
</script>

</html>