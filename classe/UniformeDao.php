<?php 
require_once ("classe/Connection.php");
class Uniforme
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new BancoController();
    }

    function listaPecasUniforme() {
        $sql = "SELECT ID, DESCRICAO FROM om30_uniforme ORDER BY ID";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
    
    function listaTamanho() {
        $sql = "SELECT ID, DESCRICAO FROM om30_tamanho ORDER BY ID";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }   

    function addUniforme($ra, $peca, $tamanho) {
            $query = "INSERT INTO om30_uniforme_aluno (RA, IDUNIFORME, IDTAMANHO) VALUES (?, ?, ?)";
            $paramType = "sii";
            $paramValue = array(
                $ra,
                $peca,
                $tamanho
            );
            
            $insertUniform = $this->db_handle->insert($query, $paramType, $paramValue);
            return $insertUniform;
    }    

}
?>