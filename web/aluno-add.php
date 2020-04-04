
<div class="card" style="width: 100%;">
  <div class="card-body">
    <h4><i class="fas fa-user-plus" style="color:#741233"></i> Incluir Aluno</h4>
    <div class="container" style="margin-top:40px;">
    <p>Campos com * são de preenchimento obrigatório.</p>

    <form name="formAdicionar" method="post" action="" id="formAdicionar" enctype="multipart/form-data">

    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="Nome">Nome*</label>
      <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome Completo">
    </div>
    <div class="form-group col-md-4">
      <label for="NomeMae">Nome da Mãe*</label>
      <input type="text" class="form-control" id="NomeMae" name="NomeMae" placeholder="Nome completo da mãe">
    </div>
    <div class="form-group col-md-3">
        <label>Data de Nascimento*</label>

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
        </div>
        <input type="date" id="dtnascimento" name="dtnascimento" class="form-control" >
        </div>
        <!-- /.input group -->
    </div>    


  </div>


  <div class="form-row">
  <div class="form-group col-md-4">
        <label for="ra">RA</label>
        <input type="text" class="form-control" id="ra" name="ra" placeholder="" maxlength="10">
    </div>      
    <div class="form-group col-md-5">
        <label for="cpf">CPF*</label>
        <input type="text" class="form-control" id="cpf" name="cpf" data-mask="000.000.000-00" placeholder="000.000.000-00">
    </div>
    <div class="form-group col-md-3">
        <label for="rg">RG</label>
        <input type="text" class="form-control" id="rg" name="rg" data-mask="00.000.000-0" placeholder="00.000.000-0">
    </div>
  </div>  
  <div class="form-row">
    <div class="form-group col-md-11">
        <label for="Rua">Rua*</label>
        <input type="text" class="form-control" id="Rua" name="Rua" placeholder="">
    </div>
    <div class="form-group col-md-1">
        <label for="Numero">Numero*</label>
        <input type="text" class="form-control" id="Numero" name="Numero" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label for="Bairro">Bairro*</label>
        <input type="text" class="form-control" id="Bairro" name="Bairro" placeholder="">
    </div>
    <div class="form-group col-md-6">
        <label for="compl">Complemento</label>
        <input type="text" class="form-control" id="compl" name="compl" placeholder="">
    </div>    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Cidade">Cidade*</label>
      <input type="text" class="form-control" id="Cidade" name="Cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="Estado">Estado*</label>
      <select id="Estado" name="Estado" class="form-control">
      <option value="">Selecione o Estado</option>
    <option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="cep">Cep*</label>
      <input type="text" class="form-control" id="cep" name="cep" data-mask="00000-000" placeholder="99999-999">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" placeholder="voce@voce.com">
        </div>
        <div class="form-group col-md-4">
      <label for="tel">Telefone</label>
      <input type="text" class="form-control" id="tel" name="tel" data-mask="(00)00000-0000" placeholder="(99)99999-9999">
    </div>
        <div class="input-group mb-3 col-md-12">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fotoAluno" name="fotoAluno">
                <label class="custom-file-label" for="fotoAluno">Selecione o arquivo</label>
            </div>
        </div>        

    </div>
    <input type="hidden" id="uniformeId" name="uniformeId" value="1" >

 
    <div class="text-right">
        <input type="submit" name="add" id="btnSubmit" value="Adicionar" class="btn btn-custom-om30" />
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

