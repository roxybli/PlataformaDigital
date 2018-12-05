<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans+Condensed:300|Oswald|Sawarabi+Mincho" rel="stylesheet">
<style type="text/css">
    .degradado {
        background: -webkit-linear-gradient(#33691e, #dcedc8); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#33691e, #dcedc8); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#33691e, #dcedc8); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#33691e, #dcedc8); /* Standard syntax */
        color: white;
}
.degradado_lineal {
background: -webkit-linear-gradient(left, #004d40 , #80cbc4); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right, #004d40 , #80cbc4); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right, #004d40 , #80cbc4); /* For Firefox 3.6 to 15 */
background: linear-gradient(to right, #004d40 , #80cbc4); /* Standard syntax */
text-align: center;
color: #fff;
padding: 25px;
height: 100px
}
.contenido{
    text-align: justify;
    color: #000;
    font-family: 'Oswald', sans-serif;
    font-family: 'Sawarabi Mincho', sans-serif;
    font-family: 'Open Sans Condensed', sans-serif;
    font-family: 'Josefin Sans', sans-serif;
    font-size: large;


}
.encabezado{
    display: block; 
    margin: 0 auto;
    text-align: right;
    color: white;
    font-family: 'Oswald', sans-serif;
    font-size:'Medium';
}
.DivDescarga a:hover{
    background-color: #00bcd4;
    width: 50px;
    height: 30px;
    text-align: center;
}
</style>
<style type="text/css">
    #div12{
        margin: 12px;
        /*background-color: #acc90d;*/
            }
    #Titulo{
        display: block;
        background-color: #000d5a;
        color: #fff;
        text-align: right;
        font-family: 'Ranga';
    }
    #filtros{

    }
    #formato{
        color: #000;

    }
    #baner{
        display: block;
        margin: 0 auto;
        width: 70%;
        height: 300px;
    }
    .bordes{
        display: block;
        margin: 0 auto;
        border-style: solid;
        border-color: #f2efef;
        border-width: 1px;
        padding: 5px;
        margin-bottom: 10px;
    }
    #perfil{
        display: block;
        margin: 0 auto;
        color: #fff;
        background-color: #000d5a;
    }
    .images{
        height: 50px;
        width: 30%;
    }
    #perfil:hover{
        background-color: #0C853A;
    }
    .letra-menu{
        color: white;
        font-size: 18px;
        margin: 10;
    }
    #ln:hover{
        background-color: #000d5a;

    }</style>
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
                                                         <span><p style="color:#004d40; text-align: left;"><i class="fa fa-calendar" ></i> Fecha de publicación: <?= $noti->Fecha?></p></span>  
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