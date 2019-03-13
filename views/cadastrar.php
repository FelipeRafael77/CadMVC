<div class="container">
    <h1>Cadastro</h1>

    <?php if(!empty($msg)) {
        echo $msg;
    }
    ?>

    <form method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="cpf" name="cpf" id="cpf" class="form-control" />
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control" />
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-success" />
    </form>
</div>