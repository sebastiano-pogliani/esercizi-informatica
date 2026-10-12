<!DOCTYPE html>
<html>
    <head>
        <title>Buongiorno</title>
    </head>
    <body>
        <h1>Generazione di un saluto in base alla data</h1>
           <?php
           $nome = "Paolo";
           //variabile nome, in base al valore assegnato il saluto cambia.
           $today = new DateTime("now", new DateTimeZone('Europe/Rome'));
           $ora = $today->format('H');
           //variabile ora ha il valore int dell'ora del giorno a roma
           if($ora >= 8 && $ora <= 12){
            echo "Buongiorno $nome, benvenuta nella mia prima pagina PHP";
           }else if($ora > 12 && $ora <= 20){
            echo "BuonaSera $nome, benvenuta nella mia prima pagina PHP";
           }else if(($ora > 20) || ($ora < 8)){
            echo "BuonaNotte $nome, benvenuta nella mia prima pagina PHP";
           }
           //in base all'ora del giorno, il saluto cambia
           ?> 

    </body>
</html>
