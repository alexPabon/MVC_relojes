<?php
class RelojController{
    public $marca; 
    
    public function index(){
        $this->list();
    } 
    
    public function list(){
        $relojes = array_reverse(Reloj::getAll());
        
        require_once 'view/relojes/list.php';
    }

    public function show($id){
    	//comprobar que el reloj existe
    	if(empty($id))
    		throw new Exception("No se indico id del reloj");
    	
    	//recuperar el reloj	
    	$detalles = Reloj::get($id);

    	//comprobar que el tel existe
    	if(!$detalles)
    		throw new Exception("El reloj con Id: $id No existe!");
    		
    	require_once 'view/relojes/show.php';
    }
    
    public function create(){
    	require_once 'view/relojes/create.php';
    }

    public function store(){
    	//asegurarse que llegan los datos por post
    	if(empty($_POST['guardar']))
    		throw new Exception("No llegaron los datos del reloj");
    		
    	//recupera los datos que llegan por post
    	$marca = $_POST['marca'];
    	$referencia = $_POST['referencia'];
    	$precio = $_POST['precio'];

    	//crear nuevo reloj
    	$reloj = new Reloj();

    	//poner los datos al reloj que nos llegan por post    	
    	$reloj->marca = $marca;
    	$reloj->referencia= $referencia;
    	$reloj->precio = $precio;

    	//guardar reloj
    	if(!$reloj->save())
    		throw new Exception("No se pudo guardar el reloj $reloj->marca");
    		
    	//cargar vista de exito
    	$mensaje = 'se guardo correctamente!';
    	require_once 'view/exito.php';
    	
    }

    public function edit($id){
        //comprobar que el reloj existe
        if(empty($id))
            throw new Exception("No se indico id del reloj");

        $reloj = Reloj::get($id);

            //comprobar que el tel existe
        if(!$reloj)
            throw new Exception("El reloj con Id: $id No existe!");
            
        require_once 'view/relojes/edit.php';
    }

    public function update(){
        //comprobar que el reloj existe
        if(empty($_POST['guardar']))
            throw new Exception("No llegaron los datos del reloj");

        //crear reloj
        $reloj= new Reloj();

        //recuperar los datos que llegan por post
        $reloj->id = intval($_POST['id']);
        $reloj->marca = $_POST['marca'];
        $reloj->referencia = $_POST['referencia'];
        $reloj->precio = floatval($_POST['precio']);

        //hacer la actualizacion y cargar la vista de exito
        $mensaje = $reloj->update()?
                    "Se ha actualizado <b>$reloj->marca $reloj->referencia</b>":
                    "No se aplicaron los cambios";

        require_once 'view/relojes/edit.php';
    }

    public function delete($id){
    	//comprobar que el reloj existe
    	if(empty($id))
    		throw new Exception("No se indico id del reloj");
    	
    	//recuperar el reloj	
    	$borrar = Reloj::get($id);

    	//comprobar que el tel existe
    	if(!$borrar)
    		throw new Exception("El reloj con Id: $id No existe!");
    	
    	require_once 'view/relojes/delete.php';
    }

    public function destroy(){
    	//asegurarse que llegan los datos por post
    	if(empty($_POST['confirmar']))
    		throw new Exception("No llegaron los datos del reloj");
    	
    	$id = intval($_POST['id']);

    	$confirmar = Reloj::delete2($id);

    	if(!$confirmar)
    		throw new Exception("El reloj con Id: $id No existe!");

    	$mensaje = 'Borrado correctamente!';
    	require_once 'view/exito.php';
    }

        //Esto esta hecho solo para cargar la base de datos a modo de ejemplo,
        //pero es una mala practica
    public function CargarDatos(){
        $archivo = fopen('marcas.txt', 'r');
        $marca = [];
        $ref = ['A','B','C','W','P','Z','Y'];


        while (!feof($archivo)) {

            $line = fgets($archivo);
            $datos = explode(' ', $line);
            array_push($marca, $datos);
        }


        for($i=0;$i<count($marca[0]); $i++) {
            $num = rand(0,6);
            $num1 = rand(0,6);
            $num2 = rand(0,9999);
            $marcas= $marca[0][$i];
            $refer= $ref[$num].$ref[$num1].$num2;
            $precio= rand(100,500).".".rand(0,9).rand(0,9);

            $reloj = new Reloj();

        //poner los datos al reloj que nos llegan por post      
        $reloj->marca = htmlspecialchars($marcas);
        $reloj->referencia= htmlentities($refer);
        $reloj->precio = floatval($precio);

        //guardar reloj
        if(!$reloj->save())
            throw new Exception("No se pudo guardar el reloj $reloj->marca");
        }       
    }
}