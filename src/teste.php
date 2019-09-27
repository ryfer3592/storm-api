<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    header("Access-Control-Allow-Origin: *");
    echo "Olá, eu sou uma API";
    
    include("conexao.php"); // Seria como uma importação de uma outra classe
    
    $minhaconexao = new conexao();
    $minhaconexao->conectar();
?>
</body>
</html>
