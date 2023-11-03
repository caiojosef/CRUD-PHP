<h1>Candidatos:</h1>

<?php
$sql = "SELECT * FROM candidatos";

$res = $comn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>CPF</th>";
    print "<th>Nome</hd>";
    print "<th>RG</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Sexo</th>";
    print "<th>Endereço</th>";
    print "<th>Bairro</th>";
    print "<th>Numero</th>";
    print "<th>Cep</th>";
    print "<th>Cidade</th>";
    print "<th>Estado</th>";
    print "<th>Celular</th>";
    print "<th>E-Mail</th>";
    print "<th>Curso</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->cpf . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->rg . "</td>";
        print "<td>" . $row->data_nasc . "</td>";
        print "<td>" . $row->sexo . "</td>";
        print "<td>" . $row->endereco . "</td>";
        print "<td>" . $row->bairro . "</td>";
        print "<td>" . $row->numero . "</td>";
        print "<td>" . $row->cep . "</td>";
        print "<td>" . $row->cidade . "</td>";
        print "<td>" . $row->estado . "</td>";
        print "<td>" . $row->celular . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->curso . "</td>";
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&cpf=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>