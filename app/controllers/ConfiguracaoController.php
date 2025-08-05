<?php
class ConfiguracaoController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Configuração";

        $this->carregarViews('configuracao', $dados);
    }
}
?>