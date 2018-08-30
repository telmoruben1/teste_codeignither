$(document).ready(function(){
  console.log("agoraaa");
  // $("#avalia_button2").click(function(){
  //
  // });
  $("#avalia_button2").click(function(){
    console.log("entraaa");
    var url=window.location.href;
    var array_user=url.split('?.');
    console.log(array_user[1]);
    var array_id_bares=($('#exampleFormControlSelect1').val()).split('-');
    var id_bar=array_id_bares[1];
    // var obj={"id_bar":id_bar,"classificacao":$('form input[type=radio]:checked').val(),"titulo":$('#titulo_ava').val(),"avaliacao":$('#avaliacao').val(),"data_registo":$('#data_ava').val(),"date":"2069-08-22","id_utilizador":1};
    // console.log(obj);
    // if(array_user[1] !=""){
    //   $.ajax({
    //     type: "post",
    //     url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/login/verifica_user_logado",
    //     cache: false,
    //     data: {"user":array_user[1]},
    //     success: function(response){
    //       try{
    //         //console.log(response)  --> "Result";
    //         // console.log("deu");
    //         if(response==true){
    //           console.log("deu logado");
    //           $.ajax({
    //             type: "post",
    //             url: "http://localhost/CodeIgniter-ponchaAdvisor/index.php/avaliacao/inser_aval",
    //             cache: false,
    //             data: obj,
    //             success: function(response){
    //               try{
    //                 //console.log(response)  --> "Result";
    //                 // console.log("deu");
    //                 console.log("deu o insert avaliacao");
    //                 location.reload();
    //
    //               }catch(e) {
    //                 console.log(e);
    //                 alert('Exception while request..');
    //               }
    //             },
    //             error: function(){
    //               alert('Error while request..');
    //             }
    //           });
    //         }else{
    //           console.log("deu nao logado");
    //         }
    //
    //         // location.reload();
    //
    //       }catch(e) {
    //         console.log(e);
    //         alert('Exception while request..');
    //       }
    //     },
    //     error: function(){
    //       alert('Error while request..');
    //     }
    //   });
    //
    // }else{
    //   alert("Não tem permissao de remover");
    // }

  });
