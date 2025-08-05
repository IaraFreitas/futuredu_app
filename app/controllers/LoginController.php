<?php
class LoginController extends Controller{
    /*todas as páginas precisam passar por uma index*/
    public function index(){
        $dados = array();
        $dados['titulo'] = "Login";

        $this->carregarViews('login', $dados);
        
    }

}
?>