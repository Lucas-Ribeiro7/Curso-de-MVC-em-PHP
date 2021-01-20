<?php
    namespace app\controllers;
    use app\core\Controller;
    use app\models\Cliente;

class ClienteController extends Controller{
        public function index(){
            $cliente = new Cliente();
            $dados["clientes"] = $cliente->lista();
            $dados["view"] = "cliente/Index";
            $this->load("template", $dados);
        }
        public function novo(){
            $dados["view"] = "cliente/Create";
            $this->load("template", $dados);
        }
        public function salvar(){
            $cliente = new Cliente();
            $nome = $_POST['txt_nome'];
            $email = $_POST['txt_email'];
            $telefone = $_POST['txt_fone'];
            $cliente->inserir($nome, $email, $telefone);
            
            header("location:" . URL_BASE . "cliente");
            
        }
    }