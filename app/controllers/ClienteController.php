<?php
    namespace app\controllers;
    
    use app\core\Controller;
    use app\models\M_Cliente;

    class ClienteController extends Controller{
        public function index(){
            echo "Método Index (Cliente)";
        }

        public function lista(){
            $clientes = new M_Cliente;
            $dados['clientes'] = $clientes->lista();
            $this->load("v_cliente", $dados);
        }

        public function ver(){
            //Chamando a view "v_cliente.php"
            $dados['nome'] = "Lucas Ribeiro";
            $dados['email'] = "caetanolucasribeiro@gmail.com";
            $this->load("v_cliente", $dados);
        }

    }