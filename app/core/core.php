<?php
    class core{
        private $controller;
        private $metodo;
        private $parametros = array();
        public function iniciar(){
            //$_SERVER["PHP_SELF"] = Cria um espelho da URL que está
            $url = explode("index.php", $_SERVER["PHP_SELF"]); //Cria uma Array() tirando a posição que está entre aspas
            $url = end($url);//Ele coloca o valor da variavel igual a ultima posição do Array()

            if($url!=""){
                $url = explode('/', $url); //Cria uma array dividindo onde tiver '/', ou seja, a url toda, mas a primeira posição fica vazio, por que no primeiro '/' não vai ter nada a frente
                array_shift($url);//Exclui a primeira posição do Array

                //Pega o controle
                $this->setController(ucfirst($url[0]) . "Controller.php"); //ucfirst() deixa a primeira letra do nome em maiusculo 
                array_shift($url);
                
                //Pega o Metodo
                if(isset($url[0])){
                    $this->setMetodo($url[0]);
                    array_shift($url);
                }
                
                //Pega os parametros
                if(isset($url[0])){
                    $this->setParametros(array_filter($url));
                }
            }else{
                $this->setController("IndexController.php"); 
            }
            /*
            echo "<pre>";
            print_r($url);
            */
        }
        public function getController(){
            return $this->controller;
        }
        public function getMetodo(){
            return $this->metodo;
        }
        public function getParametros(){
            return $this->parametros;
        }
        public function setController($controller){
            $this->controller = $controller;
        }
        public function setMetodo($metodo){
            $this->metodo = $metodo;
        }
        public function setParametros($parametros){
            $this->parametros = $parametros;
        }
    }