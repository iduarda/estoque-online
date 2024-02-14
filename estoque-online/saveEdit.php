<?php

    include_once('config.php');

    if(isset($_POST['update'])){
        $iditem = $_POST['iditem'];
        $nomeitem = $_POST['nomeitem'];
        $quantitens = $_POST['quantitens'];
        $valcompraitens = $_POST['valcompraitens'];
        $valorvendaitens = $_POST['valorvendaitens'];

        $sqlUpdate = "UPDATE itens SET nomeitem='$nomeitem', quantitens='$quantitens', valcompraitens='$valcompraitens', valorvendaitens='$valorvendaitens' WHERE iditem='$iditem'";

        $resul = $conexao->query($sqlUpdate);

    }
    header('Location: listarproduto.php');

?>