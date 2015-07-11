<?php

echo 'Ejemplo de Sensores subido a github segunda prueba';
echo 'Otra contribucion 1';
echo 'Otra contribucion 2';
echo 'Otra contribucion 3';
        
        $link = mysql_connect("localhost", "root", "root");
        
        mysql_select_db("BD_Sensores", $link);
        
        $select =  "select * from Sensores";
        
        $resultado = mysql_query($select);

?>

<table width="50%" border=1 bordercolorlight="#CCCCCC" cellspacing="1px" cellpadding="0px">
    <tr>
            <td>ID Sensor</td>
            <td>Nombre</td>
    </tr>
    <?php
        while ($row = mysql_fetch_row($resultado))
        { 
        ?> 
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
	</tr>
      <?php
        } 
        ?>  
        
</table>