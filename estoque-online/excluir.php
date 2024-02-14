<?php

    if(!empty($_GET['iditem'])){
        
        include_once('config.php');

        $iditem = $_GET['iditem'];

        $sqlSelect = "SELECT * FROM itens WHERE iditem=$iditem";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
           $sqlDelete = "DELETE FROM itens WHERE iditem=$iditem";
           $resultDelete = $conexao->query($sqlDelete);
        }
    }
        header('Location: listarproduto.php');
    

?>