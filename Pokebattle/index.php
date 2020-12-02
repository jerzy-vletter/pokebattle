<?php

require 'pokemon.php';

$pikachu = new pokemon('Pika', 'Electric', '60', 'Electric Ring', 'pikapunch', 'fire', 'water');
print_r('<pre>'.$pikachu.'</pre>');

$charmeleon = new pokemon('charcoal', 'Fire', '60', 'Head Butt', 'Flare', 'water', 'Lightning');
print_r('<pre>'.$charmeleon.'</pre>');