<?php
    class core{
        public function iniciar(){
            //$_SERVER["PHP_SELF"] = Cria um espelho da URL que está
            $url = explode("index.php", $_SERVER["PHP_SELF"]); //Cria uma Array() tirando a posição que está entre aspas
            $url = end($url);//Ele coloca o valor da variavel igual a ultima posição do Array()

            if($url!=""){
                $url = explode('/', $url); //Cria uma array dividindo onde tiver '/', ou seja, a url toda, mas a primeira posição fica vazio, por que no primeiro '/' não vai ter nada a frente
                array_shift($url);//Exclui a primeira posição do Array
            }
            echo "<pre>";
            print_r($url);
        }
    }