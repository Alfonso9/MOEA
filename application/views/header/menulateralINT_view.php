
    <!--Inicia Togle Perfil -->
    <div id="wrapper"  role="navigation">          
        <!-- Sidebar -->
        <div id="sidebar-wrapper">            
            <ul class="sidebar-nav">
                <li class="user-img-div  sidebar-brand">
                    <h4><?php echo $user->first_name.' '.$user->last_name; ?></h4>   
                    <figure>
                      <img src="<?= base_url(); ?>assets/images/USUARIOS/user.png" class="img-thumbnail" />
                    <figure>                
                </li>
                <li>
                    <a onclick="verConvocatorias()">
                      <i class="glyphicon glyphicon-th"></i>
                      <span>CONVOCATORIAS</span>
                    </a>
                </li>
                <li>
                    <a onclick="verConvInfor()">
                      <i class="glyphicon glyphicon-info-sign "></i>
                      <span>INFORMACIÓN</span>
                    </a>
                </li>
                <li>
                    <a onclick="verMisConv()">
                      <i class="glyphicon glyphicon-thumbs-up"></i>
                      <span>MIS CONVOCATORIAS</span>
                    </a>
                </li>
                <li>
                    <a onclick="verMiHistorico()">
                      <i class="glyphicon glyphicon-file "></i>
                      <span>MI HISTORIAL</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar Wrapper-->
        <!--Termina Togle Perfil -->