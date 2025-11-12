<?php
require 'player.php';
require 'interface.php';
require 'guitar.php';
require 'drums.php';
require 'piano.php';

$player = new InstrumentPlayer(new Guitar(), new Drums(), new Piano());
$player->play();