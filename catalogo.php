<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de Skate</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>
   
    <h1><br>🎦 Skate 📺 </h1>
    <br><br>
    <div class = "lista">
        <?php
        $banners = ["banner01.jpg","banner02.jpg","banner03.jpg","banner04.jpg","banner05.jpg"];
        $sorteio = rand(0,4);
        echo "<img scr='$banners[0' class='imagem-banner'>"
      
        $series = ["tony hawk" , "kelvin" , "chorão" , "leticia" , "luan"];
        $capas = ["tony hawk-vans" , "Kelvin-Hoefler-3-1024x1024.jpg" , "chorão_sk8.jpg" , "leticia bufoni.jpg" , "maxresdefault.jpg"];
       
        $numero_series = count($series);
        $contador = 0;
        while($contador < $numero_series){
            echo "<div class='card'>"
            echo "<img  src='$capas[$contador]'>";
            echo "<br> $series[$contador] <br><br>";
            echo "</div>"
            $contador++;
        }
        ?>
    </div>
</body>
</html>
 
 
<?php
 
 
?>