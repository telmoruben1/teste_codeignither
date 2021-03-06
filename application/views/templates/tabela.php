<div class="container2">
  <div class="tabela">
    <form method="post" action="/CodeIgniter-ponchaAdvisor/index.php/tabela/verifica_pesquisa/?.<?php echo $email ?>">
      <div class="form-row align-items-center">
        <div class="col-auto">
          <input type="text" class="form-control mb-2" id="titulo" placeholder="titulo" name="titulo">
        </div>
        <div class="col-auto">
          <select class="custom-select mb-2 mr-sm-2 " id="inlineFormCustomSelect" name="id_bar">
            <option value="2" selected>Venda do Belo</option>
            <option value="3">Castrinhos</option>
            <option value="4">Poncha de Sao vicente</option>
            <option value="5">Poncha da serra de agua</option>
          </select>
        </div>
        <div class="col-auto">
            <select class="custom-select mb-2 mr-sm-2 " id="inlineFormCustomSelect" name="classificacao">
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <div class="tabela2">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Classificacao</th>
          <th scope="col">Nome do bar</th>
          <th scope="col">Remove</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if(!empty($array)){

          foreach ($array as $value){
            echo "<tr><td>".$value["titulo"]."</td><td>".$value["classificacao"]."</td><td>".$value["id_bar"].'</td><td><span class="table-remove"><button type="button"  value='.$value["id"].' class="remove_button2 btn btn-danger btn-rounded btn-sm my-0" >Remove</button></span></td><td><span class="table-remove"><button type="button"  value='.$value["id"].' class="update_table btn btn-warning btn-rounded btn-sm my-0">Update</button></span></td></tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  <div id="janelaUpdate" style="width: 20%;height: auto;margin-left: 20%;position: absolute;display: none;">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update Classificacao</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="formGroupExampleInput">Titulo</label>
              <input type="text" class="form-control" id="titulo_update" placeholder="Titulo">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Classificacao</label>
            <select class="custom-select mb-2 mr-sm-2 " id="classificacao_update" name="classificacao">
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="update_table_pop_up btn btn-warning btn-rounded btn-sm my-0">Submit</button>
        </div>
      </div>
    </div>
  </div>

</div>
