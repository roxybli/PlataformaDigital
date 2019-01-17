<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans+Condensed:300|Oswald|Sawarabi+Mincho" rel="stylesheet">
<div class="container-fluid">
    <?php
        foreach ($Guia->result() as $GuiaU) {
            $fecha = new DateTime($GuiaU->Fecha_Publicacion);
                                    $fecha = $fecha->format("d-m-Y");
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row card-title degradado_lineal ">
                            <h1  class="encabezado">
                                <?php echo $GuiaU->Titulo_Guia;?></h1><hr> 

                                 
                        </div>
                        
                        <div class="card-body">

                            <div class="profiletimeline">

                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                        <div class="col-md-11 col-xs-12 contenido ">
                                                        <div class="DivDescarga row">
                                                             <?php echo $GuiaU->Descripcion_Guia;?>
                                                        </div><br><br>
                                                        <div class="row" align="center"> 
                                                            <img  width="720px"  src="<?= base_url()?>plantilla/Documentos/<?= $GuiaU->Imagen?>">
                                                        </div><br><br>
                                                            <div class="DivDescarga row contenido" >
                                                             <?php echo $GuiaU->Contenido;?></div>
                                                        <div class="DivDescarga row">
                                                        <?php
                                                        if($GuiaU->Tipo_publicacion=="Documento"){
                                                            echo '<a href="'.base_url().'plantilla/Documentos/'.$GuiaU->Documento_Guia.'" class ="btn btn-info btn-md" style="color:white; padding:25px;"><i class="fa fa-download fa-2x" ></i> Descargar Documento</a>';

                                                        }
                                                        else if($GuiaU->Tipo_publicacion=="Video"){
                                                           
                                                            echo "<iframe align='center' width='570' height='415' src='https://www.youtube.com/embed/". $GuiaU->Video_Multimedia."?rel=0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";

                                                        }

                                                        ?>
                                                       
                                                        </div><br><br>
                                                         <div>
                                                            <div>
                                                                 <span ><p style="color:#004d40;"><i class="fa fa-check" style="margin:10px; color:#004d40;"></i>Publicado por <?= $GuiaU->Nombre?><span><p style="color:#004d40;"><i class="fa fa-calendar" style="margin:10px; color:#004d40;"></i>Fecha de publicacion <?= $fecha?></p><br></span></p><br></span>
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