
<?php 
foreach ($info as $fila) {
}
foreach ($user->result() as $fila2) {
    # code...
}

?>
<style type="text/css">
    .iconImage{
        display: inline-block;
    }
    .textIcon{
        display: inline-block;
        color: white;
        margin: 10px;
        font-weight: bold;
    }
    .CardItem a:hover{
        display: block;
        margin: 0px 40px;
       
    }
</style>
   
            <!-- Container fluid  -->
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Perfil</a></li>
                        <li class="breadcrumb-item active">Mi Perfil</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
            <?php
			foreach($ultimo->result() as $Ultimo){
				
			}
			
			foreach($pultimo->result() as $Pultimo){
				
			}
			
            foreach ($ingreso->result() as $Ingresos) {
                # code...
            }
            foreach ($N_mens->result() as $NumM) {
                # code...
            }

            foreach ($NumC->result() as $NumCo) {
                # code...
            }
            ?>
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-eye f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo $fila->Num_Visitas?></h2>
                                    <p class="m-b-0">Visitas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-money f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php
                                    if($Ingresos->Total_Ingreso==""){
                                        echo 0;
                                    }
                                    else{
                                        echo $Ingresos->Total_Ingreso;
                                    }  
                                    ?></h2>
                                    <p class="m-b-0">Ingresos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-envelope f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?= $NumM->N_Mens?></h2>
                                    <p class="m-b-0">Comentarios </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="MenuCard">
                    <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#8e24aa; color:white; height:100px;">
                                <a href="<?=base_url() ?>Contactos/">
                                <div class="textIcon">
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/usuario.png">
                                   <h3 class="textIcon">  Chat </h3>
                                </div>
                                </a> 
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#00897b; color:white; height:100px;">
                                <a href="<?=base_url() ?>Emprendedoras/">
                                <div class="textIcon">
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/carro.png">
                                   <h3 class="textIcon">  Bolsa de emprendedoras</h3>
                                </div>
                                </a>
                                
                            </div>
                    </div>
                    <div class="col-md-6">
                        
                            <div  class="CardItem card" style="background-color:#512da8; color:white; height:100px;">
                                    <a href="<?=base_url() ?>inventario/productos_disponibles">
                                    <div class="textIcon">
                                        <img class="iconImage"  src="<?= base_url()?>plantilla/images/navegador.png">
                                       <h3 class="textIcon"> Productos en Inventario</h3>
                                    </div>
                                    </a>
                                    
                                </div>
                        
                            
                    </div>
                     <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#d81b60; color:white; height:100px;">
                                <a href="<?=base_url() ?>controlie/balances">
                                <div class="textIcon">
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/navegador.png">
                                   <h3 class="textIcon"> Balances de ingresos y egresos </h3>
                                </div>
                                </a>
                                
                            </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
					
					<div class="col-lg-9">
					
						<div class="card">
                            <div class="card-body">

                                <div class="card-two" style="width:auto">
                                    <header>
                                        <div class="avatar">
                                            <a href="<?php echo base_url().'plantilla/img_perfil/'.$fila->Foto_Perfil;?>" data-lightbox="example-set">
                                            <img style="height: 150px; width: 150px;" src="<?=base_url()?>plantilla/img_perfil/<?php echo $fila->Foto_Perfil;?>" alt="Imagen de perfil" />
                                        </div>

                                    </header><br><br>
                                  <h3 style="color: #000"><?php echo "Encargada del negocio: <br>".$fila->Nombre." ".$fila->Apellido?></h3>
                                    <div class="desc" style="color: #000; padding-top: 0px ">
                                        <h3 style="color: #000">Sede</h3><?php echo $fila->Nombre_Sede;?>
                                    </div>  

                            </div>
							
							
                        </div>
                     </div>
					 
					 <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Mi negocio</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Información</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Editar Información</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto_Perfil;?>" alt="Imagen de perfil" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="" class="link"><?php echo $fila->Nombre_Negocio; ?></a>
                                                        <p>Imagenes de mi negocio | Rubro: <?php echo $fila->Nombre_Rubro?></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20 imgs">
                                                                
                                                                <a target="_blank" href="<?php echo base_url().'plantilla/img_perfil/'.$fila->Foto1;?>" data-lightbox="example-set" ><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto1;?>" class="img-responsive radius" />
                                                            <div style="padding:10px;">
                                                            <a data-toggle="modal" data-target="#ModalMensaje"  onclick="editI(1)" class="btn btn-success">Editar imagen</a>   
                                                            </div>

                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><a target="_blank" href="<?php echo base_url().'plantilla/img_perfil/'.$fila->Foto2;?>" data-lightbox="example-set" ><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto2;?>" class="img-responsive radius" />
                                                             <div style="padding:10px;">
                                                            <a data-toggle="modal" data-target="#ModalMensaje" onclick="editI(2)" class="btn btn-success">Editar imagen</a>   
                                                            </div>
                                                            
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><a target="_blank" href="<?php echo base_url().'plantilla/img_perfil/'.$fila->Foto3;?>" data-lightbox="example-set" ><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto3;?>" class="img-responsive radius" />
                                                             <div style="padding:10px;">
                                                            <a data-toggle="modal" data-target="#ModalMensaje" onclick="editI(3)" class="btn btn-success">Editar imagen</a>   
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Encargado</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Nombre?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>WhatsApp</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Telefono?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Correo ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Dirección</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Direccion_Negocio;  ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30"><?php  echo $fila->Descripcion_Negocio;?></p>
                                </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="row ">
                                    <div class="col-sm-12">
                                                                 
                                                <div class="card TituloUser" style="height: 55px">
                                                    <h2 class="responsive" style="color:white; font-weight:bold;">  Editar información personal</h2>
                                                </div><div style="padding-top: 10px">
                                                <div class="form-validation">
                                                        <!-- Bread crumb -->
                                                                    <form class="form-valide" action="<?=base_url()?>Perfiles/EditarUsuaria" method="post">                             
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-name" name="nombre" placeholder="Nombre" value="<?php echo $fila2->Nombre;?>" onkeyup="this.value=NumText(this.value)">
                                                                                        <input type="text" hidden name="id_usuaria" value="<?php echo $fila2->pk_Id_Usuaria;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Apellido </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-lastname " name="apellido" placeholder="Apellido" value="<?php echo $fila2->Apellido;?>" onkeyup="this.value=NumText(this.value)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre de usuario </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-direccion " name="nomuser" placeholder="Nombre de usuario" value="<?php echo $fila2->Nom_User;?>" onkeyup="this.value=NumText(this.value)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span> Contraseña Actual</span>
                                                                                    <div class="input-group">
                                                                                        <input type="password" onclick="cambiarPW()" class="form-control" id="val-pass1" name="pass1" placeholder="Contraseña" onkeyup="this.value=NumText(this.value)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                             <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Contraseña Nueva </span>
                                                                                    <div class="input-group">
                                                                                        <input onclick="cambiarPW()"
                                                                                        type="password" class="form-control" id="val-pass2 " name="pass2" placeholder="Contraseña"  onkeyup="this.value=NumText(this.value)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                             <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Repita Contraseña Nueva </span>
                                                                                    <div class="input-group">
                                                                                        <input type="password" onclick="cambiarPW()" class="form-control" id="val-pass3 " name="pass" placeholder="Contraseña" onkeyup="this.value=NumText(this.value)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span <?php echo $fila2->Pass;?>"-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Dirección </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-phoneus " name="direccion" placeholder="Dirección" value="<?php echo $fila2->Direccion;?>" onkeyup="this.value=NumText(this.value)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Teléfono </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="" name="telefono" placeholder="Telefono" value="<?php echo $fila2->Telefono;?>" onkeypress="return numeros(event, 'num')" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span># DUI </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-username" name="dui" placeholder="# DUI" value="<?php echo $fila2->Dui;?>" disabled>
                                                                                    </div>
                                                                                </div>

                                                                            </div>                 
                                                                        <!--/row-->
                                                                      <div class="col-md-12"align="right">
                                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-50"><i class="fa fa-floppy-o" ></i> Editar</button>  
                                                                        </div>
                                                                            </div></div></div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                                                                        <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-floppy-o"></i> Editar</button>  
                                                                        </div>
                                                                    </form>
            
                                                <div class="card TituloUser" style="height: 55px">
                                                    <h2 class="responsive" style="color:white; font-weight:bold;">Editar Información del negocio</h2>
                                                </div>
                                                <div style="padding-top: 10px">

                                                                    <div class="form-validation">
                                                        <!-- Bread crumb -->
                                                         <h4>Editar Información del negocio</h4>
                                                                    <form class="form-valide" action="<?=base_url()?>Perfiles/EditarPerfil" method="post">                             
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre del negocio </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-name" name="nombre_n" placeholder="Nombre" value="<?php echo $fila->Nombre_Negocio;?>" onkeyup="this.value=NumText(this.value)">
                                                                                        <input type="text" hidden name="id_usuaria" value="<?php echo $fila->FK_Usuaria;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span class="etiquetass">Dirección Google Maps del Negocio </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-website " name="direcion_n" placeholder="Apellido" value="<?php echo $fila->Direccion_Negocio;?>"  onkeyup="this.value=NumText(this.value)">
                                                                                        
                                                                                    </div><a class="etiqueta2" href="https://www.google.com/maps" target="_blank" style="color: red">Ingrese a google maps haciendo click aqui.</a>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Rubro</span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-direccion " name="nomuser" placeholder="Nombre de usuario" value="<?php echo $fila->Nombre_Rubro;?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Descripción </span>
                                                                                    <div class="input-group">
                                                                                        <textarea type="text" class="form-control" id="val-municipio " name="descripcion_n" placeholder="Descripción" value="<?php echo $fila->Descripcion_Negocio;?>" onkeypress="this.value=NumText(this.value)"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">

                                                                                <span class="etiquetass">Sede</span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-phoneus " name="direccion_n" placeholder="Sede" value="<?php echo $fila->Nombre_Sede;?>"  onkeyup="this.value=NumText(this.value)" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Teléfono </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="" name="telefono_n" placeholder="Telefono_n" value="<?php echo $fila->Telefono;?>" onkeypress="return numeros(event, 'num')" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Correo </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-email" name="Correo_n" placeholder="Correo" value="<?php echo $fila->Correo;?>" onkeyup="this.value=NumText(this.value)">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->

                                                                        <div class="col-md-12" align="right">
                                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-50"><i class="fa fa-floppy-o"></i> Editar</button>  

                                                                        </div>
                                                                    </form>
                                                                    </div>

                                                        <!-- End Bread crumb -->
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
					 
					 
					 </div>
					
					
                    <div class="col-lg-3">

					<!-- Ficha de eventos recientes -->					
						<div class="card" style="float:right">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                            <img style="height: 50px; width: 50px;" src="<?=base_url() ?>plantilla/images/evento.png" />
                                
									<h2 style="color: #000">Ultimos eventos: </h1>
                                    </header>
									<br>
									<hr>
									<div id="carouselControls" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
									<div class="carousel-item active">
									<h4 style="color: #000">Evento: </h4><?php echo $Ultimo->titulo_evento;?>
								   <br><br><h4 style="color: #000">Fecha Inicio: </h4><?php echo $Ultimo->fecha_inicio;?>
								   <br><br><h4 style="color: #000">Descripción: </h4><?php echo $Ultimo->contenido_evento;?>
								   <br><br><h4 style="color: #000">Ubicación: </h4><?php echo $Ultimo->ubicacion;?>
								   <br><br><h4 style="color: #000">Fecha Fin: </h4><?php echo $Ultimo->fecha_fin;?>
									</div>
									<div class="carousel-item">
									 <h4 style="color: #000">Evento: </h4><?php echo $Pultimo->titulo_evento;?>
								   <br><br><h4 style="color: #000">Fecha Inicio: </h4><?php echo $Pultimo->fecha_inicio;?>
								   <br><br><h4 style="color: #000">Descripción: </h4><?php echo $Pultimo->contenido_evento;?>
								   <br><br><h4 style="color: #000">Ubicación: </h4><?php echo $Pultimo->ubicacion;?>
								   <br><br><h4 style="color: #000">Fecha Fin: </h4><?php echo $Pultimo->fecha_fin;?>
									</div>
									<!--
									<div class="carousel-item">
									<img class="d-block w-100" src="..." alt="Third slide">
									</div>
									-->
									</div>
									<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true" ></span>
									<span class="sr-only">Anterior</span>
									</a>
									<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Siguiente</span>
									</a>
									</div>
            
                            </div>
							
                        </div>
                     </div>
					 <!-- Ficha de eventos recientes -->		
					 
					 </div>
				                  </div>

										   
                                           </div>
										   </div>
