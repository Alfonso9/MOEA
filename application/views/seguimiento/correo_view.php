<?php 
	$datos["convocatorias"]=$convocatorias;
	$datos["user_id"] = $user->id;
    $this->load->view('head/librerias_view'); 
    $this->load->view('seguimiento/menu_view');  
    //$this->load->view('seguimiento/carousel_view');
?>

<div id="page-content-wrapper" class="container-fluid">
<br>
<br><center><h1>Seguimiento de Convocatorias</h1></center>
<br><center>se muestran las convocatorias a las cuales se pide información</center>

 <?php $this->load->view('seguimiento/contenido_correo',$datos); ?>
</div>
<?php 
    $this->load->view('footer/footer_view');
 ?>
