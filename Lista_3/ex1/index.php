<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex01</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">	
</head>
<body>
	<form action="resposta.php" method="post">
		<div class="row m-5">
			<div class="col">
				<h1 class="text-left"> Digite 7 números:</h1>
			</div>
		</div>
		<div class="row m-4 ">
			<div class="col">
				<label class="form-label" for="n1">Número 1:</label>
				<input type="text" class="form-control" name="n1" id="n1">
			</div>
			<div class="col">
				<label class="form-label" for="n2">Número 2:</label>
				<input type="text" class="form-control" name="n2" id="n2">
			</div>
			<div class="col">
				<label class="form-label" for="n3">Número 3:</label>
				<input type="text" id="n3" name="n3" class="form-control">
			</div>
			<div class="col">
				<label class="form-label" for="n4">Número 4:</label>
				<input class="form-control" name="n4" id="n4" type="text">
			</div>
			<div class="col">
				<label class="form-label" for="n5">Número 5:</label>
				<input type="text" class="form-control" name="n5" id="n5">
			</div>
			<div class="col">
				<label for="n6" class="form-label">Número 6:</label>
				<input type="text" name="n6" id="n6" class="form-control">
			</div>
			<div class="col">
				<label for="n7" class="form-label">Número 7:</label>
				<input class="form-control" name="n7" id="n7" type="text">
			</div>
		</div>
		<div class="row m-4 " >
			<div class="col">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

