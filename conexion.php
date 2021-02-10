<?php 

try
  {
    //datos de la conexión
    $servidor = 'localhost';
    $dbname = 'incidencias';
    $user = 'root';
    $password = '';
    
    //conexión a mysql
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $dbh = new PDO($dsn, $user, $password);
    
    //Gestion de errores
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // prepare the query
    if(isset($_POST["usuario"]) && isset($_POST["departamento"]) && isset($_POST["descripcion"])){
    
    $stmt = $dbh->prepare("INSERT INTO incidenciasanotadas (usuario,departamento,incidencia) values (?, ?, ?)");

    $stmt->bindParam(1, $_POST["usuario"]);
    $stmt->bindParam(2, $_POST["departamento"]);
    $stmt->bindParam(3, $_POST["descripcion"]);

    $stmt->execute();

    }
  }
  catch(PDOException $e)
  {
    echo '<pre>';
    echo 'Linea: '.$e->getLine().'<br>';
    echo 'Archivo: '.$e->getFile().'<br>';
    echo 'Mensaje: '.$e->getMessage();
    echo '</pre>';
  } finally 
  {
  //cerrar la conexion 
  $dbh = null;
  }

?>