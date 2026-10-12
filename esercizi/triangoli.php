<!DOCTYPE html>
<html>
    <head>
        <title>Tabella Pitagorica</title>
    </head>
    <body>
        <h1>Generazione di quattro triangoli di asterischi</h1>
           <?php 
                echo "a.<br>";
                for($i = 1; $i <= 10; $i++){
                    for($o = 0; $o < $i; $o++){
                        echo "*";
                        //scrive un asterisco nella riga
                        //aggiunge un asterisco ogni volta che il ciclo va a capo dieci volte
                    }
                    echo "<br>";
                }
                echo "<br>";
                echo "b.<br>";
                for($i = 10; $i >= 0; $i--){
                    for($o = 0; $o < $i; $o++){
                        echo "*";
                        //scrive un asterisco nella riga
                        //rimuove un asterisco ogni volta che il ciclo va a capo dieci volte
                    }
                    echo "<br>";
                }
                echo "<br>";
                echo "c.<br>";
                for($i = 0; $i < 10; $i++){
                    $count = $i;
                    for($o = 1; $o <= 10; $o++){
                        if($count > 0){
                            echo '&nbsp;&nbsp;';
                            //scrive uno spazio nella riga
                        }else{
                          echo "*";
                            //aggiunge un asterisco ogni volta che la variabile "count" finisce
                        }
                        $count -= 1;
                    }
                    echo "<br>";
                }
                echo "<br>";
                echo "d.<br>";
                for($i = 10; $i >= 0; $i--){
                    $count = $i;
                    for($o = 1; $o <= 10; $o++){
                        if($count > 0){
                            echo '&nbsp;&nbsp;';
                            //scrive uno spazio nella riga
                        }else{
                          echo "*";
                            //aggiunge un asterisco ogni volta che la variabile "count" finisce
                        $count -= 1;
                    }
                    echo "<br>";
                }
            ?> 

    </body>
</html>
