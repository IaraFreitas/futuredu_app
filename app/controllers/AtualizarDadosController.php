<?php
class AtualizarDadosController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Atualizar Dados";

        $this->carregarViews('atualizar_dados', $dados);
    }
}
?>