<?php
    class Controller{
        //FUNÇÃO PARA CARREGAR AS VIEWS
        public function carregarViews($view, $dados = array()){
            extract($dados);
            require_once '../app/views/'.$view.'.php';
        }
    }
?>