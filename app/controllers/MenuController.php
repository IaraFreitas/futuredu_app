<?php
class MenuController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Menu";

        $this->carregarViews('menu', $dados);
        
    }

}
?>