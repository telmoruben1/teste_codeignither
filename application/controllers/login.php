<?php
/**
*
*/
class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->helper('url_helper');
  }
  public function index()
  {
    $data['email'] ="";
    // $data['title'] = 'News archive';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/corrossel');
    $this->load->view('templates/footer');
  }

  public function verifica_login()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    // $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('user', 'USER', 'required');
    $this->form_validation->set_rules('password', 'PASS', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header');
      $this->load->view('templates/corrossel');
      $this->load->view('templates/footer');

    }
    else
    {
      $executa=$this->login_model->set_verifica_login();
      if($executa==true){
        // print_r($_COOKIE["user"]);
        $user=$_COOKIE["user"];
        $data['email']=$user;
        $this->load->view('templates/header',$data);
        $this->load->view('templates/carrossel');
        $this->load->view('templates/footer');
      }else{
        // print_r($_COOKIE["user"]);
        $data['email']="";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/carrossel');
        $this->load->view('templates/footer');

      }

    }
  }
  public function registo()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    // $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('user', 'USER', 'required');
    $this->form_validation->set_rules('password', 'PASS', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('templates/header');
      $this->load->view('templates/corrossel');
      $this->load->view('templates/footer');

    }
    else
    {
      $executa=$this->login_model->set_registo();
      if($executa==true){
        $data['email']=$_COOKIE["user"];
        $this->load->view('templates/header',$data);
        $this->load->view('templates/carrossel');
        $this->load->view('templates/footer');
      }else{
        $this->load->view('templates/header');
        $this->load->view('templates/carrossel');
        $this->load->view('templates/footer');

      }

    }
  }
  public function logout()
  {
    // $teste=$this->input->post('user');
    // unset($_COOKIE["logado"]);
    // set_cookie("logado",0);
    $_COOKIE['logado']=0;
    $data['email']="";
    $this->load->view('templates/header',$data);
    $this->load->view('templates/carrossel');
    $this->load->view('templates/footer');
  }

}

?>
