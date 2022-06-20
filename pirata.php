<?php
    require_once "conexao/conn.php";
    include_once "Personagem.php";
  
    $nome = $_POST['nome'];
    $poder = $_POST['poder'];
    $nomeBando = $_POST['nomeBando'];

    require_once "conexao/create.php";

    $pirata = new Personagem($nome, $poder);
    $pirata->setNomeBando($nomeBando);
    $pirata->setNivelBando($nomeBando);

    try{
        mysqli_query($conn, $query);
    }catch(\Throwable $e) {
        throw $e;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        if($nome !== null && $poder !== null && $nomeBando !== null) {
            echo "
                <h1>{$pirata->getNome()}</h1>
                <h1>{$pirata->getPoder()}</h1>
                <h1>{$pirata->getNomeBando()}</h1>
                <h1>{$pirata->getNivelBando()}</h1>
            ";
        }
    ?>

    <a href="index.php" class="btn btn-primary">Cadastrar Outro Pirata</a>
</body>
</html>