<?php
try{
    $server="localhost";
    $user="root";
    $pass="";
    $db="tienda";

    $cnx = new PDO("mysql:host=$server;dbname=$db",$user,$pass);
    $query = $cnx->query("SELECT * FROM producto");
    //var_dump($query);
    foreach($query as $registros){
        //var_dump($registros);
        echo 'producto_id',$registros['Pro_id'];
        echo '<br>producto descripción:',$registros['Pro_descripcion'];
        echo '<hr>';

    }
}catch(PDOException $err){
    var_dump($err->getMessage());
}
//var_dump($cnx);
echo '<head></head>';
echo '<body>';
echo '      <h1>Pagina bacan</h1>';
echo '<table border="1">';
for($i=0;$i<3;$i++){
    //filas <tr> ->i
echo            '<tr>';
    for($j=0;$j<3;$j++){

    
echo '<form action="formulario.php" method="POST">';
echo            '<td>
                    <table border="1">;
                        <tr>
                            <td colspan="2">Marca</td>
                        </tr>
                        <tr>
                            <td colspan="2">Descripción</td>
                        </tr>
                        <tr>
                            <td>Código</td>
                            <td>Stock</td>
                        </tr>
                        <tr>
                            <td colspan="2">imagen</td>
                        </tr>
                        <tr>
                            <td>Precio</td>
                            <td><input type="submit" name="agregar" value="agregar"</td>
                        </tr>
                    </table>
                </td>';
echo '</form>';
    }
echo '          </tr>';
}
echo '</table>';
echo '</body>';