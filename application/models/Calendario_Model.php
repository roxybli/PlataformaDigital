<?php 

class Calendario_Model extends CI_Model{
	public function Insertar($datos=null){
		if($datos!=null){
			if($this->db->insert('tbl_Eventos', $datos)){
				return true;
			}
			else{
				return false;
			}
		}
	}
	public function Listar(){
		$res = $this->db->query("SELECT * FROM tbl_Eventos");
		return $res;
	}
	public function ListarEventFecha($fecha){
		$res = $this->db->query("SELECT * FROM tbl_Eventos WHERE fecha_inicio = $fecha OR fecha_fin = $fecha");
		return $res;
	}
	public function EliminarEvento($id){
		$sql="DELETE FROM tbl_Eventos WHERE id_evento = $id";

		if($this->db->query($sql)){
			return true;
		}
		else{
			return false;
		}
	}
	public function GetEventById($id){
		$res = $this->db->query("SELECT * FROM tbl_Eventos WHERE id_evento=$id");
		return $res;
	}
	public function Editar($datos=null){
		if($datos!=null){
			$id = $datos["id_evento"];
			$this->db->WHERE("id_evento", $id);
			if($this->db->update('tbl_Eventos', $datos)){
				return true;
			}
			else{
				return false;
			}


		}

	}
}
?>

