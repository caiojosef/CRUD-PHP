<?php


switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $rg = $_POST["rg"];
        $data_nasc = $_POST["data_nasc"];
        $sexo = $_POST["sexo"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cep = $_POST["cep"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $curso = $_POST["curso"];
        $sql = "INSERT INTO candidatos (cpf, nome, rg, data_nasc, sexo, endereco, bairro, numero, cep, cidade, estado, celular, email, curso) VALUES ('{$cpf}', '{$nome}', '{$rg}', '{$data_nasc}', '{$sexo}', '{$endereco}', '{$bairro}', '{$numero}', '{$cep}', '{$cidade}', '{$estado}', '{$celular}', '{$email}', '{$curso}')";

        $res = $comn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastro feito com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
    case 'editar':
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $rg = $_POST["rg"];
        $data_nasc = $_POST["data_nasc"];
        $sexo = $_POST["sexo"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cep = $_POST["cep"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        $curso = $_POST["curso"];
        
        $sql = "UPDATE candidatos SET cpf='{$cpf}', nome='{$nome}', rg='{$rg}', data_nasc='{$data_nasc}', sexo='{$sexo}', endereco='{$endereco}', numero='{$numero}', bairro='{$bairro}', cep='{$cep}', cidade='{$cidade}', estado='{$estado}', celular='{$celular}', email='{$email}', curso='{$curso}' WHERE id=" . $_REQUEST["id"];

        $res = $comn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM candidatos WHERE cpf=".$_REQUEST["cpf"];
        $res = $comn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    default:
        //code
        break;
}
