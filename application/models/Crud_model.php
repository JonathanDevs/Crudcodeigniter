<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
        public function __construct(){
            $this->load->database();
        }

        function createData(){
            $data = array(
                'apellido' => $this->input->post('apellido'),
                'nombre' => $this->input->post('nombre'),
                'fechaNacimiento' => $this->input->post('fechaNacimiento'),
                'noTelefono' => $this->input->post('noTelefono'),
                'comentarios' => $this->input->post('comentarios')               
            );
            $this->db->insert('datos_personales', $data);
        }
	Function getAllData(){
        $query = $this->db->query('SELECT * FROM datos_personales');
        return $query->result();
    }
    function getData($id){
        $query = $this->db->query('SELECT * FROM datos_personales WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id){
        $data = array(
            'apellido' => $this->input->post('apellido'),
            'nombre' => $this->input->post('nombre'),
            'fechaNacimiento' => $this->input->post('fechaNacimiento'),
            'noTelefono' => $this->input->post('noTelefono'),
            'comentarios' => $this->input->post('comentarios')
        );
        $this->db->where('id', $id);
        $this->db->update('datos_personales', $data);
    }
    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('datos_personales');
    }
}
