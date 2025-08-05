<?php
class PerfilController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Perfil";

        $this->carregarViews('perfil', $dados);
    }
}
?>