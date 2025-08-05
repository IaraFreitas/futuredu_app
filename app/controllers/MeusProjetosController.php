<?php
class MeusProjetosController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Meus Projetos";

        $this->carregarViews('meus_projetos', $dados);
    }
}
?>