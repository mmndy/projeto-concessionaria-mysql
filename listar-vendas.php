<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <select name="cliente _id_cliente" class="form-control">
            <option value="">Selecione o cliente</option>
            <?php

            $sql = "SELECT" * FROM cliente";
            $res = $conn-> query($sql);
            if($res->num_rows > 0){
                while($row = $res->fetch_object()){
                    print "<option value='{$row->id_cliente}'>{$row->nome_cliente}</option>;
                }
            }
            else{
                print "<option value=''>Nenhum cliente encontrado</option>";
            }
            ?>
        </select>
        </label>
        </div>
        <div class="mb-3">
            <label>funcionário
                <select name= "funcionario_id_funcionario" class="form-control">
                    <option value ="">

