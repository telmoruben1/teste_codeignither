<?php
/**
*
*/
class Tabela_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
    $this->load->helper('cookie');
  }


  public function set_verifica_tabela()
  {
    $this->load->helper('url');
    $titulo=$this->input->post('titulo');
    $class=$this->input->post('classificacao');
    $bar_id=$this->input->post('id_bar');
    // $query = $this->db->get_where('comentario', array('titulo' => $this->input->post('titulo'),'classificacao' => $this->input->post('classificacao'),'id_bar' => $this->input->post('id_bar')));
    $query = $this->db->query("SELECT titulo,classificacao,id_bar,id FROM comentarios WHERE id_bar=$bar_id AND classificacao=$class AND titulo='$titulo';");
    $result=$query->result_array();
    // print_r($result);
    if(!empty($result)){

      return $result;
    }else{
      return false;
    }


  }
  public function delete_row_of_table($value)
  {
    $this->load->helper('url');


    $data = array(
      'id' => $value
    );
    if($this->db->delete('comentarios', $data)==true){
      return true;
    }else{

      return false;
    }


  }


}

?>
