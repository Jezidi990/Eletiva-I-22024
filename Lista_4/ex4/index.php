<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <main class="container">
    <form action="Resposta.php" method="post">
        <div class="row m-4">
            <label for="dia" class="form-label">Dia:</label>
            <input type="text" id="dia" name="dia" class="form-control">
        </div>
        <div class="row m-4">
            <label for="mes" class="form-label">Mes:</label>
            <input type="text" id="mes" name="mes" class="form-control">
        </div>
        <div class="row m-4">
            <label for="ano" class="form-label">Ano:</label>
            <input type="text" id="ano" name="ano" class="form-control">
        </div>
        <div class="row m-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        
    </form>
   </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>