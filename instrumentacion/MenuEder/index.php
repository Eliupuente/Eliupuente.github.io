<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../menuEder/CSS/estilomenu.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body >
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="sidebarCollapse" class="sidebar-header">
                <h3 id="sidebarCollapse">SICSA+</h3>
                <strong id="sidebarCollapse">
                    <img style="  
                    border: 1px solid #ddd;
                    border-radius: 54px;
                    padding: 5px;
                    width: 40px;"
                    class="logo" src="../menuEder/CSS/logo.png">
                </strong>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="../tablero/index.php"  target="formularios">
                        <i class="fas fa-address-book "></i>
                        Tablero
                    </a>
<!--<ul class="collapse list-unstyled" id="homeSubmenu"><li><a href="#">Home 1</a></li><li><a href="#">Home 2</a></li><li><a href="#">Home 3</a></li></ul>-->
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-check-square "></i>
                        Planeación
                    </a>
                    <a href="../instrumentacion/index.php"  target="formularios">
                        <i class="fas fa-copy "></i>
                        Instrumento
                    </a>
<!--<ul class="collapse list-unstyled" id="pageSubmenu"><li><a href="#">Page 1</a></li><li><a href="#">Page 2</a></li><li><a href="#">Page 3</a></li></ul>-->
                </li>
                <li>
                    <a  href="../chat/index.php"  target="formularios">
                        <i class="fas fa-paper-plane "></i>
                        Chat Docente
                    </a>
                </li>
                <li>
                    <a  href="../calendario/index.php"  target="formularios">
                        <i class="fas fa-calendar"></i>
                        Calendario
                    </a>
                </li>
                <li>
                    <a  href="../reportes/index.php"  target="formularios">
                        <i class="fas fa-folder-open "></i>
                       Reportes
                    </a>
                </li>
            </ul>
</nav> 
<!-- Page Content Holder -->
<div id="content">



<div class="wrapper">
<!--Barra de arriba-->
<nav class="navbar">
<form class="form-inline">
<div class="form-group ">
<ul class="list-unstyled components">

<a href="#">
<li><input type="text" placeholder=" Buscar...">
<i class="fas fa-search" ></i>
Buscar</a>
</li>
</ul>
<div class="btn-group open" style=" margin-left: 24rem">
  <a class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" href="#">
  <span class="" title="Toggle dropdown menu"></span>
  <i class="fa fa-user fa-fw"></i> Docente</a>
  <ul class="dropdown-menu">
    <li><a href="#"><i class="fas fa-user"></i> Perfil</a></li>
    <li><a href="#"><i class="fas fa-bell"></i> Notificaciones</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="fas fa-sign-out-alt"></i></i> Cerrar secion</a></li>
  </ul>
  </div>
</form>
</nav>
</div>

<iframe src="../tablero/index.php" style="width: 100%; height: 91.2%" name="formularios"></iframe>       

 </div>
</div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>