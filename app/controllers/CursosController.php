<?php
class CursosController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Cursos";

        $this->carregarViews('cursos', $dados);
    }
}
?>