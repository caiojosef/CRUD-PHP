<h1>Editar Candidato</h1>
<?php
$sql = "SELECT * FROM candidatos WHERE id=" . $_REQUEST["id"];
$res = $comn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control" maxlength="11">
    </div>

    <div class="mb-3">
        <label>Nome Completo:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="rg">RG:</label>
        <input type="text" name="rg" value="<?php print $row->rg; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>SEXO:</label>
        <select name="sexo" class="form-control">
            <option value="F" <?php if ($row->sexo === 'F') echo 'selected'; ?>>Feminino</option>
            <option value="M" <?php if ($row->sexo === 'M') echo 'selected'; ?>>Masculino</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Bairro:</label>
        <input type="text" name="bairro" value="<?php print $row->bairro; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número:</label>
        <input type="number" name="numero" value="<?php print $row->numero; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CEP:</label>
        <input type="text" name="cep" value="<?php print $row->cep; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?php print $row->cidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado:</label>
        <input type="text" name="estado" value="<?php print $row->estado; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Celular:</label>
        <input type="text" name="celular" value="<?php print $row->celular; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Curso Desejado:</label>
        <select name="curso" class="form-control">
            <option value="0" <?php if ($row->curso === '0') echo 'selected'; ?>>CLIQUE PARA ESCOLHER</option>
            <option value="10" <?php if ($row->curso === '10') echo 'selected'; ?>>Direito</option>
            <option value="21" <?php if ($row->curso === '21') echo 'selected'; ?>>Administração</option>
            <option value="47" <?php if ($row->curso === '47') echo 'selected'; ?>>Sistemas de Informação</option>
            <option value="52" <?php if ($row->curso === '52') echo 'selected'; ?>>Engenharia da Computação</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>

</form>