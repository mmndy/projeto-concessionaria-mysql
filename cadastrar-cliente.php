<h1>Cadastrar Cliente</h1> <!-- Título da página -->

<!-- O formulário envia os dados para a página "salvar-cliente" -->
<form action="?page=salvar-cliente" method="POST">

    <!-- Campo escondido: serve para informar a ação que será feita (no caso, "cadastrar") -->
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Campo para digitar o nome do cliente -->
    <div>
        <label>Nome
            <input type="text" name="nome_cliente">
        </label>
    </div>

    <!-- Campo para digitar o e-mail do cliente -->
    <div>
        <label>E-mail
            <input type="text" name="email_cliente">
        </label>
    </div>

    <!-- Campo para digitar o telefone do cliente -->
    <div>
        <label>Telefone
            <input type="text" name="telefone_cliente">
        </label>
    </div>
    <div>
        <label>Endereço
            <input type="text" name="telefone_cliente">
        </label>
    </div>
    <div>
        <label>Data de Nascimento
            <input type="date" name="dt_nasc_cliente">
        </label>
    </div>
        <!-- Botão que envia o formulário -->
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
