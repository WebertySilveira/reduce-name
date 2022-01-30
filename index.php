<?php

require_once __DIR__ . "/vendor/autoload.php";

$user = new \Src\Core\User('Weberty Silveira de Sousa');
echo($user->reduceName());