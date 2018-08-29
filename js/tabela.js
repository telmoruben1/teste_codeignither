$(document).ready(function(){
  var id_rio=0;
  $(".remove_button2").click(function(){
    console.log("remove");
     id_rio=$(this).val();
    console.log(id);
      $.ajax({
        type: "post",
        url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/tabela/deleterow",
        cache: false,
        data: {"id_comentario":id},
        success: function(response){
          try{
            //console.log(response)  --> "Result";
            // console.log("deu");
            alert("merda");
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
  });
  $(".update_table").click(function(){
    console.log("update");
    id_rio=$(this).val();
    console.log(id_rio);
    $("#janelaUpdate").css('display','block');
    $(".tabela2").css('display','none');
    $(".tabela").css('display','none');

      // $.ajax({
      //   type: "post",
      //   url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/tabela/deleterow",
      //   cache: false,
      //   data: {"id_comentario":id},
      //   success: function(response){
      //     try{
      //       console.log("deu");
      //       location.reload();
      //
      //     }catch(e) {
      //       console.log(e);
      //       alert('Exception while request..');
      //     }
      //   },
      //   error: function(){
      //     alert('Error while request..');
      //   }
      // });
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
    $.ajax({
      type: "post",
      url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/tabela/update_table",
      cache: false,
      data: {"id_comentario":id_rio,"titulo":tit,"classificacao":classificacao},
      success: function(response){
        try{
          console.log("deu");
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
  });


});
