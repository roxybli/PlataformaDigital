<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans+Condensed:300|Oswald|Sawarabi+Mincho" rel="stylesheet">
<div class="container-fluid">
    <?php
if($this->session->userdata('login')){


?>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"><a href="<?= base_url()?>Anuncios/">Inicio</a></h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url()?>Anuncios/">Inicio</a></li>
                         <li class="breadcrumb-item"><a href="javascript:void(0)">Noticias</a></li>
                    </ol>
                </div>
            </div>

<?php
}
   
        foreach ($Noticia->result() as $noti) {
            $fecha = new DateTime($noti->Fecha);
                                    $fecha = $fecha->format("d-m-Y");
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row card-title degradado_lineal ">
                            <h3  class="encabezado">
                                <?php echo $noti->Titulo;?></h1>
                               
                        </div>
                        
                        <div class="card-body">

                            <div class="profiletimeline">

                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                        <div class="col-md-11 col-xs-12 contenido ">
                                                       <div> <?php echo $noti->Descripcion_Noticia;?></div><br>
                                                        <div class="DivDescarga">
                                                        <img width="720px" align="center" src="<?= base_url()?>plantilla/img_anuncios/<?php echo $noti->Imagen;?>">
                                                         </div><br>
                                                            <div >   <?php echo $noti->Contenido;?>
                                                        </div> <div><br><br>
                                                        <div> 
                                                            <span ><p style="color:#004d40; text-align: left;" ><i class="fa fa-check"></i> Publicado por <?= $noti->Nombre?></p></span>        
                                                            <span> <p style="color:#004d40;" ><i class="fa fa-building" ></i> Institución: <?= $noti->Nombre_Institucion?></p>
                                                         <span><p style="color:#004d40; text-align: left; "><i class="fa fa-calendar" ></i> Fecha de publicación: <?= $fecha?></p></span>  
                                                         </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function(){
    });
</script>
            
        <?php } ?>
    </div>
<hr>
