
<div class="card" style="width: 100%;">
  <div class="card-body">
    <h4><i class="fas fa-edit" style="color:#741233"></i> Editar Cadastro</h4>
    <div class="container" style="margin-top:40px;">


    <form name="formEditar" method="post" action="" id="formEditar" enctype="multipart/form-data">

    <div class="form-row text-left">
    <div class="col-md-2">
        <img src="uploads/<?php echo $result[0]["FOTO"]; ?>" class="img-thumbnail" style="max-height:100px;">
    </div>
    <div class="col-md-10">
        <h3><?php echo $result[0]["NOALUNO"];?></h3>
    </div>
    <div class="form-group col-md-5">
      <label for="Nome">Nome*</label>
      <input type="text" class="form-control" id="Nome" name="Nome" value="<?php echo $result[0]["NOALUNO"];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="NomeMae">Nome da Mãe*</label>
      <input type="text" class="form-control" id="NomeMae" name="NomeMae" 
      value="<?php echo $result[0]["NOMAE"];?>">
    </div>
    <div class="form-group col-md-3">
        <label>Data de Nascimento*</label>

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
        </div>
        <input type="date" id="dtnascimento" name="dtnascimento" class="form-control"
        value="<?php echo date('Y-m-d', strtotime($result[0]["DTNASCIMENTO"]));?>">
        </div>
        <!-- /.input group -->
    </div>    


  </div>


  <div class="form-row">
  <div class="form-group col-md-4">
        <label for="ra">RA</label>
        <input type="text" class="form-control" id="ra" name="ra" value="<?php echo $result[0]["RA"];?>">
    </div>      
    <div class="form-group col-md-5">
        <label for="cpf">CPF*</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $result[0]["CPF"];?>">
    </div>
    <div class="form-group col-md-3">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $result[0]["RG"];?>">
    </div>
  </div>  
  <div class="form-row">
    <div class="form-group col-md-11">
        <label for="Rua">Rua*</label>
        <input type="text" class="form-control" id="Rua" name="Rua" value="<?php echo $result[0]["RUA"];?>">
    </div>
    <div class="form-group col-md-1">
        <label for="Numero">Numero*</label>
        <input type="text" class="form-control" id="Numero" name="Numero" value="<?php echo $result[0]["NUMERO"];?>">
    </div>
    <div class="form-group col-md-6">
        <label for="Bairro">Bairro*</label>
        <input type="text" class="form-control" id="Bairro" name="Bairro" value="<?php echo $result[0]["BAIRRO"];?>">
    </div>
    <div class="form-group col-md-6">
        <label for="compl">Complemento</label>
        <input type="text" class="form-control" id="compl" name="compl" value="<?php echo $result[0]["COMPLEMENTO"];?>">
    </div>    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Cidade">Cidade*</label>
      <input type="text" class="form-control" id="Cidade" name="Cidade" value="<?php echo $result[0]["CIDADE"];?>">
    </div>
    <div class="form-group col-md-4">
      <label for="Estado">Estado*</label>
      <select id="Estado" name="Estado" class="form-control">
      <option value="">Selecione o Estado</option>
      <option <?php if($result[0]["ESTADO"] == "AC")  {?>  selected <?php } ?>   value="AC"  >Acre</option>                   
    <option <?php if($result[0]["ESTADO"] == "AL" ) {?>  selected <?php } ?>   value="AL"  >Alagoas</option>                
	<option <?php if($result[0]["ESTADO"] == "AP" ) {?>  selected <?php } ?>   value="AP"  >Amapá</option>                  
	<option <?php if($result[0]["ESTADO"] == "AM" ) {?>  selected <?php } ?>   value="AM"  >Amazonas</option>               
	<option <?php if($result[0]["ESTADO"] == "BA" ) {?>  selected <?php } ?>   value="BA"  >Bahia</option>                  
	<option <?php if($result[0]["ESTADO"] == "CE" ) {?>  selected <?php } ?>   value="CE"  >Ceará</option>                  
	<option <?php if($result[0]["ESTADO"] == "DF" ) {?>  selected <?php } ?>   value="DF"  >Distrito Federal</option>       
	<option <?php if($result[0]["ESTADO"] == "ES" ) {?>  selected <?php } ?>   value="ES"  >Espírito Santo</option>         
	<option <?php if($result[0]["ESTADO"] == "GO" ) {?>  selected <?php } ?>   value="GO"  >Goiás</option>                  
	<option <?php if($result[0]["ESTADO"] == "MA" ) {?>  selected <?php } ?>   value="MA"  >Maranhão</option>               
	<option <?php if($result[0]["ESTADO"] == "MT" ) {?>  selected <?php } ?>   value="MT"  >Mato Grosso</option>            
	<option <?php if($result[0]["ESTADO"] == "MS" ) {?>  selected <?php } ?>   value="MS"  >Mato Grosso do Sul</option>     
	<option <?php if($result[0]["ESTADO"] == "MG" ) {?>  selected <?php } ?>   value="MG"  >Minas Gerais</option>           
	<option <?php if($result[0]["ESTADO"] == "PA" ) {?>  selected <?php } ?>   value="PA"  >Pará</option>                   
	<option <?php if($result[0]["ESTADO"] == "PB" ) {?>  selected <?php } ?>   value="PB"  >Paraíba</option>                
	<option <?php if($result[0]["ESTADO"] == "PR" ) {?>  selected <?php } ?>   value="PR"  >Paraná</option>                 
	<option <?php if($result[0]["ESTADO"] == "PE" ) {?>  selected <?php } ?>   value="PE"  >Pernambuco</option>             
	<option <?php if($result[0]["ESTADO"] == "PI" ) {?>  selected <?php } ?>   value="PI"  >Piauí</option>                  
	<option <?php if($result[0]["ESTADO"] == "RJ" ) {?>  selected <?php } ?>   value="RJ"  >Rio de Janeiro</option>         
	<option <?php if($result[0]["ESTADO"] == "RN" ) {?>  selected <?php } ?>   value="RN"  >Rio Grande do Norte</option>    
	<option <?php if($result[0]["ESTADO"] == "RS" ) {?>  selected <?php } ?>   value="RS"  >Rio Grande do Sul</option>      
	<option <?php if($result[0]["ESTADO"] == "RO" ) {?>  selected <?php } ?>   value="RO"  >Rondônia</option>               
	<option <?php if($result[0]["ESTADO"] == "RR" ) {?>  selected <?php } ?>   value="RR"  >Roraima</option>                
	<option <?php if($result[0]["ESTADO"] == "SC" ) {?>  selected <?php } ?>   value="SC"  >Santa Catarina</option>         
	<option <?php if($result[0]["ESTADO"] == "SP" ) {?>  selected <?php } ?>   value="SP"  >São Paulo</option>              
	<option <?php if($result[0]["ESTADO"] == "SE" ) {?>  selected <?php } ?>   value="SE"  >Sergipe</option>                
    <option <?php if($result[0]["ESTADO"] == "TO" ) {?>  selected <?php } ?>   value="TO"  >Tocantins</option>   
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="cep">Cep*</label>
      <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $result[0]["CEP"];?>">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $result[0]["EMAIL"];?>">
        </div>
        <div class="form-group col-md-4">
      <label for="tel">Telefone</label>
      <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $result[0]["TELEFONE"];?>">
    </div>
        <div class="input-group mb-3 col-md-12">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fotoAluno" name="fotoAluno" value="<?php echo $result[0]["FOTO"];?>">
                <label class="custom-file-label" for="fotoAluno">Selecione o arquivo</label>
            </div>
        </div>        

    </div>
    <input type="hidden" id="uniformeId" name="uniformeId" value="1" >
 
    <div class="text-right">
        <input type="submit" name="add" id="btnSubmit" value="Atualizar" class="btn btn-custom-om30" />
    </div>

</form>
</div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
        $( "#Email" ).focusout(function() {
          
          var email = $('#Email').val();
          if(!isEmail(email)){
            alert("Email invalido");
            $('#Email').val("");
          }
        })
    </script>

