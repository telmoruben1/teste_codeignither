<?php
  /**
   *
   */
  class Avaliacao extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('avaliacao_model');
      $this->load->helper('url_helper');
    }


    public function inser_aval()
    {
        print_r("merda");
        $data = array(
          'classificacao' =>$_POST['classificacao'],
          'titulo' =>$_POST['titulo'],
          'avaliacao'=>$_POST['avaliacao'],
          'data_registo'=>$_POST['data_registo'],
          'date'=>$_POST['date'],
          'id_utilizador'=> $_POST['id_utilizador']

        );
        print_r($data);
        // $executa=$this->login_model->set_registoAval();
        // if($executa==true){
        //   $array_auxiliar=explode('?.',$_SERVER['REQUEST_URI']);
        //   if(!empty($array_auxiliar[1])){
        //     $data['email'] = $array_auxiliar[1];
        //   }else{
        //     $data['email']="";
        //   }
        //   $this->load->view('templates/header',$data);
        //   $this->load->view('templates/success_user');
        //   $this->load->view('templates/footer');
        // }else{
        //   // print_r($_COOKIE["user"]);
        //   $data['email']="";
        //   $this->load->view('templates/header',$data);
        //   $this->load->view('templates/erro_user ');
        //   $this->load->view('templates/footer');
        //
        // }

    }



  }

 ?>
