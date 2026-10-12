<!DOCTYPE html>
<html>
    <head>
        <title>Tabella Pitagorica</title>
    </head>
    <body>
        <h1>Generazione di una tabella Pitagorica</h1>
           <?php 
                echo "a.";
                for($i = 1; $i < 10; $i++){
                    $str = "";
                    for($o = 1; $o < 10; $o++){
                        $count = $i;
                        if($count > 1){
                            $str += "*";
                            $count -= 1;
                        }else{
                            $str += " ";
                        }
                    }
                    echo $str;
                }

                echo "b.";
                for($i = 10; $i > 0; $i--){
                    $str = "";
                    for($o = 1; $o < 10; $o++){
                        $count = $i;
                        if($count > 1){
                            $str += "*";
                            $count -= 1;
                        }else{
                            $str += " ";
                        }
                    }
                    echo $str;
                }
                
                echo "c.";
                for($i = 1; $i < 10; $i++){
                    $str = "";
                    for($o = 1; $o < 10; $o++){
                        $count = $i;
                        if($count > 1){
                            $str += " ";
                            $count -= 1;
                        }else{
                            $str += "*";
                        }
                    }
                    echo $str;
                }

                echo "d.";
                for($i = 10; $i > 0; $i--){
                    $str = "";
                    for($o = 1; $o < 10; $o++){
                        $count = $i;
                        if($count > 1){
                            $str += " ";
                            $count -= 1;
                        }else{
                            $str += "*";
                        }
                    }
                    echo $str;
                }
            ?> 

    </body>
</html>
