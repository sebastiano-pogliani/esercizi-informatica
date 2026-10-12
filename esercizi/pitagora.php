<!DOCTYPE html>
<html>
    <head>
        <title>Tabella Pitagorica</title>
    </head>
    <body>
        <h1>Generazione di una tabella Pitagorica</h1>
           <?php 
                echo '<table border="1">';
            
                for($a = 1; $a <= 10; $a++){
                    echo '<tr>';
                    for($b = 1; $b <= 10; $b++){
                        $c = $a*$b;
                        echo "<td>$c</td>";
                    }
                    echo '</tr>';
                }
            
                echo '</table>';
            ?> 

    </body>
</html>
