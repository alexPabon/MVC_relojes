<?php
    //Parámetros de configuración 
    
    //PARA EL AUTOLOAD
    //lista de directorios donde buscar clases
    $directorios=['controller','model','libraries','templates'];

    //PARAMETROS DE CONFIGURACION BDD
    define('SGDB','mysql'); //conector que debe usar PDO
    
    define('DB_HOST','localhost');  //host
    define('DB_USER','root');       //usuario
    define('DB_PASS','');           //password
    define('DB_NAME','relojes'); //base de datos
    define('DB_CHARSET','utf8');    //codificación
    
    //CONTROLADOR Y METODO POR DEFECTO
    define('DEFAULT_CONTROLLER','Welcome');
    define('DEFAULT_METHOD','index');
    
    //OTROS PARAMETROS
    define('DEBUG',0); //para depuración
    
    
    
    
    
    