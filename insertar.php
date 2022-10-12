<!DOCTYPE html>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="estilos.css">
<html>
<center>
	<br><br>
<h1>AÑADIR PRODUCTOS</h1>
  <body>
	<form method="post" action="process.php" enctype="multipart/form-data">
		<div class="form-group col-md-5">
		<input type="text" name="marca" class="form-control" id="inputEmail4" placeholder="Marca">
		</div>
		<br>
		<div class="form-group col-md-5">
		<input type="text" name="tipo" class="form-control" id="inputEmail4" placeholder="Tipo">
		</div>
		<br>
		<div class="form-group col-md-5">
		<input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Modelo">
		</div>
		<br>
		<div class="form-group col-md-5">
		<textarea type="text" name="descripcion" placeholder="Descipcion" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
		</div>
        <br>
		<div class="form-group col-md-5">
		<input type="text" name="precio" class="form-control" id="inputEmail4" placeholder="Precio">
		</div>
        <br>
		<div class="form-group col-md-5">
		<input type="text" name="imagen" class="form-control" id="inputEmail4" placeholder="Ruta de Imagen">
		</div>
		<br><br>
		<input type="submit" name="save" value="submit" class="btn btn-success">
	</form>
  </body>
  <br> <br> 
  <h1>AÑADIR MARCAS</h1>
  <body>
	<form method="post" action="process2.php" enctype="multipart/form-data">
	    <div class="form-group col-md-5">
		<input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
		</div>
		<br>
		<div class="form-group col-md-5">
		<input type="text" name="imagen" class="form-control" id="inputEmail4" placeholder="Ruta de Imagen">
		</div>
		<br><br>
		<input type="submit" name="save2" value="submit" class="btn btn-success">
	</form>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </center>
</html>
