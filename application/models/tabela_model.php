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


  public function set_verifica_login()
  {
    $this->load->helper('url');
    $query = $this->db->get_where('login', array('email' => $this->input->post('user'),'password' => $this->input->post('password')));
    if($query->num_rows()>0){
      $cookie=$this->input->post('user');
      setcookie("user",$cookie);
      setcookie("logado",true);
      return true;
    }else{
      return false;
    }


  }
  public function set_registo()
  {
    $this->load->helper('url');


    $data = array(
      'user' => $this->input->post('user'),
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email'),
      'phone' => $this->input->post('phone'),
      'name' => $this->input->post('name')
    );
    if($this->db->insert('login', $data)==true){
      // set_cookie("email",$this->input->post('email'));
      // set_cookie("password",$this->input->post('password'));
      setcookie("user",$this->input->post('email'));
      setcookie("pass",$this->input->post('password'));
      setcookie("logado",true);

      return true;
    }else{

      return false;
    }


  }


}

?>
