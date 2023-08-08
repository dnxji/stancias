<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Publicación de Noticias</title>
  <link rel="stylesheet" href="Public/css/style-publicacion.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  
  <link rel="stylesheet" href="Public/css/main.css">
</head>
<body>
<?php if(!empty($_SESSION['id_usuario'])){ ?>
    <div class="header">
    <input type="checkbox" name="" id="toggler" onchange="miFuncion()">
    <label for="toggler" class="fas fa-bars"></label>
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
        <div class="dropdownUser">
            <div class="icon">
                <a class="fas fa-user dropbtn"></a>
            </div>
            <div class="dropdownUser_content">
                <div class="icon">
                    <a  class="fas fa-user"></a>
                </div>
                <div class="usuario">
                    <h1><?php echo $usuario?> <?php echo $apellido?></h1>
                    <p><?php echo $dep?></p>
                    <form method="POST" action="index.php?m=logout">
                        <input type="submit" name="cerrar" value="Cerrar Sesion"></input>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="nav" id="lateral">
    <div class="departamentos">
        <a href="index.php"><li><i class="fas fa-home"></i></i> Novedades</li></a>
        <a href="index.php?p=propias"><li><i class="far fa-user"></i></i> Mis publicaciones</li></a>
        <a href="index.php?p=departamentos&id=1"><li><i class="far fa-circle"></i></i> Control Escolar</li></a>
        <a href="index.php?p=departamentos&id=2"><li><i class="far fa-circle"></i></i> Prácticas Profesionales</li></a>
        <a href="index.php?p=departamentos&id=3"><li><i class="far fa-circle"></i></i> Servicio Social</li></a>
        <a href="index.php?p=departamentos&id=4"><li><i class="far fa-circle"></i></i> Dirección</li></a>
        <a href="index.php?p=departamentos&id=5"><li><i class="far fa-circle"></i></i> Promocion Cultural y Deportiva</li></a>
        <a href="index.php?p=departamentos&id=6"><li><i class="far fa-circle"></i></i> Prefectura</li></a>
        <a href="index.php?p=departamentos&id=7"><li><i class="far fa-circle"></i></i> Orientación Educativa</li></a>
        <a href="index.php?p=departamentos&id=8"><li><i class="far fa-circle"></i></i> Cordinacion de Carreras</li></a>
        <li class="agregar" id="modal_btn_form" onclick="agregar()"><i class="far fa-user"><input type="text" placeholder="Agregar publicacion"></i></li>
    </div>
</div>
<?php } else {?> 
    <div class="header">
        <div class="logo">
            <input type="checkbox" name="" id="toggler" onchange="miFuncion()">
            <label for="toggler" class="fas fa-bars"></label>
            <h3>Departamentos</h3>
        </div>

        <div class="titulo">
                <h1>Novedades</h1>
            </div>
        
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
<?php } ?>   

<div class="contenido">
    <div class="encabezado">
        <p><?php echo $publi['departamento']?></p>
        <h1><?php echo $publi['titular']?></h1>
    </div>
    <article>
        <div class="imagen">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php 
                    $imagen1 = $publi['imagen1'];
                    $imagen2 = $publi['imagen2'];
                    $imagen3 = $publi['imagen3'];
                ?>
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
        <?php
            $fecha = $publi['fecha'];
            $fecha_objeto = strtotime($fecha);
            setlocale(LC_TIME, 'es_ES.utf8', 'es_ES', 'Spanish');

            // Formatear la fecha con el mes en español
            $fecha_formateada = strftime("%e de %B del %Y", $fecha_objeto);
        ?>
        <p>Fecha: <?php echo $fecha_formateada; // Salida: 7 de agosto del 2023?></p>
        
        <p><?php echo $publi['cuerpo']?></p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada ege...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada ege. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida turpis id turpis commodo, eu eleifend enim gravida. Proin efficitur auctor justo, vel elementum libero malesuada ege...</p>
    </article> 
    <div class="sidebar">
        <div class="latest-news">
            <h3>Últimas Noticias</h3>
            <div class="linea-horizontal">
                <div></div>
            </div>
            <a href="index.php?p=publicacion&id=<?php echo $ultima['id']?>">
            <div class="principal">
                <div class="imagen">
                    <img src="<?php echo $ultima['imagen1']?>" alt="">
                </div>
                <p><?php echo $ultima['titular']?></p>
            </div>
            </a>
            <?php foreach($ultimas4 as $row)
        { 
            $id = $row['id'];
            $titular = $row['titular']; 
            $imagen1 = $row['imagen1'];
        ?>  <a href="index.php?p=publicacion&id=<?php echo $id?>">
            <div class="nota">
                
                <div class="imagen">
                    <img src="<?php echo $imagen1?>" alt="">
                </div>
                <p><?php echo $titular?></p>
                
            </div>
            </a>
            <?php } ?> 

            

        </div>
    </div>
</div>
    
</body>

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