<?php
    class Rotas{
        public function executar(){
            //A URL É COMO SE FOSSE A PASTA RAIZ
            $url = '/';
            if (isset($_GET['url'])){
                $url .= $_GET['url'];
            }

            $parametro = array();
            if(!empty($url) && $url != '/'){
                $url = explode('/', $url); //explode-> se a url for diferente de zero, ele vai trazer a url encontrada
                array_shift($url); //remove o excesso de barras
                $controladorAtual = ucfirst($url[0].'Controller'); //uc -> upper casse, carrega com a primeira letra maipuscula
                array_shift($url);

                if (isset($url[0]) && !empty($url[0])){
                    $acao = $url[0];
                    array_shift($url);
                }else{
                    $acao = 'index';
                }

                //CASO TENHA ALGO A MAIS NA URL CONSIDERAR COMO PARAMETRO
                if(count($url) > 0){
                    $parametro = $url;
                }
            }else{
                $controladorAtual = 'LoginController';
                $acao = 'index';
            }

            if (!file_exists('../app/controllers/' .$controladorAtual. '.php')
            || !method_exists($controladorAtual, $acao)){
                echo 'Arquivo'. $controladorAtual. 'ou método '. $acao. 'não encontrado.';
                $controladorAtual = 'ErroController';
                $acao = 'index';
            }

            $controller = new $controladorAtual;
            call_user_func_array(array($controller, $acao), $parametro);

        }
    }


?>