<!DOCTYPE html>
<html>
    <head>
        <title>Buongiorno</title>
    </head>
    <body>
        <h1>Generazione di un saluto in base alla data</h1>
           <?php
           $nome = "Paolo";
           $today = new DateTime("now", new DateTimeZone('Europe/Rome'));
           $ora = $today->format('H');
           if($ora >= 8 && $ora <= 12){
            echo "Buongiorno $nome, benvenuta nella mia prima pagina PHP";
           }else if($ora > 12 && $ora <= 20){
            echo "BuonaSera $nome, benvenuta nella mia prima pagina PHP";
           }else if(($ora > 20) || ($ora < 8)){
            echo "BuonaNotte $nome, benvenuta nella mia prima pagina PHP";
           }
           ?> 

    </body>
</html>
