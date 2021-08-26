
<?php

class Conexao{

    private static $instance;

     static function getInstance(){
        try {
            if(!isset(self::$instance)){
                self::$instance = new PDO('mysql:host=localhost;dbname=db_curso', 'root', 'pswd');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
            echo "conectou!";
        } catch (PDOException $e) {
            echo "conectou!";
            echo $e->getMessage();
        }
        var_dump(self::$instance);
    }

}
?>