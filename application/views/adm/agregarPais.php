|<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SDPMEUV-Inicio</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url()?>recursos/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url()?>recursos/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="<?= base_url()?>recursos/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?= base_url()?>recursos/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Seguimiento y movilidad</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Pepito Contreras
                            <br />
                                
                            </div>
                        </div>

                    </li>
                    
                    <li>
                        <a class="active-menu" href="indexABC.html"><i class="fa fa-dashboard "></i>CONVOCATORIAS</a>
                    </li>
                    
                    <li>
                        <a href="informacion.html"><i class="glyphicon glyphicon-info-sign "></i>INFORMACION</a>
                    </li>
                    <li>
                        <a href="documentacion.html"><i class="glyphicon glyphicon-file "></i>DOCUMENTACION</a>
                    </li>
                    <li>
                        <a href="eventos.html"><i class="glyphicon glyphicon-import"></i>EVENTOS DONDE PARTICIPE</a>
                    </li>
                    
                    
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
			<div class="row">
             <div class="col-md-12">
               <h1 class="page-head-line">Registrar Pais</h1><br>
             </div>       
      	</div>
                
      <div class="row">
       
       <div class="panel panel-default">
			<div class="panel-heading">
				Registro de Pais
			</div> 	
			<div class="panel-body">
				<?= form_open('adm/guardaPais'); ?>
					<div class="form-group">
						<label>Nombre de Pais:</label>

                        <?php 
                        $name = array(
                            'name'  => 'name',
                            'id'    => 'txtNombre',
                            'class' => 'form-control',
                            'type'  => 'text'
                        );
                        echo form_input($name);?>
										
						<br>
						<button class="btn btn-primary">
							Registrar 					
						</button>											
					</div>				
				<?= form_close();?>	
			</div>			      
       </div>     
                
      </div>
          
         <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url()?>recursos/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url()?>recursos/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url()?>recursos/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url()?>recursos/js/custom.js"></script>
    


</body>
</html>