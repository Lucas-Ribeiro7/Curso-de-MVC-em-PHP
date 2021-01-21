<div class="base-home">
                <h1 class="titulo">Novo Cadastro</h1>
                <div class="base-formulario">
                    
                        <label>Nome</label>
                        <input type="text" name="txt_nome" value="<?php echo $cliente->nome ?>" placeholder="Insira um Nome">
                        <label>Email</label>
                        <input type="text" name="txt_email" value="<?php echo $cliente->email ?>" placeholder="Insira um Email">
                        <label>Telefone</label>
                        <input type="text" name="txt_fone" value="<?php echo $cliente->telefone ?>" placeholder="Insira um Telefone">
                       
                        
                        <a href="<?php echo URL_BASE . "cliente/delete/" . $cliente->id_cliente."/S" ?>" class="btn limpar">Excluir</a>
                        
                   
                </div>
            </div>