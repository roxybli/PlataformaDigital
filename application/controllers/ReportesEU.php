<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesEU extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Usuarias_Model');
		$dato = $this->input->POST();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con2'=>$resultado2);
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesU/Crear_Reportes', $data);
		$this->load->view('administrador/base/footer');
	}

	public function ReportesPDF()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesE/Crear_ReportesE');
		$this->load->view('administrador/base/footer');
	}
	public function Estadisticas()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesE/EstadisticasE');
		$this->load->view('administrador/base/footer2');
	}

	public function ReportesPDFVentas()
	{
		$this->load->model('Usuarias_Model');
		$dato = $this->input->POST();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con2'=>$resultado2);
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesE/ReportesPDF', $data);
		$this->load->view('administrador/base/footer');
	}

	public function VentasEsta()
	{
		$this->load->Model("Inventario_Model");
		$result = $this->Inventario_Model->obtenerVentasEs();
		echo json_encode($result);
	}

	public function ReportePeriodoVentas()
	{
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoVentas($id, $dato);
		$fecha = date("d-m-Y");
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	         foreach ($data->result() as $datos)
		        {}
			$html="
			 <style>
			table{
			    border:1px solid #000;
			    border-collapse:collapse;
			    text-align:center;
			    width:100%;
			    
			}
			table th{
			    border:1px solid #000;
			    padding:10px;
			    text-align:center;
			    background-color:#000d5a;
			    color:#fff;
			    
			}
			table td{
			    border:1px solid #000;
			    padding:10px;
			    text-align:center;  
			}


			p {
			    text-align:center;
			}


			img {
			    text-align:left;
			    float:left;
			    width: 100px;
			    height: 110px;

			}

			#cabecera{
				width: 1000px;
			}
			#img{
				float:left;
				margin-left: 30px;
				width: 125px;

			}
			.textoCentral{
				color: #000;
				font-weight: bold;
				float:right;
				padding-left: 20px;
				margin: 0 auto;
				text-align: center;
				line-height:: 50;
				width: 475px;

				line-height: 26px;
			}
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			<div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div><p style='font-weight: bold; text-align:right;'> FECHA DE CREACIÓN:  $fecha</p>
		    <div class='textoCentral'>REPORTE DE VENTAS ".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL  ".$dato['Fecha_Venta']." AL ".$dato['Fecha_Fin']."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		    <strong style='font-weight: bold; text-align:center;'>RESUMEN DE VENTAS REALIZADAS DE:<br> ".strtoupper($user->Nombre)." ".strtoupper($user->Apellido )."</strong><br></div>
								<br>FECHA DE CREACION: ".$hoy."</p>";
				    $html.="</div>
			    </div>";
			$html .= "<br>
			    <strong style='font-weight: bold;'></strong>
			</div>
			<br> 
			<div class='table-responsive container'>
			             <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr >
				        <th>Producto</th>
				        <th>Cantidad</th>
				        <th>Fecha</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";
		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($data->result() as $fila)
		        {
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->Cantidad_Venta;
					//$precio = $fila->Fecha_Venta;
					$fecha = new DateTime($fila->Fecha_Venta);
					$fecha = $fecha->format("d-m-Y");
					$monto = $fila->Precio_Producto;
					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);
		            $html.="<tr><td>" . $nombre . "</td><td>" . $cantidad. "</td><td>" . $fecha. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos vendidos </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";
				$html .= "</table></div>";
		 
		         $pdfFilePath = "resumen de ventas.pdf";
		         //load mPDF library
		        $this->load->library('M_pdf');
		         $mpdf = new mPDF('c', 'A4'); 

		         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
		         //echo $estilos;
		         $mpdf->SetDisplayMode('fullpage');
		         $mpdf->WriteHTML($estilos,1);
		 
		        $mpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		       // $mpdf->SetFont('','',40); 
		         $mpdf->shrink_tables_to_fit = 1;
		       
		        $mpdf->WriteHTML($html);


		        $mpdf->Output($pdfFilePath, "I");

				}
			else
			{
				echo '<script type="text/javascript">
					alert("No hay datos que mostrar !!!");
					window.close();
					self.location ="'.base_url().'reportes/trabajosRealizados"
					</script>';
			}
	}
public function ReportePorVentas(){
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoAÑOSVentas($id, $dato);
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	        $fecha = date("d-m-Y");
			$html="
			 <style>
			table{
			    border:1px solid #000;
			    border-collapse:collapse;
			    text-align:center;
			    width:100%;
			    
			}
			table th{
			    border:1px solid #000;
			    padding:10px;
			    text-align:center;
			    background-color:#000d5a;
			    color:#fff;
			    
			}
			table td{
			    border:1px solid #000;
			    padding:10px;
			    text-align:center;  
			}


			p {
			    text-align:center;
			}


			img {
			    text-align:left;
			    float:left;
			    width: 100px;
			    height: 110px;

			}

			#cabecera{
				width: 1000px;
			}
			#img{
				float:left;
				margin-left: 30px;
				width: 125px;

			}
			.textoCentral{
				color: #000;
				font-weight: bold;
				float:right;
				padding-left: 20px;
				margin: 0 auto;
				text-align: center;
				line-height:: 50;
				width: 475px;

				line-height: 26px;
			}
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div><p style='font-weight: bold; text-align:right;'> FECHA DE CREACIÓN:  $fecha</p>
		    <div class='textoCentral'>REPORTE DE VENTAS ".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL AÑO ".$dato['Fecha_Venta']." AL ".$dato['Fecha_Fin']."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		  <br><strong style='font-weight: bold; text-align:center;'>RESUMEN DE VENTAS DE:<br> ".strtoupper($this->session->userdata('nombre'))." ".strtoupper($user->Apellido )."</strong><br></div>
		</div></div>
			   
			<div class='table-responsive container'>
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr >
				        <th>Producto</th>
				        <th>Cantidad</th>
				        <th>Fecha</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";
		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($data->result() as $fila)
		        { 
		            $nombre = $fila->Nombre_Producto;
					$cantidad = $fila->Cantidad_Venta;
					//$precio = $fila->Fecha_Venta;
					$fecha = new DateTime($fila->Fecha_Venta);
					$fecha = $fecha->format("d-m-Y");
					$monto = $fila->Precio_Producto;
					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);
		            $html.="<tr><td>" . $nombre . "</td><td>" . $cantidad. "</td><td>" . $fecha. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos vendidos </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";
				$html .= "</table></div>";
		 
		 
		         $pdfFilePath = "resumen de ventas.pdf";
		         //load mPDF library
		        $this->load->library('M_pdf');
		         $mpdf = new mPDF('c', 'A4'); 
		         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
		         //echo $estilos;
		         $mpdf->SetDisplayMode('fullpage');
		         $mpdf->WriteHTML($estilos,1);
		 
		        $mpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		       // $mpdf->SetFont('','',40); 
		         $mpdf->shrink_tables_to_fit = 1;
		       
		        $mpdf->WriteHTML($html);
		        $mpdf->Output($pdfFilePath, "I");
				}
			else
			{
				echo '<script type="text/javascript">
					alert("No hay datos que mostrar !!!");
					window.close();
					self.location ="'.base_url().'reportes/trabajosRealizados"
					</script>';
			}
	}
	
	}