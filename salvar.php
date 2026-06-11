<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123456789';
$dbName = 'academia';

$conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if ($conexao->connect_errno){
die("ERRO NA CONEXÃ:" . $conexao->connect_error);

}
$idaluno =$_POST['idaluno'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$endereco=$_POST['endereco'];
$sql= "INSERT INTO alunos (idaluno,nome,telefone,email,endereco) VALUES ('$idaluno','$nome','$telefone','$email','$endereco')";
if($conexao->query($sql)===TRUE){
    echo "Aluno Cadastrado com sucesso!!!";
}
else{
    echo "Erro ao Cadastrar: ". $conexao->error;
}
$conexao->close();
?>


