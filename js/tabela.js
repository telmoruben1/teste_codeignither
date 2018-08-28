$(document).ready(function(){
  $(".remove_button2").click(function(){
    console.log("remove");
    var id=$(this).val();
    console.log(id);
    // $.ajax({
    //            type:"post",
    //            url: "<?php echo base_url(); ?>/CodeIgniter-ponchaAdvisor/index.php/tabela/deleterow",
    //            ContentType: 'application/json',
    //            data: {"id_comentario": id},
    //            success:function(res)
    //            {
    //                 alert("Record added successfully");
    //            }
    //            error: function()
    //            {
    //                alert('Something is wrong');
    //            }
    //
    //        }
    //    );
  });
});
