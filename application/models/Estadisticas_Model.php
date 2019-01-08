<?php 

class Estadisticas_Model extends CI_Model
{
	public function EstadicticasVentas($fechaI, $fechaF){
		$id= $this->session->userdata('id');
		$sql="SELECT p.Nombre_Producto, count( * ) AS cantidad
			FROM tbl_venta AS v
			INNER JOIN tbl_inventario AS i ON v.Fk_Id_Inventario = i.Pk_Id_Inventario
			INNER JOIN tbl_productos AS p ON i.Fk_Id_Producto = p.Pk_Id_Producto
			WHERE p.FK_Id_Usuario =$id
			AND v.Fecha_Venta
			BETWEEN '$fechaI'
			AND '$fechaF'
			GROUP BY p.Nombre_Producto";
		$resultado=$this->db->query($sql);
		return $resultado;
	}
	public function EstadicticasInventario($fechaI, $fechaF){
		$id= $this->session->userdata('id');
		$sql="SELECT p.Nombre_Producto, i.Existencia_Producto
			FROM tbl_inventario AS i
			INNER JOIN tbl_productos AS p ON i.FK_Id_Producto = p.Pk_Id_Producto WHERE p.FK_Id_Usuario =24
			AND i.Fecha_Creacion
			BETWEEN '$fechaI'
			AND '$fechaF'";
		$resultado = $this->db->query($sql);
		return $resultado;
		}
}
?>