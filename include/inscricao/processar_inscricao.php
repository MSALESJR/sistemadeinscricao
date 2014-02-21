<?php

require_once '../../sys/conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$profissao = $_POST['profissao'];
$formacao = $_POST['formacao'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$fixo = $_POST['fixo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($nome)) {
    echo 'Campo Nome Vazio';
}

if (empty($cpf)) {
    echo 'Campo CPF Vazio';
}

if (empty($rg)) {
    echo 'Campo RG Vazio';
}

if (empty($profissao)) {
    echo 'Campo Profissão Vazio';
}

if (empty($formacao)) {
    echo 'Campo Formação Vazio';
}

if (empty($rua)) {
    echo 'Campo Rua Vazio';
}

if (empty($bairro)) {
    echo 'Campo bairro Vazio';
}

if (empty($cidade)) {
    echo 'Campo Cidade Vazio';
}

if ($uf == 'false') {
    echo 'Selecione um Estado';
}

if (empty($cep)) {
    echo 'Campo CEP Vazio';
}

if (empty($fixo)) {
    echo 'Campo Fixo Vazio';
}

if (empty($celular)) {
    echo 'Campo Celular Vazio';
}

if (empty($email)) {
    echo 'Campo Email Vazio';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email Inválido';
}

if (empty($senha)) {
    echo 'Campo Senha Vazio';
}

if (strlen($senha) < 6) {
    echo 'Campo Senha com menos de 6 digitos';
}

$senha = md5($senha);

$con = conexao::getConexao();
$query = "INSERT INTO usuario(id, nome, cpf, rg, profissao, formacao, rua, bairro, cidade, uf, cep, fixo, celular, email, senha) ";
$query.= " VALUES(null, :nome, :cpf, :rg, :profissao, :formacao, :rua, :bairro, :cidade, :uf, :cep, :fixo, :celular, :email, :senha)";
$queryresult = $con->prepare($query);
$queryresult->bindParam(':nome', $nome, PDO::PARAM_STR);
$queryresult->bindParam(':cpf', $cpf, PDO::PARAM_STR);
$queryresult->bindParam(':rg', $rg, PDO::PARAM_STR);
$queryresult->bindParam(':profissao', $profissao, PDO::PARAM_STR);
$queryresult->bindParam(':formacao', $formacao, PDO::PARAM_STR);
$queryresult->bindParam(':rua', $rua, PDO::PARAM_STR);
$queryresult->bindParam(':bairro', $bairro, PDO::PARAM_STR);
$queryresult->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$queryresult->bindParam(':uf', $uf, PDO::PARAM_STR);
$queryresult->bindParam(':cep', $cep, PDO::PARAM_STR);
$queryresult->bindParam(':fixo', $fixo, PDO::PARAM_STR);
$queryresult->bindParam(':celular', $celular, PDO::PARAM_STR);
$queryresult->bindParam(':email', $email, PDO::PARAM_STR);
$queryresult->bindParam(':senha', $senha, PDO::PARAM_STR);
if ($queryresult->execute()) {
    echo 'Cadastro Realizado Com Sucesso';
} else {
    echo 'Erro ao Realizar Cadastro';
}
?>
