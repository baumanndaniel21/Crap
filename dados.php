<?php
echo "Os dados foram lançados</br>";

echo " <audio autoplay><source src=dado.mp3 type=audio/mpeg></audio>";
$dado1= rand(1, 6);
echo " <audio autoplay><source src=dado.mp3 type=audio/mpeg></audio>";
$dado2= rand(1, 6);
echo "Dado1: $dado1</br>";
echo "Dado2: $dado2</br>";
$soma = $dado1+$dado2;
echo "Soma dos dados $soma</br>";
echo "<img class=rotatingDicy src=img/$dado1.png>";
echo "<img class=rotatingDicy src=img/$dado2.png>";

