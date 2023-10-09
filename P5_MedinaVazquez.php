<!DOCTYPE html>
<HTML LANG="es">
        <head>
            <META charset="UTF-8">
            <title> Sentencia While </title>
        </head>
    <body>
        <font color=purple size=5> Tabla de multiplicar del 2 </font>
        <br><br>
        <font color=black>

            <?php
                $x=0;
                $y=0;
                    while($y<=20 && $x<=10 )
                    {
                        echo "$x x 2= $y<br>";
                        $y+=2;
                        $x++;
                        
                    }
            ?>
        </font>
    </body>
