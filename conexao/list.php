<?php
    require_once "conn.php";
    $response_list = mysqli_query($conn, "SELECT * FROM Personagens");

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
    <div class="container">
        <div class="d-flex mt-5 justify-content-between align-items-center">
            <h3>Piratas</h3>
            <a id="link" onClick="goToLink()" class="btn btn-primary">Novo Pirata</a>
        </div>
        <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Poder</th>
            <th>Bando</th>
        </thead>
        <tbody>
            <?php
                while($lista = mysqli_fetch_array($response_list))
                {
                    echo "<tr>";
                    echo "<td>".$lista['id']."</td>";
                    echo "<td>".$lista['nome']."</td>";
                    echo "<td>".$lista['poder']."</td>";
                    echo "<td>".$lista['nomeBando']."</td>";
                    echo "<br>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
    </div>
    <script type="text/javascript">
        function goToLink() {
            $res = document.querySelector('#link');
            $res.setAttribute("href", "../index.php");
        }
    </script>
</body>
</html>

