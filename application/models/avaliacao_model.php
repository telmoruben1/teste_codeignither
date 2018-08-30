<?php
/**
*
*/
class avaliacao_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }


  public function set_registoAval()
  {
    $data = array(
      'id_bar' => $_POST['id_bar'],
      'classificacao' =>$_POST['classificacao'],
      'titulo' =>$_POST['titulo'],
      'avaliacao'=>$_POST['avaliacao'],
      'data_registo'=>$_POST['data_registo'],
      'date'=>$_POST['date'],
      'id_utilizador'=> $_POST['id_utilizador']

    );
    if($this->db->insert('cometarios', $data)==true){

      return true;
    }else{

      return false;
    }
  }





}

?>
