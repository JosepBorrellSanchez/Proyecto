
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modelo_tareas extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
    function getTarea() {
    	$this->db->select('id_tarea,id_asignatura,Nombre,Archivo,Data_vencimiento,Profesor_asignado,Comentario');
        $query = $this->db->get('Tareas');
        return $query->result_array();
    }

    function insertarTarea() {

    }

    function modificarTarea() {

    }

    function eliminarTarea() {
  
    }
}