<?php
class NotificacaoController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Notificação";

        $this->carregarViews('notificacao', $dados);
    }
}
?>