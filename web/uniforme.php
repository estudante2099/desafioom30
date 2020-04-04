

<h3>Adicionar Uniforme</h3>

<form name="formUniforme" method="post" action="" id="formUniforme">
  <div class="form-row">
    <div class="form-group col-md-3">
      <select id="raaluno" name="raaluno" class="form-control">
      <option value="">Selecione o Aluno</option>
      <?php
          if (!empty($alunoResult)) {
            foreach ($alunoResult as $k => $v) {
      ?>
        <option value="<?php echo $alunoResult[$k]["RA"]; ?>"><?php echo $alunoResult[$k]["NOME"]; ?></option>
      <?php
          }
        }
      ?>        
      </select>
    </div>
    <div class="col-md-12" style="background-color:white">
        <div class="row">
        <div class="col-md-12">
         
        </div>
    
      <?php
          if (!empty($uniformeResult)) {
            foreach ($uniformeResult as $k => $v) {
      ?>
        <div class="form-group col-md-4">
              <p><?php echo $uniformeResult[$k]["DESCRICAO"]; ?></p>

              <?php if($uniformeResult[$k]["ID"] == 1){ ?>
                  <img src="web/content/img/uniforme/camisa.jpg" class="img" style="max-height:200px;" />
              <?php } ?>

              <?php if($uniformeResult[$k]["ID"] == 2){ ?>

                <img src="web/content/img/uniforme/calça.jpg" class="img" style="max-height:200px;" />
 
              <?php } ?>

                  <?php if($uniformeResult[$k]["ID"] == 3){ ?>
                  
                      <img src="web/content/img/uniforme/abrigo.jpg" class="img" style="max-height:200px;" />
                  
                  <?php } ?>

            <div class="pt-3">
              <select id="<?php echo $uniformeResult[$k]["ID"]; ?>" name="<?php echo $uniformeResult[$k]["ID"]; ?>" class="form-control col-md-4">
                <option value="">Tamanho</option>
                <?php
                  if (!empty($tamanhoResult)) {
                    foreach ($tamanhoResult as $k => $v) {
                ?>
                  <option value="<?php echo $tamanhoResult[$k]["ID"]; ?>"><?php echo $tamanhoResult[$k]["DESCRICAO"]; ?></option>
                <?php
                    }
                  }
                ?>  
              </select>
              </div>
        </div>
      <?php
          }
        }
      ?>        
        </div>
        <div class="text-center pb-4">
        <input type="submit" name="add" id="btnSubmit" value="Adicionar Uniforme" class="btn btn-custom-om30" />
    </div>   
      </div> 
      
    </div>    
  </div>    
</form>