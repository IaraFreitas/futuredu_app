<?php
class NotaCursoController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Nota Curso";

        $this->carregarViews('nota_curso', $dados);
    }
}
?>