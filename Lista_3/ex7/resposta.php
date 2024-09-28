<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <?php 
                 if($_SERVER["REQUEST_METHOD"] == "POST") 
                 {
                    try {
                      
                            (int)$numero = (int)$_POST["n1"];
                            $soma = 0; 
                            $i = 1;
                            while ($i <= $numero) 
                            { 
                              if($soma == 0)
                              {
                                $soma += $i;
                              }  
                              else 
                              {
                                echo "<p>$soma + $i = ".($soma += $i)."</p>"; 
                              }  
                              
                              $i++; 
                            }
                        
                            echo "<p>A soma de todos os números até $numero é: $soma</p>"; 

                        }
                
                    catch (Exception $e)
                        {echo "Erro: " .$e -> getMessage();}
                    }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 