<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>calendario de adviento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css">
    
    
    
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script src="mijs.js"></script>
       <script>
        $(document).ready(function(){
            $.fn.snow();
        });
        </script>
<header class="header">
    <div class="contenedor">
<div class="header__contenido">
   <!--<p class="logo">Calendario de adviendo</p>-->

</div>

    </div>
</header>
<section class="banner">
  <div class="banner__descripcion">
      <div class="contenedor">
          <font color="AliceBlue" face="Comic Sans MS,arial,verdana"><h1>Calendario de adviento</h1></font>
      </div>

  </div>

</section>
<section class="galeria">
    <font color="AliceBlue" face="Comic Sans MS,arial,verdana"><h1>Diciembre 2021</h1></font>
</section>
<br><br>
<div class="container">

<?php  date_default_timezone_set('America/Lima'); ?>

<!--1-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "1-12-2021") {
   echo '<img src="img/goth.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Uno </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/1.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Uno</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--2-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "2-12-2021") {
   echo '<img src="img/durazno.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Dos </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/2.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Dos</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--3-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "3-12-2021") {
   echo '<img src="img/pepino.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Tres </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/3.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Tres</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--4-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "4-12-2021") {
   echo '<img src="img/dibujo.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Cuatro </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/4.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Cuatro</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--5-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "5-12-2021") {
   echo '<img src="img/traje_negro.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Cinco </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/5.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Cinco</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--6-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "6-12-2021") {
   echo '<img src="img/15min.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Seis  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/6.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Seis </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--7-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "7-12-2021") {
   echo '<img src="img/dedos.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Siete  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/7.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Siete </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--8-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "8-12-2021") {
   echo '<img src="img/peluca_rubia.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Ocho  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/8.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Ocho </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--9-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "9-12-2021") {
   echo '<img src="img/conejo.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Nueve  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/9.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Nueve </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>


<!--10-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "10-12-2021") {
   echo '<img src="img/galleta_de_gengibre.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Diez  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/10.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Diez </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--11-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "11-12-2021") {
   echo '<img src="img/durazno_rec.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Once  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/11.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Once </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--12-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "12-12-2021") {
   echo '<img src="img/pezon.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Doce  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/12.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Doce </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--13-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "13-12-2021") {
   echo '<img src="img/durazno_.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Trece  </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/13.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Trece </h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--14-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "14-12-2021") {
   echo '<img src="img/sirvienta.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Catorce   </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/14.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Catorce  </h3>
        <p>Dia no disponible</p>';
}
?>

    </div>
  </div>

<!--15-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "15-12-2021") {
   echo '<img src="img/30min.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Quince    </h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/15.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Quince   </h3>
        <p>Dia no disponible</p>';
}
?>

    </div>
  </div>

<!--16-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "16-12-2021") {
   echo '<img src="img/durazno_papaya.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Dieciséis</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/16.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Dieciséis</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--17-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "17-12-2021") {
   echo '<img src="img/pijama.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Diecisiete</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/17.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Diecisiete</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--18-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "18-12-2021") {
   echo '<img src="img/ticket_dorado.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Diesiocho</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/18.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Diesiocho</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--19-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "19-12-2021") {
   echo '<img src="img/pepino_durazno.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Diecinueve</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/19.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Diecinueve</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--20-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "20-12-2021") {
   echo '<img src="img/pay_navideño.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Veinte</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/20.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Veinte</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--21-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "21-12-2021") {
   echo '<img src="img/pepino_papaya.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Veintiuno</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/21.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Veintiuno</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--22-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "22-12-2021") {
   echo '<img src="img/peluca_rosa.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Veintidós</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/22.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Veintidós</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--23-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "23-12-2021") {
   echo '<img src="img/nutriologa.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Veintitrés</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/23.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Veintitrés</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>

<!--24-->   
<div class="item">
      <?php
$fecha = date("d-m-Y"); 

if ($fecha == "24-12-2021") {
   echo '<img src="img/rodolfo.jpg" class="item-img">';
   ?>
   <div class="item-text">;
    <?php
   echo '<h3>Dia Veinticuatro</h3>
        <p>a divertirse</p>';
} 
else {
    echo '<img src="img/24.jpeg" class="item-img">';
    ?>
   <div class="item-text">;
    <?php
    echo '<h3>Dia Veinticuatro</h3>
        <p>Dia no disponible</p>';
}
?>
    </div>
  </div>



</div>

<br><br><br><br><br><br><br><br>

    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>K</h4>
            </div>
            <div class="content-foo">
                <h4>y</h4>
            </div>
            <div class="content-foo">
                <h4>C</h4>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Anonimos traviesos</h2>
    </footer>

</footer>

</body>
</html>