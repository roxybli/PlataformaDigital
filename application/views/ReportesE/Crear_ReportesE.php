 <script src="<?=base_url() ?>plantilla/mtl/material.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Reportes</li>
                    </ol>
                </div>
            </div>
            <div class="card TituloUser">
                                    <h3 class="responsive" style="color:white; font-weight:bold;">  Gestión de Reportes</h3>  
                                </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
                     <div class="row" id="MenuCard" style="margin: 20px">
                    <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#3396ff; color:white; height:100px;">
                                <a target="_blank" href="<?=base_url() ?>insumos/reporteInsumos">
                                <div class="textIcon" style="color: white">
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/navegador.png">
                                     Insumos 
                                </div>
                                </a> 
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#3396ff; color:white; height:100px;">
                                <a target="_blank" href="<?=base_url() ?>inventario/reporteInventario">
                                <div class="textIcon" style="color: white">
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/navegador.png">
                                     Inventario
                                </div>
                                </a>
                                
                            </div>
                    </div>
                         <div class="col-md-6">
                            <div  class="CardItem card" style="background-color:#3396ff; color:white; height:100px;">
                                    <a target="_blank" href="<?=base_url() ?>inventario/reporteInventarioEnProceso">
                                    <div class="textIcon" style="color: white">
                                        <img class="iconImage"  src="<?= base_url()?>plantilla/images/navegador.png">
                                          Productos en Proceso
                                    </div>
                                    </a> 
                                </div>    
                    </div>
                     <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#3396ff; color:white; height:100px;">
                                <a target="_blank" href="<?=base_url() ?>inventario/reporteVentas">
                                <div class="textIcon" style="color: white">
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/navegador.png">
                                    Ventas Realizadas
                                </div>
                                </a>
                                
                            </div>
                    </div>
                </div>