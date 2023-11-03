<h1>Novo Cadastro</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" class="form-control" maxlength="11">
    </div>

    <div class="mb-3">
        <label>Nome Completo:</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="rg">RG:</label>
        <input type="text" name="rg" class="form-control">
    </div>

    <div class="mb-3">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

    <div class="mb-3">
        <label>SEXO:</label>
        <select name="sexo" class="form-control">
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Endereço:</label>
        <input type="text" name="endereco" class="form-control">
    </div>

    <div class="mb-3">
        <label>Bairro:</label>
        <input type="text" name="bairro" class="form-control">
    </div>
    <div class="mb-3">
        <label>Número:</label>
        <input type="number" name="numero" class="form-control">
    </div>
    <div class="mb-3">
        <label>CEP:</label>
        <input type="text" name="cep" class="form-control">
    </div>
    <div class="mb-3">
        <label>Cidade:</label>
        <input type="text" name="cidade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado:</label>
        <input type="text" name="estado" class="form-control">
    </div>

    <div class="mb-3">
        <label>Celular:</label>
        <input type="text" name="celular" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Curso Desejado:</label>
        <select name="curso" class="form-control">
            <option value="0">CLIQUE PARA ESCOLHER</option>
            <option value="10">Direito</option>
            <option value="21">Administração</option>
            <option value="47">Sistemas de Informação</option>
            <option value="52">Engenharia da Computação</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>

    </div>

</form>

<!--CREATE TABLE candidatos (
	CPF INT PRIMARY KEY,
    Nome VARCHAR(255),
    Sexo VARCHAR(10),
    Data_de_Nascimento DATE,
    RG VARCHAR(20),
    Endereco VARCHAR(255),
    Numero INT,
    Bairro VARCHAR(255),
    CEP VARCHAR(10),
    CIDADE VARCHAR(255),
    ESTADO VARCHAR(50),
    Celular VARCHAR(20),
    Email VARCHAR(255),
    Curso_Desejado VARCHAR(255)
); 