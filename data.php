<?php
  echo 'Jogo sorteado: '
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
      $us = [
'GTA', 'Call of dutty', 'FIFA', 'Battlefield', 'PUBG', 'Minecraft', 'Free fire', 'Guitar hero',
'Fortnite', 'League of legends', 'Dota 2', 'War of warcraft', 'The sims', 'Need for speed', 
'Roblox', 'Super Mario', 'Bomberman', 'Mortal combat', 'Tekken', 'Driver', 'PES'
      ];

      
      //Variável $su chamando um elemento da Array $su pelo método (rand)
      echo $us[rand(0,17)];

      
  ?>
</body>
</html>
