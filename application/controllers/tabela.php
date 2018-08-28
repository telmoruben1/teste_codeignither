<?php
/**
*
*/
class Tabela extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('tabela_model');
    $this->load->helper('url_helper');
  }

  public function view()
  {
    $this->load->view('templates/header');
    $this->load->view('templates/tabela');
    // code...
  }
  public function verifica_pesquisa()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    // $data['title'] = 'Create a news item';

      $executa=$this->tabela_model->set_verifica_tabela();
      if($executa!=false){
        $data['array']=$executa;
        $array_auxiliar=explode('?.',$_SERVER['REQUEST_URI']);
        if(!empty($array_auxiliar[1])){
          $data['email'] = $array_auxiliar[1];
        }else{
          $data['email']="";
        }
        $this->load->view('templates/header',$data);
        $this->load->view('templates/tabela',$data);
        $this->load->view('templates/footer',$data);
      }else{
        $array_auxiliar=explode('?.',$_SERVER['REQUEST_URI']);
        // print_r($array_auxiliar);
        if(!empty($array_auxiliar[1])){
          $data['email'] = $array_auxiliar[1];
        }else{
          $data['email']="";
        }
        $this->load->view('templates/header',$data);
        $this->load->view('templates/tabela',$data);
        $this->load->view('templates/footer',$data);

      }


  }
  public function deleterow()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $resposta=$this->input->post('id_comentario');
    // $resposta=5;
    // $data['title'] = 'Create a news item';

      $executa=$this->tabela_model->delete_row_of_table($resposta);
      if($executa!=false){
        $data['array']=$executa;
        $data['email']="merda1";
        // $array_auxiliar=explode('?.',$_SERVER['REQUEST_URI']);
        // if(!empty($array_auxiliar[1])){
        //   $data['email'] = $array_auxiliar[1];
        // }else{
        //   $data['email']="";
        // }
        $this->load->view('templates/header',$data);
        $this->load->view('templates/tabela',$data);
        $this->load->view('templates/footer',$data);
      }else{
        // $array_auxiliar=explode('?.',$_SERVER['REQUEST_URI']);
        // if(!empty($array_auxiliar[1])){
        //   $data['email'] = $array_auxiliar[1];
        // }else{
        //   $data['email']="";
        // }
        $data['email']="merda2";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/tabela',$data);
        $this->load->view('templates/footer',$data);

      }


  }

}
?>
