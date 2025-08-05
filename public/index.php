<?php

    require_once('../config/config.php');
    //O NEW É QUANDO VC INSTACIA A PASTA, QUE É 
    $caminho = new Rotas();
    $caminho->executar();
?>