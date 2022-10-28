<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <title>Soporte</title>
</head>
<body>
<?php include "template/header.php"; ?>
<br><br><br><br><br>
<div class="about-section">
  <h1>Servicio Tecnico</h1>
  <p>Mantenimiento y reparacion de equipos de computo</p>
  <p>En Computo San Agustin encontrara tecnicos altamente capacitaos para sale solucion a sus problemas <br>
     y dejar su equipo en perfectas condiciones para s funcionamiento y uso diario</p>
</div>

<h2 style="text-align:center">Nuestros Servicios</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://img.freepik.com/fotos-premium/tecnologia-pc-taller-reparacion-computadoras-ingeniero-realizando-mantenimiento-portatiles-desarrollador-hardware-arreglando-componentes-electronicos_253401-2027.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Servicios Tecnico - Laptops</h2>
        <p class="title">Tiendas 1 y 2</p>
        <p>Instalacion de sistema operativo, recuperacion de archivos, instalacion de software, reparacion de laptops, cambio de pantalla, cambio de teclado, etc.</p>
        
        <p><button class="button"><a href="#contacto">Direccion</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://img.freepik.com/fotos-premium/tecnologia-pc-taller-reparacion-computadoras-ingeniero-realizando-mantenimiento-portatiles-desarrollador-hardware-arreglando-componentes-electronicos_253401-2027.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Servicios Tecnico - Computadoras</h2>
        <p class="title">Tiendas 1 y 2</p>
        <p>Instalacion o actualizacion de sistema, mantenimiento preventivo y correctivo, instalacion de programas, recuperacion de archivos,
          armado de pc's</p>
        
        <p><button class="button"><a href="#contacto">Direccion</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://img.freepik.com/fotos-premium/tecnologia-pc-taller-reparacion-computadoras-ingeniero-realizando-mantenimiento-portatiles-desarrollador-hardware-arreglando-componentes-electronicos_253401-2027.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Servicios Tecnico - Impresoras</h2>
        <p class="title">Tiendas 1 y 2</p>
        <p>atascos de papel, calidad de impresion(manchas), ruidos extraños, sustitucion de piezas rotas o desgastadas, trabajamos con todos los modelos</p>
  
        <p><button class="button"><a href="#contacto">Direccion</a></button></p>
      </div>
    </div>
  </div>

</div>
<br>  <br> 
<?php include "template/footer.php"; ?>
</body>

</html>