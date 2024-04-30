<?php
include("conexao.php");
$email= $_POST['email'];
$senha= $_POST['senha'];
$usuario= $_POST['usuario'];
$contato= $_POST['contato'];

$sql= "INSERT INTO matricula(email,senha,usuario,contato)
value ('$email','$senha','$usuario','$contato')";
if(mysqli_query($conexao,$sql)){
    echo "usuario cadastrado com sucesso";
}
else{
    echo "erro no cadastro". mysqli_connect_error();
}

?>