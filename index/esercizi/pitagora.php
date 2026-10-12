<html>
    <head>
        <title>Tabella Pitagorica</title>
    </head>
    <body>
        <h1>Generazione di una tabella Pitagorica</h1>

        <p>
           <?php 
                echo '<table border="1">';
            
                for($a = 0; $a < 10; $a++){
                    echo '<tr>';
                    for($b = 0; $b < 10; $b++){
                        echo "<td>$a*$b</td>"
                    }
                    echo '</tr>';
                }
            
                echo '</table>';
            ?> 
        </p>

    </body>
</html>
