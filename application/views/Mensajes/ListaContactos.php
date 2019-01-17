<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Mensajes</a></li>
                        <li class="breadcrumb-item active">Historial de mensajes</li>
                    </ol>
                    <a onclick=""></a>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
           <div style="background-color:#512da8; color:white; padding:10;">
<h3  style="color:white; padding: 10px;  " class=" text-center"><b> Lista de Contactos</b></h3>
</div>
                <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" style="background: #fff">Foto</th>
                          <th scope="col"style="background: #fff">Nombre</th>
                          <th scope="col" style="background: #fff">Accion</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($conta->result() as $info) {
                        $id = $info->PK_Id_Contacto;
                          # code...
                      
                      ?>
                        <tr>
                          <td>
                                <img class="imgRedonda" src="<?php echo base_url().'plantilla/img_perfil/'.$info->Foto_Contacto?>" alt="" />
                        </td>
                          <td style="color: #000000"><?= $info->Nombre_Contacto?></td>
                          <td style="color: #000000"><a href="<?php echo base_url()?>Mensajes/mostrarMensajesContactos?Id=<?php echo $info->PK_Id_Contacto?>" style="color: #ff0000">Ver historial</a></td>
                         
                        </tr>
                        <?php 
                    }
                    foreach ($contaA->result() as $infoA) {
                        $id = $infoA->PK_Id_Contacto;
                        ?>
                         <tr>
                          <td scope="row"><img class="imgRedonda" src="<?php echo base_url().'plantilla/img_perfil/'.$infoA->Foto_Perfil?>" alt="" /></td>
                          <td><?= $infoA->Nombre?></td>
                          <td style="color:#ff0000"><a href="<?php echo base_url()?>Mensajes/mostrarMensajesContactos?Id=<?php echo $infoA->PK_Id_Contacto?>" >Ver historial</a></td>
                         
                        </tr>
                        <?php
                        } 
                        ?>

                      </tbody>
                 </table>             
            </div>
        </div>
    </div>
</div>
