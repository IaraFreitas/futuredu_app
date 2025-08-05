<?php

    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
    //INFORMAR A URL BASE DO PROJETO
    define('URL_BASE', 'https://agenciatipi03.smpsistema.com.br/aluno/iara/futuredu_app/public/');

    spl_autoload_register(function($class) {
    //O .. NO CÓDIGO É PARA SAIR DA PASTA QUE ESTIVER E ENTRAR NA QUE VC DESEJA, NO CASO ABAIXO O /APP FAZ ENTRAR NA PASTA APP
        if(file_exists('../app/controllers/'.$class.'.php')){
            require_once '../app/controllers/'.$class.'.php';
        }

        if(file_exists('../rotas/'.$class.'.php')){
            require_once '../rotas/'.$class.'.php';
        }
    });

?>