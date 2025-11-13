<h1>Cadastrar Funcionário</h1>

<form action="?page=salvar-funcionario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div>
        <label>Nome
            <input type="text" name="nome_funcionario">
        </label>
    </div>
    <div>
        <label>E-mail
            <input type="text" name="email_funcionario">
        </label>
    </div>
    <div>
        <label>Telefone
            <input type="text" name="telefone_funcionario">
        </label>
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
