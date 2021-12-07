<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $id_modelo = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="BS.css">
    <script src="api.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    
</head>
<body>
   <h1>Seja bem vindo(a) <?php echo $usuario ?> </h1>
        <form action="vagas.php" method="post" class="row g-3">
            <div class="col-md-4">
                <label for="marca" class="form-label">Marca</label>
                <select id="marca" name="marca" class="form-select" onchange="carregarModelo(this.value)">
                    <option value="null" selected>Selecione a marca</option>
                </select>

                <input class="CB" type="button" value="Carregar Marcas" onclick="carregarMarca()">

            </div>

            <div class="col-md-4">
                <label for="modelo" class="form-label">Modelo</label>
                <select id="modelo" name="modelo" class="form-select">
                    <option value="null" selected>Selecione o modelo</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="ano" class="form-label">Placa</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Placa do veículo">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar Veículo</button>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Lista de Veículos para Retirar</button>
            </div>
        </form>

</body>
</html>