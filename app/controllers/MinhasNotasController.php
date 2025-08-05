<?php
class MinhasNotasController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Minhas Notas";

        $this->carregarViews('minhas_notas', $dados);
    }
}
?>