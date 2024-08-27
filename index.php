<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    $COLOR = "Branco"."<br>";
    echo "Meu carro é " . $COLOR . "<br>";
    $x = "200";
    $y = "3";
    echo var_dump($x / $y)."<br><br>"; 
    
    echo $x / $y; 

    $nome = "ta pegando fogo"."<br>";
    
    echo strlen($nome)."<br><br>";
    
    echo strpos($nome, "fogo"). "<br><br>";

    echo strtoupper($nome)."<br>";
    
    echo strtolower($nome)."<br>";

    echo str_replace("a", "4", $nome)."<br>";

    echo trim($nome)."<br>";
    
  

    
    ?>

</html>
