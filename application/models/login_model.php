<?php
/**
*
*/
class Login_model extends CI_Model
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
      $data= array('logado' => TRUE );
      $this->db->where('email', $this->input->post('user'));
      if($this->db->update('login', $data)==true){
        $array_login=[true,$this->input->post('user')];
        return $array_login;
      }else{
        return false;
      }

  }
}
  public function get_verifica_logodo($variavel){
      $query = $this->db->get_where('login', array('email' => $variavel,'logado' => TRUE));
      if($query->num_rows()>0){
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
  public function set_logout($value)
  {
    $data= array('logado' => FALSE );
    $this->db->where('email', $value);
    if($this->db->update('login', $data)==true){
      return true;
    }else{
      return false;
    }
  }



}

?>
