            <div class="base-home">
                <h1 class="titulo">Novo Cadastro</h1>
                <div class="base-formulario">
                    <form action="<?php echo URL_BASE . 'cliente/salvar' ?>" method="POST">
                        <label>Nome</label>
                        <input type="text" name="txt_nome" placeholder="Insira um Nome">
                        <label>Email</label>
                        <input type="text" name="txt_email" placeholder="Insira um Email">
                        <label>Telefone</label>
                        <input type="text" name="txt_fone" placeholder="Insira um Telefone">
                       
                        <input type="submit" value="Cadastrar" class="btn cad">
                        <input type="reset" value="Limpar" class="btn limpar">
                    </form>
                </div>
            </div>