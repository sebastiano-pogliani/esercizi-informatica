<!DOCTYPE html>
<html>
  <head>
    <title>Pagina di Login</title>
  </head>
  <body>
    <h2>Controllo delle Credenziali</h2>
    <?php
    $usr = $_POST["username"];
    $psw = $_POST["password"];

    $r_usr = "Tiziano";
    $r_psw = "123456";
    if($usr != $r_usr && $psw != $r_psw){
      echo "<h4> Attenzione! Nome utente o password sbagliati!<br>accesso negato!</h4>";
    }else{
      echo "<h4> Benvenuto " . $r_usr . " nell'area riservata del sito";
    }
    ?>
  </body>
</html>
