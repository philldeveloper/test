<?php
require_once "conexao/conn.php";

//list all
function getAll($conn){

    try{
        $pirates = mysqli_query($conn, "SELECT * FROM personagens");
    }catch(\Throwable $e) {
        throw $e;
    }

    while($row = mysqli_fetch_array($pirates)) {
    
        echo $row['nome']."<br>";
    }
}

function getById($conn, $id){
    $pirate = mysqli_query($conn, "SELECT * FROM personagens WHERE id = $id");
    echo "------------------<br>";
    echo "exibindo o pirata de id $id"."<br>";

    while($row = mysqli_fetch_array($pirate)) {
        echo $row['nome']."<br>";
    }
}

function updateById($conn, $id){
    
    if($id && $conn){
        $p = mysqli_query($conn, "UPDATE personagens SET nome = 'changed' WHERE id = '$id'");
    }
    echo "------------------<br>";
    echo "exibindo o pirata id $id ATUALIZADO:"."<br>";
    
    while($row = mysqli_fetch_assoc($p)){
        echo $row['nome']."<br>";
    }

    return true;
}


getAll($conn);
getById($conn, 52);
updateById($conn, 54);


?>