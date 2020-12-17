<?php
    require 'app/core/core.php';
    require 'vendor/autoload.php';
    $core = new core();
    $core->iniciar();
    
    echo "<p>Controller: " . $core->getController() . "</p>";
    echo "<p>Metodo: " . $core->getMetodo() . "</p>";
    $parametros = $core->getParametros();
    foreach ($parametros as $param){
        echo "<p>Parametros: " . $param . "</p>";
    }
    