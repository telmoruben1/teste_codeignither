$(document).ready(function(){
  var id_rio=0;
  $(".remove_button2").click(function(){
    console.log("remove");
     id_rio=$(this).val();
    // console.log(id_rio);
    console.log();
    var url=window.location.href;
    var array_user=url.split('?.');
    console.log(array_user[1]);
    if(array_user[1] !=""){
      console.log("apagou");
      $.ajax({
        type: "post",
        url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/login/verifica_user_logado",
        cache: false,
        data: {"user":array_user[1]},
        success: function(response){
          try{
            //console.log(response)  --> "Result";
            // console.log("deu");
            if(response==true){
              console.log("deu logado");
              $.ajax({
                type: "post",
                url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/tabela/deleterow",
                cache: false,
                data: {"id_comentario":id_rio},
                success: function(response){
                  try{
                    location.reload();
                  }catch(e) {
                    console.log(e);
                    alert('Exception while request..');
                  }
                },
                error: function(){
                  alert('Error while request..');
                }
              });
            }else{
              console.log("deu nao logado");
            }

            // location.reload();

          }catch(e) {
            console.log(e);
            alert('Exception while request..');
          }
        },
        error: function(){
          alert('Error while request..');
        }
      });

    }else{
      alert("Não tem permissao de remover");
    }

  });
  $(".update_table").click(function(){
    console.log("update");
    id_rio=$(this).val();
    console.log(id_rio);
    $("#janelaUpdate").css('display','block');
    $(".tabela2").css('display','none');
    $(".tabela").css('display','none');

  });
  $(".close").click(function(){
    $("#janelaUpdate").css('display','none');
    $(".tabela2").css('display','block');
    $(".tabela").css('display','block');
  });



  $(".update_table_pop_up").click(function(){
    $("#janelaUpdate").css('display','none');
    $(".tabela2").css('display','block');
    $(".tabela").css('display','block');
    var tit=$("#titulo_update").val();
    var classificacao=$("#classificacao_update").val();
    console.log(tit);
    console.log(classificacao);
    console.log(id_rio);
    var url=window.location.href;
    var array_user=url.split('?.');
    console.log(array_user[1]);
    if(array_user[1] !=""){
      console.log("apagou");
      $.ajax({
        type: "post",
        url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/login/verifica_user_logado",
        cache: false,
        data: {"user":array_user[1]},
        success: function(response){
          try{
            //console.log(response)  --> "Result";
            // console.log("deu");
            if(response==true){
              console.log("deu logado");
              $.ajax({
                type: "post",
                url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/tabela/update_table",
                cache: false,
                data: {"id_comentario":id_rio,"titulo":tit,"classificacao":classificacao},
                success: function(response){
                  try{
                    
                    location.reload();

                  }catch(e) {
                    console.log(e);
                    alert('Erro no cath');
                  }
                },
                error: function(){
                  alert('Error no update');
                }
              });
            }else{
              console.log("deu nao logado");
            }

            // location.reload();

          }catch(e) {
            console.log(e);
            alert('Exception while request..');
          }
        },
        error: function(){
          alert('Error while request..');
        }
      });

    }else{
      alert("Não tem permissao de remover");
    }

  });


});
