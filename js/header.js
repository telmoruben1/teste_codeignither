 $(document).ready(function(){

   $("#logout").click(function(){
     console.log("click");
     // document.cookie = "logado="+0;
     // document.cookie = "user=";
     // window.location.replace("http://localhost/CodeIgniter-ponchaAdvisor/index.php/login/logout");
     // window.location.href='http://localhost/CodeIgniter-ponchaAdvisor/index.php/login/logout';
        // $.ajax(
        //        {
        //            type:"post",
        //            url: "<?php echo base_url(); ?>/CodeIgniter-ponchaAdvisor/index.php/login/logout",
        //            data: {"logado": 0},
        //            success:function(response)
        //            {
        //                 alert("Record added successfully");
        //            }
        //            error: function()
        //            {
        //                alert('Something is wrong');
        //            }
        //        }
        //    );

   });
   $("#tabela").click(function(){
     console.log("tabela");
     // window.location.href = 'http://localhost/CodeIgniter-ponchaAdvisor/index.php/tabela/view';
        // $.ajax(
        //        {
        //            type:"post",
        //            url: "<?php echo base_url(); ?>/CodeIgniter-ponchaAdvisor/index.php/login/logout",
        //            data: {"logado": true},
        //            success:function(response)
        //            {
        //                 alert("Record added successfully");
        //            }
        //            error: function()
        //            {
        //                alert('Something is wrong');
        //            }
        //        }
        //    );

   });


});
