<style>
table{
   background-color: rgba(0, 13, 90, 0.2);
}
.barra{
    padding: 25px;
    color: rgba(0, 13, 90, 0);
}
table td{
    width: 100px;
}
</style>
<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>controlie/estadisticaMensualIE"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Detalle estadística </h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Estadísticas</a></li>
            <li class="breadcrumb-item active">Detalle</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                </div>
                <div class="card-body">
                <?php 
                    if (sizeof($ingresos->result())==0)
                    {
                       echo '<h3 class="text-danger text-center">No hay ingresos que mostrar</h3>';
                    }
                    else
                    {
                ?>
                    <table class="negociosD" cellpadding="10">
                        <tr>
                            <th colspan="12" class="text-center" style="color:#fff">ESTADISTICA DE INGRESOS</th>
                        </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td class="text-left" style="color:#000d5a">$150</td>
                            <td class="text-left" style="color:#000d5a">$250</td>
                            <td class="text-left" style="color:#000d5a">$350</td>
                            <td class="text-left" style="color:#000d5a">$450</td>
                            <td class="text-left" style="color:#000d5a">$550</td>
                            <td class="text-left" style="color:#000d5a">$650</td>
                            <td class="text-left" style="color:#000d5a">$750</td>
                            <td class="text-left" style="color:#000d5a">$850</td>
                            <td class="text-left" style="color:#000d5a">$950</td>
                            <td class="text-right" style="color:#000d5a">$1050</td>
                        </tr>
                        <?php 
                            foreach ($ingresos->result() as $ingresos)
                            {
                        ?>
                        <tr>
                            <td colspan="2" class="text-left"  style="color:#000d5a"><?= $ingresos->Nombre_Ingreso." ($".$ingresos->Cantidad_Ingreso.")" ?></td>
                        <?php 
                            switch ($ingresos->Total) {
                                case (($ingresos->Total >= 0) && ($ingresos->Total <= 150)):
                                    echo '<td colspan="" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 150) && ($ingresos->Total <= 250)):
                                    echo '<td colspan="2" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 250) && ($ingresos->Total <= 350)):
                                    echo '<td colspan="3" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 350) && ($ingresos->Total <= 450)):
                                    echo '<td colspan="4"  class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 450) && ($ingresos->Total <= 550)):
                                    echo '<td colspan="5" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;

                                case (($ingresos->Total > 550) && ($ingresos->Total <= 650)):
                                    echo '<td colspan="6"  class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 650) && ($ingresos->Total <= 750)):
                                    echo '<td colspan="7" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 750) && ($ingresos->Total <= 850)):
                                    echo '<td colspan="8" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 850) && ($ingresos->Total <= 950)):
                                    echo '<td colspan="9" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($ingresos->Total > 950) && ($ingresos->Total <= 1050)):
                                    echo '<td colspan="10" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d"></div></td>';
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                        ?>
                            
                        </tr>

                        <?php } ?>

                      

                    </table>    
                    <?php } ?>

                        <p></p>
                     <?php 
                    if (sizeof($egresos->result())==0)
                    {
                       echo '<h3 class="text-danger text-center">No hay egresos que mostrar</h3>';
                    }
                    else
                    {
                ?>
                    <table class="negociosD" cellpadding="10">
                        <tr>
                            <th colspan="12" class="text-center" style="color:#fff">ESTADISTICA DE EGRESOS</th>
                        </tr>
                        <?php 
                            foreach ($egresos->result() as $egresos)
                            {
                        ?>
                        <tr>
                            <td colspan="2" class="text-left"  style="color:#000d5a"><?= $egresos->Nombre_Egreso." ($".$egresos->Cantidad_Egreso.")" ?></td>
                        <?php 
                            switch ($egresos->Total) {
                                case (($egresos->Total >= 0) && ($egresos->Total <= 150)):
                                    echo '<td colspan="" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($egresos->Total > 150) && ($egresos->Total <= 250)):
                                    echo '<td colspan="2" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($egresos->Total > 250) && ($egresos->Total <= 350)):
                                    echo '<td colspan="3" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($egresos->Total > 350) && ($egresos->Total <= 450)):
                                    echo '<td colspan="4"  class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($egresos->Total > 450) && ($egresos->Total <= 550)):
                                    echo '<td colspan="5" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;

                                case (($egresos->Total > 550) && ($egresos->Total <= 650)):
                                    echo '<td colspan="6"  class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 650) && ($egresos->Total <= 750)):
                                    echo '<td colspan="7" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($egresos->Total > 750) && ($egresos->Total <= 850)):
                                    echo '<td colspan="8" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($egresos->Total > 850) && ($egresos->Total <= 950)):
                                    echo '<td colspan="9" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                case (($egresos->Total > 950) && ($egresos->Total <= 1050)):
                                    echo '<td colspan="10" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d"></div></td>';
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                        ?>
                            
                        </tr>

                        <?php } ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right" style="color:#000d5a">$150</td>
                            <td class="text-right" style="color:#000d5a">$250</td>
                            <td class="text-right" style="color:#000d5a">$350</td>
                            <td class="text-right" style="color:#000d5a">$450</td>
                            <td class="text-right" style="color:#000d5a">$550</td>
                            <td class="text-right" style="color:#000d5a">$650</td>
                            <td class="text-right" style="color:#000d5a">$750</td>
                            <td class="text-right" style="color:#000d5a">$850</td>
                            <td class="text-right" style="color:#000d5a">$950</td>
                            <td class="text-right" style="color:#000d5a">$1050</td>
                        </tr>

                    </table>    
                    <?php } ?>


                </div>
            </div> 
        </div>
    </div>
</div>


