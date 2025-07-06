<style>
    body{
        background-image: url(imgs/Lantern\ festival\,\ VESLE.jfif);
        color: white;
        font-size: 50px;
        margin: 200px;
    }
    p{
        color: white;
        font-size: 20px;
    }
</style>
<?php 
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);

    echo "Seja Bem-Vindo(a), $nome!";

}

?>
<p>Seu cadastro foi feito com sucesso :)</p>