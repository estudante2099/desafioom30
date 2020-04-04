<?php 
require_once ("classe/Connection.php");
class Aluno
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new BancoController();
    }

    function addAluno($name, $fotoAluno, $NomeMae, $dtnascimento, $rg, $cpf, $ra, $cep, $Rua, $Numero, $Bairro, $compl, $Cidade, $Estado, $Email, $tel, $uniformeId ) {

        $aluno = new Aluno();
        //Verifica se o RA já está cadastrado
        $result = $aluno->getAlunoById($ra);

        if($result == ""){
            $query = "INSERT INTO om30_aluno (NOALUNO,FOTO, NOMAE, DTNASCIMENTO, RG, CPF, RA, CEP, RUA, NUMERO, BAIRRO, COMPLEMENTO,CIDADE, ESTADO, EMAIL, TELEFONE, UNIFORME) VALUES (?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?)";
            $paramType = "sssdsssssssssssss";
            $paramValue = array(
                $name,
                $fotoAluno,
                $NomeMae,
                $dtnascimento,
                $rg,
                $cpf,
                $ra,
                $cep,
                $Rua,
                $Numero,
                $Bairro,
                $compl,
                $Cidade,
                $Estado,
                $Email,
                $tel,
                $uniformeId
            );
            
            $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
            return $insertId;
        } else {
            return false;
        }

    }
    
    function editarAluno($name, $fotoAluno, $NomeMae, $dtnascimento, $rg, $cpf, $ra, $cep, $Rua, $Numero, $Bairro, $compl, $Cidade, $Estado, $Email, $tel, $uniformeId, $aluno_ra) {
        $query = "UPDATE om30_aluno SET NOALUNO = ?,FOTO = ?, NOMAE = ?, DTNASCIMENTO = ?, RG = ?, CPF = ?, RA = ?, CEP = ?, RUA = ?, NUMERO = ?, BAIRRO = ?, COMPLEMENTO = ?,CIDADE = ?, ESTADO = ?, EMAIL = ?, TELEFONE = ?, UNIFORME = ? WHERE RA = ?";
        $paramType = "sssissssssssssssss";
        $paramValue = array(
            $name,
            $fotoAluno,
            $NomeMae,
            $dtnascimento,
            $rg,
            $cpf,
            $ra,
            $cep,
            $Rua,
            $Numero,
            $Bairro,
            $compl,
            $Cidade,
            $Estado,
            $Email,
            $tel,
            $uniformeId,
            $aluno_ra
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }

    function getAlunoById($aluno_ra) {
        $query = "SELECT * FROM om30_aluno WHERE RA = ?";
        $paramType = "i";
        $paramValue = array(
            $aluno_ra
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }
    
    //Exclui o aluno selecionado
    function deleteAluno($aluno_ra) {
        $query = "DELETE FROM om30_aluno WHERE RA = ?";
        $paramType = "s";
        $paramValue = array(
            $aluno_ra 
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    //Lista completa de alunos
    function listaAluno() {
        $sql = "SELECT NOALUNO, FOTO, NOMAE, DTNASCIMENTO, RG, CPF, RA, CEP, RUA, NUMERO, BAIRRO, COMPLEMENTO,CIDADE, ESTADO, EMAIL, TELEFONE, UNIFORME FROM om30_aluno ORDER BY noaluno";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }

    function listaAlunoPorRA() {
        $sql = "SELECT DISTINCT (RA) as RA, NOALUNO AS NOME FROM om30_aluno ORDER BY noaluno";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }

    function listaPecasUniforme() {
        $sql = "SELECT ID, DESCRICAO FROM om30_uniforme ORDER BY ID";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }    

}
?>