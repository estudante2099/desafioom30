<?php 
require_once ("classe/Connection.php");
class Tamanho
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new BancoController();
    }

    
    function listaTamanho() {
        $sql = "SELECT ID, DESCRICAO FROM om30_tamanho ORDER BY ID";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }    
    

}
?>