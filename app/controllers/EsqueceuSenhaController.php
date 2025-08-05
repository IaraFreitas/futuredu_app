<?php
class EsqueceuSenhaController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Esqueceu Senha";

        $this->carregarViews('esqueceu_senha', $dados);
        
    }

}
?>