<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>
</head>

    <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Estadisticas</li>
                    </ol>
                </div>
            </div> <div class="card">
            <div class="card TituloUser">
                                    <h3 class="responsive" style="color:white; font-weight:bold;">  Gestión de Estadisticas</h3>  
                                </div>
                            <form class="form" method="post" action="<?= base_url() ?>controlie/estadisticaMIE" style="padding: 40px">
                        <div class="row ">
                                <div class="col-md-2">
                                <div class="form-group">
                                    <strong><label  style="color: #000000">Graficar los meses</label></strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                   <select name="mes1" class="form-control" id="mes1" required>
                                        <option value="">Selecciona un mes</option>
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>  
                            </div>   
                            <div class="col-md-4">
                                   <select name="mes2" class="form-control" id="mes2" required>
                                        <option value="">Selecciona un mes</option>
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>        
                                                        </div>  
                            
                             <div class="card-title" style="padding-top: 20px; margin-left:670px " align="right" >                                      
                              <button type="button" id="btnBuscar1" class="btn btn-info" "><i class="fa fa-bar-chart f-s-20" style="margin:10px; width: 20px"></i>Ingresos y egresos</button>
                                 <button type="button" id="btnBuscar2" class="btn btn-info" "><i class="fa fa-bar-chart f-s-20" style="margin:10px;width: 20px"></i>Inventario </button> 
                                 
                                <button type="button" id="btnBuscar3" class="btn btn-info"><i class="fa fa-bar-chart f-s-20" style="margin:10px;width: 20px"></i>Ventas</button>
                                  </div></div>
                                 </form>

      <div class="card"> 
        <div style="padding: 40px"><div id="contenedor-grafico">                            
 <canvas id="myChart" width="400" height="150"></canvas></div>
</div>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script> 
                             <!-- <div style="padding: 40px"><div id="contenedor-grafico">
                                                                                                      
                                                                <canvas id="myChart" width="80" height="30"></canvas>
                                                                </div> 
                                                                <script>
                                                                    var inicio= $('#mes1').val();
                                                                    var fin= $('#mes2').val();
                                                                    var parNombre = [];
                                                                     var parCantidad = [];
                                                                    var bgColor = [];
                                                                    var bgBorder = [];
                                                                  $('#btnBuscar1').click(function()
                                                                {
                                                                $.post("<?php echo base_url();?>ReportesEU/VentasEsta",
                                                                function(data){
                                                                    var obj = JSON.parse(data);

                                                                         parNombre = [];
                                                                         parCantidad = [];
                                                                         bgColor = [];
                                                                         bgBorder = [];
                                                                        $.each(obj, function(i,item){
                                                                             
                                                                             var r = Math.random() * 255;
                                                                             r = Math.round(r);

                                                                             var g = Math.random() * 255;
                                                                            g = Math.round(g);

                                                                            var b = Math.random() * 255;
                                                                            b = Math.round(b);

                                                                                parNombre.push(item.Nombre_Producto);
                                                                                parCantidad.push(item.Cantidad_Venta);
                                                                                bgColor.push('rgba('+r+','+g+','+b+', 0.3)');
                                                                                bgBorder.push('rgba('+r+','+g+','+b+', 1)');
                                                                    });
                                                        //eliminamos y creamos la etiqueta canvas
                                                                                $('#myChart').remove();
                                                                                $('#contenedor-grafico').append("<canvas id='myChart' width='80' height='30'></canvas> ");

                                                                var ctx = $("#myChart");
                                                                var myChart = new Chart(ctx, {
                                                                    type: 'bar',
                                                                    data: {
                                                                        labels: parNombre,
                                                                        datasets: [{
                                                                            label: 'Cantidad',
                                                                            data: parCantidad,
                                                                            backgroundColor: bgColor,
                                                                                borderColor: bgBorder,
                                                                                borderWidth: 1
                                                                        }]
                                                                    },
                                                                    options: {
                                                                        scales: {
                                                                            yAxes: [{
                                                                                ticks: {
                                                                                    beginAtZero:true
                                                                                     }
                                                                                }]
                                                                            }
                                                                        }
                                                                    });
                                                                    
                                                                });
                                                        });
</script>
</div>  -->
</html>