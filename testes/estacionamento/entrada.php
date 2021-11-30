<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="BS.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    
</head>
<body>
   <h1>Seja bem vindo(a) <?php echo $usuario ?> </h1>
   <form class="row g-3">
         <div class="col-md-4">
            <label for="marca" class="form-label">Marca</label>
            <select id="inputState" class="form-select">
               <option selected>Selecione a marca</option>
               <option>...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="modelo" class="form-label">Modelo</label>
            <select id="inputState" class="form-select">
               <option selected>Selecione o modelo</option>
               <option>...</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="ano" class="form-label">Placa</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Placa do veículo">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
   </form>
</body>
</html>