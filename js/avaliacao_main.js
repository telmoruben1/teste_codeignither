$(document).ready(function(){
  console.log("agoraaa");

  $("#avalia_button2").click(function(){
    var url=window.location.href;
    var array_user=url.split('?.');
    console.log(array_user[1]);
    var array_id_bares=($('#exampleFormControlSelect1').val()).split('-');
    var id_bar=array_id_bares[1];
    var classificacao=parseInt($('form input[type=radio]:checked').val());
    var titulo=$('#titulo_ava').val();
    var avaliacao=$('#avaliacao').val();
    var data_regis=$('#data_ava').val();
    if(array_user[1] !=""){
      $.ajax({
        type: "post",
        url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/login/verifica_user_logado",
        cache: false,
        data: {"user":array_user[1]},
        success: function(response){
          console.log(response);
          if(response==true){
            console.log("deu logado");
            $.ajax({
              type: "post",
              url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/avaliacao/inser_aval",
              cache: false,
              data: {"id_bar":id_bar,"classificacao":classificacao,"titulo":titulo,"avaliacao":avaliacao,"data_registo":data_regis,"date":"2069-08-22","id_utilizador":1},
              success: function(response){
                if(response=="success"){
                  alert("A sua avaliacao foi enviada com sucesso obrigado!");
                }
              },
              error: function(e){
                 alert("Não deu ainda 5");
              }
            });
          }else{
            console.log("deu nao logado");
          }

        },
        error: function(e){
          // alert('Error no verifica logado');
          console.log(e);
        }
      });

    }else{
      alert("Não tem permissao de remover");
    }
  });
});
