<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>capital/capitalExistentes"><h3 class="text-primary"><i class="fa fa-times-circle"></i> Cancelar </h3></a>
     </div>

     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Datos del Negocio</h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Negocios</a></li>
            <li class="breadcrumb-item active">actualizar</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
                <!-- Start Page Content -->
    <div class="row ">
        <div class="col-sm-12">
            <div class="card">
                    <div class="card-title">
                        <h4>Datos del Negocio</h4>
                    </div>
                    <div class="form-validation">
                            <!-- Bread crumb -->
                            <?php 
                                foreach ($datos->result() as $filaDato) {
                                }
                             ?>
                                        <form class="form-valide" action="<?= base_url() ?>/capital/actualizarCapital" method="post">                                    
                                            <div class="row ">
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="Insumo de tipo: <?= $filaDato->Nombre_Tipo?>" name="" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="Usuario: <?= $filaDato->Nom_User?>" name="" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Nombre del Elemento:</label>
                                                        <div class="input-group"> 
                                                            <input type="text" class="form-control" value="<?= $filaDato->Nombre_Elemento?>" name="Nombre_Elemento" onkeyup="this.value=NumText(this.value)" required >
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Precio del Elemento:</label>
                                                        <div class="input-group">                                                         <input type="text" class="form-control" value="<?= $filaDato->Precio_Elemento?>" name="Precio_Elemento"  onkeypress="return numeros(event, 'num')" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Cantidad del Elemento:</label>

                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="<?= $filaDato->Cantidad_Elemento?>" name="Cantidad_Elemento"  onkeypress="return numeros(event, 'num')" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                
                                                <!--/span-->
                                            </div>
                                            <!--/row-->


                                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Actualizar </button>
                                        </form>
                            <!-- End Bread crumb -->

                    </div>
                    </div>
            </div>
        </div>
    </div>


