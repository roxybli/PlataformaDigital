<style>
table{
   background-color: rgba(0, 13, 90, 0.2);
}
.barra{
    padding: 6px;
    color: rgba(0, 13, 90, 0);
}
table td{
    width: 100px;
}
</style>
<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/productos_disponibles"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Detalle estadística </h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Estadísticas</a></li>
            <li class="breadcrumb-item active">detalle</li>
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
              
                    if (sizeof($ventas->result())==0)
                    {
                       echo '<h3 class="text-danger text-center">No hay Ventas que mostrar</h3>';
                    }
                    else
                    {
                ?>
                    <table class="negociosD" cellpadding="10">
                        <tr>
                            <th colspan="12" class="text-center" style="color:#fff">ESTADISTICA DE VENTAS</th>
                        </tr>
                        <?php 

                            foreach ($ventas->result() as $ventas)
                            {
                        ?>
                        <tr>

                            <td colspan="2" class="text-left"  style="color:#000d5a"><?= " ".$ventas->Cantidad_Venta." ".$ventas->Nombre_Producto 
                            ?></td>
                        <?php 
                                $total=($ventas->Cantidad_Venta*$ventas->Precio_Producto);
                                //echo $total;
                            switch ($ventas) {
                                case (($total >= 0) && ($total <= 150)):
                                    echo '<td colspan="" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 150) && ($total <= 250)):
                                    echo '<td colspan="2" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 250) && ($total <= 350)):
                                    echo '<td colspan="3" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 350) && ($total <= 450)):
                                    echo '<td colspan="4"  class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 450) && ($total <= 550)):
                                    echo '<td colspan="5" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;

                                case (($total> 550) && ($total <= 650)):
                                    echo '<td colspan="6"  class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 650) && ($total <= 750)):
                                    echo '<td colspan="7" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 750) && ($total <= 850)):
                                    echo '<td colspan="8" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 850) && ($total <= 950)):
                                    echo '<td colspan="9" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($total > 950) && ($total <= 1050)):
                                    echo '<td colspan="10" class="text-left"><div class="barra" style="border-left:'.$ventas->Cantidad_Venta.'px solid #acc90d">d</div></td>';
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


