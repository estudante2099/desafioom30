<?php
require_once ("classe/Connection.php");
require_once ("classe/AlunoDao.php");
require_once ("classe/UniformeDao.php");
require_once ("classe/TamanhoDao.php");
require_once ("classe/Functions.php");

$db_handle = new BancoController();

if (! empty($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "";
}

$title = "";

switch ($action) {

    case "action-aluno-add":

        if(isset($_FILES['fotoAluno']))
        {
          date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
    
          $ext = strtolower(substr($_FILES['fotoAluno']['name'],-4)); //Pegando extensão do arquivo
          $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
          $dir = 'uploads/'; //Diretório para uploads
    
          move_uploaded_file($_FILES['fotoAluno']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        }

        
        if (isset($_POST['add'])) {

            $dateBirth = $_POST["dtnascimento"];

            $name = $_POST['Nome'];
            $NomeMae = $_POST['NomeMae'];
            $ra = $_POST['ra'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            
            $dtnascimento = date('Y-m-d H:i:s', strtotime($dateBirth));
            $Rua = $_POST['Rua'];
            $Numero = $_POST['Numero'];
            $Bairro = $_POST['Bairro'];
            $compl = $_POST['compl'];
            $Cidade = $_POST['Cidade'];
            $Estado = $_POST['Estado'];
            $cep = $_POST['cep'];
            $Email = $_POST['Email'];
            $tel = $_POST['tel'];
            $fotoAluno = $new_name;//$_POST['fotoAluno'];
            $uniformeId = "1";

            
            $aluno = new Aluno();

            $insertId = $aluno->addAluno($name, $fotoAluno, $NomeMae, $dtnascimento, $rg, $cpf, $ra, $cep, $Rua, $Numero, $Bairro, $compl, $Cidade, $Estado, $Email, $tel, $uniformeId);

            if($insertId  == true){
              redirect("index.php?aluno=true");
            } else {
              redirect("index.php?alunoJaExiste=true");
            }
        }

      break;

      case "action-aluno-edit":
          $aluno_ra = $_GET["ra"];
          $aluno = new Aluno();
          $result = $aluno->getAlunoById($aluno_ra);


          if(isset($_FILES['fotoAluno']))
          {
            date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
      
            $ext = strtolower(substr($_FILES['fotoAluno']['name'],-4)); //Pegando extensão do arquivo
            $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
            $dir = 'uploads/'; //Diretório para uploads
      
            move_uploaded_file($_FILES['fotoAluno']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
          }
          
          //Edição 
          if (isset($_POST['add'])) {
                $name = $_POST['Nome'];
                $NomeMae = $_POST['NomeMae'];
                $ra = $_POST['ra'];
                $cpf = $_POST['cpf'];
                $rg = $_POST['rg'];
                if ($_POST["dtnascimento"]) {
                    $dtnascimento_timestamp = strtotime($_POST["dtnascimento"]);
                    $dtnascimento = date("Y-m-d", $dtnascimento_timestamp);
                }
                $Rua = $_POST['Rua'];
                $Numero = $_POST['Numero'];
                $Bairro = $_POST['Bairro'];
                $compl = $_POST['compl'];
                $Cidade = $_POST['Cidade'];
                $Estado = $_POST['Estado'];
                $cep = $_POST['cep'];
                $Email = $_POST['Email'];
                $tel = $_POST['tel'];
                $fotoAluno = $new_name;//$_POST['fotoAluno'];
                $uniformeId = "1";

                $aluno->editarAluno($name, $fotoAluno, $NomeMae, $dtnascimento, $rg, $cpf, $ra, $cep, $Rua, $Numero, $Bairro, $compl, $Cidade, $Estado, $Email, $tel, $uniformeId, $aluno_ra);

                redirect("index.php?aluno=true&action=listar-aluno");
            }
            
      break;

      case "action-aluno-delete":
            $aluno_ra = $_GET["ra"];
            $aluno = new Aluno();
            
            $aluno->deleteAluno($aluno_ra);
            //deletar uniforme?
            redirect("index.php?aluno=true");
            //$result = $aluno->listaAluno();
            break;          

      //Ideia básica para cadastro de uniformes por aluno. 
      case "action-uniforme-add":
            $aluno = new Aluno();
            $uniforme = new Uniforme();
            $tamanho = new Tamanho();
            
            $alunoResult = $aluno->listaAlunoPorRA();
            $uniformeResult = $uniforme->listaPecasUniforme();
            $tamanhoResult = $tamanho->listaTamanho();

            //Adiciona o uniforme para o aluno
            if (isset($_POST['add'])) {

              $ra =  $ra = $_POST['raaluno'];

              foreach ($uniformeResult as $k => $v) {

                $peca = $uniformeResult[$k]["ID"];
                $tamanho = (int)$_POST[$uniformeResult[$k]["ID"]];

                $uniforme2 = new Uniforme();

                $insertUniforme = $uniforme2->addUniforme($ra, $peca, $tamanho);
              }
  
                redirect("index.php?uniformeCadastrado=true");
  
          }



      break;  
            
      case "listar-aluno":
            $aluno = new Aluno();
            $result = $aluno->listaAluno();
            break;               
        
      default:

      break;    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>OM30 - Administração</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="web/content/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="web/content/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="web/content/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="web/content/css/estilo.css">
</head>
<!--
Página inicial criada com o auxílio do excelente dashboard AdminLTE
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Inicial</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="web/content/img/logo-ok-white.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">OM30 Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="web/content/img/avatar_fra.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Francisco Alves</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Administração
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='index.php?aluno=true&action=listar-aluno' class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Alunos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?uniforme=true&action=action-uniforme-add" class="nav-link">
                  <i class="fas fa-tshirt nav-icon"></i>
                  <p>Uniformes</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content pt-2">
      <div class="container-fluid">
          
        <div class="row">
            <div class="col-md-12" style="min-height:500px;">

            <?php
                //Explicar esse artificio por não estar usando codeignite nem laravel
                if (isset($_GET['aluno'])) {
                    require_once "web/aluno.php";
                } 
                
                if (isset($_GET['aluno-add'])) {
                    require_once "web/aluno-add.php";
                } 

                if (isset($_GET['aluno-edit'])) {
                    require_once "web/aluno-edit.php";
                } 


                if (isset($_GET['alunoJaExiste'])) {
                    echo "<p class='alert alert-danger'>Ops! Este RA já está cadastrado em nosso sistema. <a href='index.php?aluno=true'>Voltar para a página de alunos</a><p/> ";
                } 
                
                if (isset($_GET['uniformeCadastrado'])) {
                    echo "<p class='alert alert-success'>Uniforme cadastrado com sucesso. <p/> ";
                }                   

                if (isset($_GET['uniforme'])) {
                    require_once "web/uniforme.php";
                }                 
                
            ?>

            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://www.om30.com.br/">OM30</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="web/content/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="web/content/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="web/content/plugins/datatables/jquery.dataTables.js"></script>
<script src="web/content/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE -->
<script src="web/content/js/adminlte.js"></script>
<!-- page script -->

<script src="web/content/js/jquery.mask.js"></script>

<script src="web/content/js/validate.js"></script>
<script>
  $(function () {
    $('#exemploDatatable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>
</body>
</html>
