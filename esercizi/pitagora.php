<!DOCTYPE html>
<html>
    <head>
        <title>Tabella Pitagorica</title>
    </head>
    <body>
        <h1>Generazione di una tabella Pitagorica</h1>
           <?php 
                echo '<table border="1">';
            //inizio tabella
                for($a = 1; $a <= 10; $a++){
                    echo '<tr>';
                    //inizio creazione linea
                    for($b = 1; $b <= 10; $b++){
                        $c = $a*$b;
                        echo "<td>$c</td>";
                        //creazione casella della colonna
                        //inserisce nella casella il valore giusto (moltiplicando il numero della colonna per il numero della riga)
                    echo '</tr>';
                        //fine creazione linea
                }
            
                echo '</table>';
           //fine tabella
            ?> 

    </body>
</html>
