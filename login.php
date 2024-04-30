<?php
include("conexao.php");
$email= $_POST['email'];
$senha= $_POST['senha'];
$usuario= $_POST['usuario'];


$sql= "INSERT INTO loginl(email,senha,usuario)
value ('$email','$senha','$usuario',)";
if(mysqli_query($conexao,$sql)){
    echo "usuario cadastrado com sucesso";
}
else{
    echo "erro no cadastro". mysqli_connect_error();
}

?>