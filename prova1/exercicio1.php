<?php
$casos = intval(fgets(STDIN));

 if ($casos =! 0){
        $linha2 = explode(" ",fgets(STDIN));
        $orgx = $linha2[0];
        $orgy = $linha2[1];
     for($i=0; $i < $casos; $i++){
         $x = intval($linha[0]);
         $y = intval($linha[1]);

        if($x > $orgx && $y > $orgy){
            echo "NE\n";
        }
        else if($x > $orgx && $y < $orgy){
            echo "SE\n";
        }
        else if($x < $orgx && $y < $orgy){
            echo "SO\n";
        }
        else{
             echo "NO\n";
            }
    }
 }
?>