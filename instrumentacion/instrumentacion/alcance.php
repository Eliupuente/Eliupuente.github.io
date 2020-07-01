<?php 
//incluimos el menu
//include '../menu/index.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Indicadores de alcance | Intrumentación</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<!--Estilo del circulo numerico-->
<style>
.btn-circle.btn-xl {
    width: 50px;
    height: 50px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

</style>
<!--Contenedor-->
<body style="background: white; margin-top:20px;">
<div class="container">
<!--Numero de tema-->
<h1 class="col-form-label-lg" for="input">Indicadores de alcance</h1>
<br>
<center>
<button type="button" class="btn btn-primary btn-circle btn-xl">A</button>
<input type="text"  placeholder="Escribir el indicador" class="form" id="input">

<a style= "margin-left:52px">Valor</a>
<input type="text"  placeholder="" class="form" id="input">
<a>%</a>
<br><br><br>
<button type="button" class="btn btn-success">Añadir nuevo</button>
<a type="button" class="btn btn-dark" href="niveles.php">Guardar</a>
<button type="button" class="btn btn-dark">Cancerlar</button>


<center>  
<!--Fin de la pagina-->
</div>
</body>
    </html>