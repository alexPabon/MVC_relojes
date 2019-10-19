<?php
class Reloj{
    //PROPIEDADES
    public $id=0, $marca='', $referencia='', $precio=0;
    
    //METODOS
    
    //RECUPERAR TODOS LOS TELEFONOS
    public static function getAll():array{
        $consulta= "SELECT * FROM coleccion";
        return DB::selectAll($consulta, self::class);
    }
    
    //recuperar un tel por ID
    public static function get($id=0):?Reloj{
        $consulta= "SELECT * FROM coleccion WHERE id= $id";
        return DB::select($consulta, self::class);
    }    
    
    public function save():int{
        $consulta= "INSERT INTO coleccion(marca,referencia,precio)
                        VALUES('$this->marca','$this->referencia',$this->precio)";
        return DB::insert($consulta,self::class);
    }
    
    public function delete(){
        $consulta = "DELETE FROM coleccion WHERE id= $this->id";
        return DB::delete($consulta);
    }
    
    public static function delete2($id){
        $consulta = "DELETE FROM coleccion WHERE id= $id";
        return DB::delete($consulta);
    }

    //ACTUALIZAR UN TELEFONO
    public function update(){
        return DB::update("UPDATE coleccion SET 
                            marca='$this->marca',
                            referencia='$this->referencia',
                            precio=$this->precio
                           WHERE id=$this->id");
    }
}