<?php
class Anuncios_model extends CI_Model{
	public function insertarAnuncio($img, $data=null)
	{
		if($data!=null)
		{
			//$image=addcslashes($img, '"".(),/,?');
			$titulo=strtoupper($data['titulo']);
			$contenido=$data['contenido'];
			$fecha = $data['fecha'];
			$descripcion=$data['Descripcion_Noticia'];
			$institucion=$data['Institucion'];

			$id=$id= $this->session->userdata('id');

			$sql=("INSERT INTO tbl_Anuncios(Contenido, Titulo, Imagen, Fecha, FK_Id_Usuaria, Descripcion_noticia, Fk_Id_Institucion) VALUES( '$contenido','$titulo','$img', '$fecha', $id, '$descripcion', '$institucion')");
			//$this->db->bind_param('sss', $contenido, $video, $img);
			if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}
		}
	}
	public function editarAnuncio($img, $data=null)
	{
		if($data!=null)
		{
			//$image=addcslashes($img, '"".(),/,?');
			$id=$data['Id'];
			$titulo=strtoupper($data['titulo']);
			$contenido=$data['contenido'];
			$fecha = $data['fecha'];
			$descripcion=$data['Descripcion_Noticia'];
			$institucion=$data['Institucion'];
			//$id=$id= $this->session->userdata('id');

			//$sql=("INSERT INTO tbl_Anuncios(Contenido, Titulo, Imagen, Fecha, FK_Id_Usuaria, Descripcion_noticia) VALUES( '$contenido','$titulo','$img', '$fecha', $id, '$descripcion')");
			$sql="UPDATE tbl_Anuncios SET Contenido='$contenido', Titulo='$titulo', Imagen='$img', Fecha='$fecha', Descripcion_noticia='$descripcion', Fk_Id_Institucion='$institucion' WHERE pk_Id_Anuncio=$id";
			//$this->db->bind_param('sss', $contenido, $video, $img);
			//echo $sql;
			if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}
		}
	}
 	public function listarAnuncios(){

        $sql= "SELECT A.*, I.Nombre_Institucion, U.Nombre
			FROM tbl_Anuncios  AS A
			INNER JOIN tbl_Usuarias AS U ON A.FK_Id_Usuaria=U.pk_Id_Usuaria
			INNER JOIN tbl_instituciones AS I ON A.FK_Id_Institucion=I.Pk_Id_Institucion

         ORDER BY pk_Id_Anuncio DESC ";
        $anuncios = $this->db->query($sql);
        return $anuncios;
    }

    public function listarInstituciones(){
    $sql="SELECT p.Nombre_Institucion, pt.Fk_Id_Institucion FROM tbl_Instituciones p LEFT JOIN tbl_Anuncios pt
  		ON p.Nombre_Institucion=pt.Fk_Id_Institucion";
		$anuncios = $this->db->query($sql);
        return $anuncios;
}

	public function VerAnuncio($id){
		$sql="SELECT A.*, I.Nombre_Institucion, U.Nombre FROM tbl_Anuncios  AS A INNER JOIN tbl_Usuarias AS U ON A.FK_Id_Usuaria=U.pk_Id_Usuaria INNER JOIN tbl_instituciones AS I ON A.FK_Id_Institucion=I.Pk_Id_Institucion
 WHERE A.pk_Id_Anuncio=$id";
		$res=$this->db->query($sql);
		return $res;
	}
	public function EliminarAnuncio($id){

		$sql="DELETE  FROM tbl_Anuncios  WHERE pk_Id_Anuncio=$id";
		//echo $sql;
		if($this->db->query($sql)){
			return true;
		}
		else{
			return false;
		}
	}
	public function BuscarNoticia($titulo, $institucion){
		if ($institucion != '') {
			$institucion = "I.pk_Id_Institucion = '{$institucion}'";
		}
		else {
			$institucion = 'TRUE';
		}

		$sql ="
			SELECT A.*, U.Nombre
			FROM tbl_Anuncios  AS A
			INNER JOIN tbl_Usuarias AS U ON A.FK_Id_Usuaria=U.pk_Id_Usuaria
			LEFT JOIN tbl_instituciones AS I ON A.FK_Id_Institucion=I.pk_Id_Institucion
			WHERE
				Titulo LIKE '%$titulo%' AND
				$institucion
		";
		
		$res= $this->db->query($sql);
		return  $res->result();
	}
	public function AnunciosFecha($datos=null){
		if ($datos!=null) {
			$fechaI=$datos['FechaInicial'];
			$fechaF=$datos['FechaFinal'];
			$sql ="SELECT A.*, I.Nombre_Institucion, U.Nombre
			FROM tbl_Anuncios  AS A
			INNER JOIN tbl_Usuarias AS U ON A.FK_Id_Usuaria=U.pk_Id_Usuaria
			INNER JOIN tbl_instituciones AS I ON A.FK_Id_Institucion=I.Pk_Id_Institucion WHERE A.Fecha BETWEEN '$fechaI' AND '$fechaF'";
			//echo $sql;
			$res= $this->db->query($sql);
			return  $res;
			
		}
		
	}
}
?>