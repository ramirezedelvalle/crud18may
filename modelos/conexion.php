<? 
abstract class Conexion{
    public static $conexion = null;

    private static fuction conectar(){
        try{
            self::$conexion = new PDO("informix:host=host.docker.internal; service=9088;database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix")
        }catch(PDOException $e){
            echo "Error al conectar: ";
            exit;
        }
        return self::$conexion
    }
}
