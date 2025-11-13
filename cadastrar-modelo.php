<h1>Cadastrar Modelo</h1>

<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div>
        <label>Modelo:
            <input type="text" name="nome_modelo" required>
        </label>
    </div>

    <div>
        <label>Cor:
            <input type="text" name="cor_modelo">
        </label>
    </div>

    <div>
        <label>Ano:
            <input type="number" name="ano_modelo">
        </label>
    </div>

    <div>
        <label>Tipo:
            <input type="text" name="tipo_modelo">
        </label>
    </div>

    <div>
        <label>Marca:</label>
        <select name="marca_id_marca" class="form-control" required>
            <option value="">- Escolha -</option>
    <?php
        $sql = "SELECT * FROM marca";
        $res = $conn->query($sql);

        if($res->num_rows > 0){
            while($row = $res->fetch_object()){
                // Verifica se essa marca é a que está associada ao modelo
                $selected = ($row->id_marca == $dados->marca_id_marca) ? "selected" : "";
                print "<option value='{$row->id_marca}' {$selected}>{$row->nome_marca}</option>";
            }
        } else {
            print "<option>Não há marcas cadastradas</option>";
        }
    ?>
</select>

    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
