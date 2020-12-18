<?php
    namespace app\controllers;
    
    use app\core\Controller;

    class ClienteController extends Controller{
        public function index(){
            echo "Método Index (Cliente)";
        }

        public function lista($valor = 10){
            echo "<p>Estou listando os Clientes $valor</p>";
        }

        public function ver(){
            //Chamando a view "v_cliente.php"
            $dados['nome'] = "Lucas Ribeiro";
            $dados['email'] = "caetanolucasribeiro@gmail.com";
            $this->load("v_cliente", $dados);
        }

    }