<!-- Modal edit -->
<div  class="modal fade" id="ModalMensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Editar Imagen</h5>
        <a onclick="Limpiar()"  class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
        </a>
      </div>
      <div class="modal-body">
       <!-- Bread crumb -->
       <!--Div para las imagenes-->
        <div id="DivImagen">
        </div>
       <div id="form1">
       <div class="row btnCenter1">
                <a onclick="SubirImg(1)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
        </div>
       <form class="form-valide" enctype="multipart/form-data" action="<?= base_url()?>Perfiles/editarImagen?c=1" method="POST" id="mensaje" name="mensaje">
                <input type="file" hidden name="imagen" id="imagen1" onchange="cambio(this)"> 
            <div class="row btnCente1" id="DivBotones1" style="display:none;"> 
                
                    <a onclick="Limpiar()"  class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-picture-o" style="margin:5;" aria-hidden="true"></i> Guardar</button>
                
            </div>
        </form> 
       </div>
       <div id="form2">
       <form enctype="multipart/form-data" class="form-valide" action="<?= base_url()?>Perfiles/editarImagen?c=2" method="POST" id="mensaje" name="mensaje">
            <div class="row btnCenter1">
                <a onclick="SubirImg(2)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                <input type="file" hidden name="imagen" id="imagen2" onchange="cambio2(this)">

            </div>
            <div class="row btnCenter1" id="DivBotones2" style="display:none;"> 
                
                    <a onclick="Limpiar()" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>   
                    <button type="submit" class="btn btn-primary"><i class="fa fa-picture-o" style="margin:5;" aria-hidden="true"></i> Guardar</button>
                
            </div>
        </form> 
       </div>
       <div id="form3">
       <form enctype="multipart/form-data" class="form-valide" action="<?= base_url()?>Perfiles/editarImagen?c=3" method="POST" id="mensaje" name="mensaje">
            <div class="row btnCenter1">
                <a onclick="SubirImg(3)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                <input type="file" hidden name="imagen" id="imagen3" onchange="cambio3(this)">
            </div>
            <div class="row btnCenter1" id="DivBotones3" style="display:none;"> 
                    <a  class="btn btn-secondary" onclick="Limpiar()" data-dismiss="modal">Cancelar</a> 
                    <button type="submit" class="btn btn-primary"><i class="fa fa-picture-o" style="margin:5;" aria-hidden="true"></i> Guardar</button>
                
            </div></div>
        </form> 
       </div>
            
      
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

    function cambiarPW(){
    var p1 = document.getElementById("val-pass3").value;
    var p2 = document.getElementById("val-pass2").value;
    var p3 = document.getElementById("val-pass3").value;
        if (p1 != p2) 
        {
      alert("Las Contraseñas deben de coincidir");
      return false;
    } 
    else 
    {
      p3=pass;
      return true; 
    }

    }

    function editI(v){
        //alert('hola');
        if(v==1){
            document.getElementById('form1').style.display = 'block';
            document.getElementById('form2').style.display = 'none';
            document.getElementById('form3').style.display = 'none';
        }
        if(v==2){
            document.getElementById('form1').style.display = 'none';
            document.getElementById('form2').style.display = 'block';
            document.getElementById('form3').style.display = 'none';
        }
        if(v==3){
            document.getElementById('form1').style.display = 'none';
            document.getElementById('form2').style.display = 'none';
            document.getElementById('form3').style.display = 'block';
        }
    }
