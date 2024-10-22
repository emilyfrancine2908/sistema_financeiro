<?php 

include 'conexao.php';

//receber os dados do formulário
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];



$sql = "INSERT INTO tb_user VALUES (null,'$nome','$tipo','$descricao')";

if ($conexao->query($sql)) {
    echo "<script>alert('Inserido com Sucesso!'; history.back())<script>";
}else {
    echo " Falha na conexão com banco de dados";
}
?>