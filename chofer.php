<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
//if(session_id() == '' || !isset($_SESSION)){session_start();}

include_once("config.php");

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM chofer ORDER BY IdChofer DESC");

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Demo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="skin-2" style="overflow: hidden;">


    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu" >
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" src="img/user.png"/>
                        </span>  
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold">Developer</strong>
                             </span> <span class="text-muted text-xs block">Developer<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        BP
                    </div>
                </li>
                <li>
                    <a href="chofer.php"><i class="fa fa-th-large"></i> <span class="nav-label">Chofer</span> <span class="fa arrow"></span></a>
                    <a href="solicitud.php"><i class="fa fa-th-large"></i> <span class="nav-label">Solicitud</span> <span class="fa arrow"></span></a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
       
        <ul class="nav navbar-top-links navbar-right">
            </ul>
        </nav>
        </div>
        <br>
  <div class="page-header text-left">
    <h1>Buscador</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Listadi de Choferes</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar</button>
                            <?php
                            include("modales/agregarchofer.php");
                            ?>
                        <!--<button type="button" class="btn btn-sm btn-primary">Agregar</button>-->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>DNI</td>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Estado</td>
                                    <td>Correo</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                while($res = mysqli_fetch_array($result)) {         
                                    echo "<tr>";
                                    echo "<td>".$res['DNI']."</td>";
                                    echo "<td>".$res['Nombre']."</td>";
                                    echo "<td>".$res['Apellido']."</td>";
                                    echo "<td>".$res['Estado']."</td>"; 
                                    echo "<td>".$res['Correo']."</td>"; 
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Mainly scripts -->
 
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script type="text/javascript" src="js/index.js"></script>

   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <!-- Image cropper -->
    <script src="js/plugins/cropper/cropper.min.js"></script>
    <!-- Tags Input -->
    <script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <script type="text/javascript" src="class/funciones.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

</body>

</html>