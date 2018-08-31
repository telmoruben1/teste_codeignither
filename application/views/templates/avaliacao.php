<div class="containerAval" id=containerAval1>
  <div class="image">
    <div class="img2">
      <img src=<?php echo base_url("./img/ponhca_homem.jpg")?>  alt="">
    </div>
  </div>
  <div class="infor">
    <div class="info2">
      <h3>Palheiro da Adega, Poncha bar.</h3>
      <p>Cãmara de Lobos,Madeira, Arquipelago da Madeira</p>
      <button type="button" class="btn btn-primary">Classificações</button>
      <button type="button" class="btn btn-warning">Recomendações</button><br>
      <a href="#">Ver no mapa</a>
    </div>
  </div>

</div>
<h5 style="margin-left:2%;">As suas experiências em primeiro mão ajudam verdadeiramente os outros viajantes. Obrigado!</h5>
<form style="background-color:rgb(33, 33, 33);color:white;">
<div class="formulario" >
  <div class="form-group">
    <input type="hidden" id="idBar" name="barId" value="1235">
  </div>
  <fieldset class="form-group" >
    <div class="form-group">
      <label for="exampleFormControlSelect1">Nome do Bar</label>
      <select class="form-control" id="exampleFormControlSelect1" name="bar">
        <option>Venda do belo-2</option>
        <option>Castrinhos-3</option>
        <option>Poncha sao vicente-4</option>
        <option>Poncha da serra de agua-5</option>
      </select>
    </div>
    <h5>A sua avaliação geral para este bar</h5>
    <div class="form_ava" style="padding-left:1em;">
      <form class="myform" >
        <input type="radio" class="form-check-input" id="materialInline1" name="estrelas" value="5" checked  >
        <label   class="form-check-label" for="materialInline1" ><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label><p></p>
        <input type="radio" class="form-check-input" id="materialInline2" name="estrelas" value="4">
        <label class="form-check-label" for="materialInline2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label><p></p>
        <input type="radio" class="form-check-input" id="materialInline3" name="estrelas" value="3">
        <label class="form-check-label" for="materialInline3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label><p></p>
        <input type="radio" class="form-check-input" id="materialInline3" name="estrelas" value="2">
        <label class="form-check-label" for="materialInline3"><i class="fas fa-star"></i><i class="fas fa-star"></i></label><p></p>
        <input type="radio" class="form-check-input" id="materialInline3" name="estrelas" value="1">
        <label class="form-check-label" for="materialInline3"><i class="fas fa-star"></i></label><p></p>
      </form>
    </div>



  </fieldset>
  <div class="form-group">
    <label for="exampleTextarea">Titulo da sua avaliação</label>
    <input name="titulo" class="form-control" id="titulo_ava" rows="1" placeholder="Resumo da sua experiência"  maxlength="100" required value=""></input>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">A sua avaliação</label>
    <input name="avaliacao" class="form-control" id="avaliacao" rows="3" placeholder="Conte aos outros a sua experiência:descreva o lugar ou a atividade, recomendações para viajantes?" maxlength="500" required value=""></input>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Fotografias</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. Its a bit lighter and easily wraps to a new line.</small>
  </div>
  <div class="form-group row">
    <div class="col-10">
      <label for="example-date-input">Data de visita</label>
      <input name="data" class="form-control" type="date" value="2011-08-19" id="data_ava" value="" required>
    </div>
  </div>
  <input type="button" name="" value="Enviar avaliação" id="avalia_button2" class="btn btn-warning" style="color:white;">
</div>
</form>
