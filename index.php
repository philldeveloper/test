<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="pirata.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nome Personagem</label>
            <input type="text" class="form-control" name="nome" required placeholder="Nome Personagem">
        </div>
        <div class="mb-3">
            <label class="form-label">Selecione um Poder:</label>
            <select class="form-select" name="poder" id="poder" required>
                <option selected value="1">Gomu Gomu no MI</option>
                <option value="2">Yami Yami no Mi</option>
                <option value="3">Ope Ope no Mi</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Selecione o Bando:</label>
            <select class="form-select" name="nomeBando" id="nomeBando" required>
                <option selected value="1">Bando do Luffy</option>
                <option value="2">Bando do Shanks</option>
                <option value="3">Bando do Barba Negra</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Criar Pirata</button>
    </form>
</body>
</html>