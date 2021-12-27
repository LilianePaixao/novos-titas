<html>
    <head> 
            <link rel="stylesheet" href="style.css"    
            <meta charset="UTF-8"/>
            <title>Exercício 1 </title>
        </head>

    <body>
       
        <div>
            <h1> Exercício 1 </h1>

            <form method="post" action="index.php">
                
                    <label for="n1">Digite o 1º número: </label>
                    <input type="number" id="n1">
                          
                    <label for="n2">Digite o 2º número: </label>
                    <input type="number" id="n2" >
                  
                    <input type="submit" value="Enviar"/>
                
                    <img id= "img" src="iconezap.png">
            </form>
                <?php
                /* Construir um algoritmo que leia 2 números e
                efetue a adição. Caso o valor somado seja
                maior que 20, este deverá ser apresentando
                somando-se a ele mais 8; caso o valor
                somado seja menor ou igual a 20, este deverá
                ser apresentado subtraindo-se 5
                */
                
                $sum = $POST["n1"] + $POST["n2"];
                echo " A soma dos dois números é $sum";

                 if($sum > 20){
                    echo "$sum  += 8";
                } elseif($um <=20){
                    echo "$sum -= 5";
                }    
                ?>
    
        </div>
    </body
</html>