function Limpiar() {
    document.getElementById('DivImagen').innerHTML='';
    document.getElementById('DivBotones1').style.display='none';
    document.getElementById('DivBotones2').style.display='none';
    document.getElementById('DivBotones3').style.display='none';
    document.getElementById('form1').style.display = 'none';
    document.getElementById('form2').style.display = 'none';
    document.getElementById('form3').style.display = 'none';
    $('#imagen1').val("");
    $('#imagen2').val("");
    $('#imagen3').val("");
}
function SubirImg(va){
    if(va == 1){
        document.getElementById('imagen1').click(); 
    }
    if(va==2){
        document.getElementById('imagen2').click(); 
    }
    if(va==3){
        document.getElementById('imagen3').click(); 
    }
    }
function cambio(inu){
    ValidarImagen(inu);

}
function cambio2(inu){
    ValidarImagen(inu);

}

function cambio3(inu){
    ValidarImagen(inu);
}

function ValidarImagen(obj, v){
    var uploadFile = obj.files[0];
    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif|jpeg)$/i).test(uploadFile.name)) {
        sweetAlert("Accion no permitida", "El archivo que intenta subir no es una imagen", "error");
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 720 && this.height.toFixed(0) != 540) {
                //alert('Las medidas deben ser: 200 * 200');
                sweetAlert("Accion no permitida", "Tamaño de la imagen no permitida el tamaño requerido es de 720px x 540px", "error");
                $('#imagen1').val("");
                $('#imagen2').val("");
                $('#imagen3').val("");
                document.getElementById('DivImagen').innerHTML=' ';
                document.getElementById('DivBotones').style.display='none';
            }
            else if (uploadFile.size < 20000)
            {
                sweetAlert("Accion no permitida", "El tamaño de la imagen no puede exeder los 200kb", "error");
                $('#imagen1').val("");
                $('#imagen2').val("");
                $('#imagen3').val("");
                document.getElementById('DivImagen').innerHTML=' ';
                document.getElementById('DivBotones').style.display='none';       
            }
            else {
                alert('Imagen correcta:)');
                document.getElementById('DivImagen').innerHTML='<img class=" img-responsive radius" src="'+URL.createObjectURL(uploadFile)+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
                document.getElementById('DivBotones1').style.display='block';
                document.getElementById('DivBotones2').style.display='block';
                document.getElementById('DivBotones3').style.display='block';                
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }                 
}
</script>