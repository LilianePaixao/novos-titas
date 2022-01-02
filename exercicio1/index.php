<!DOCTYPE html>
    <html lang="pt-br">   
<head> 
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/exercicio1/style.css">    
        <title>Exercício 1 </title>
    </head>

    <body>
        <div>
            <h1> Exercício 1 </h1>

            <form method="POST" action="/exercicio1/index.php">
                
                    <label for="n1"> Digite o 1º número: </label>
                    <input type="number" name="n1">
                          
                    <label for="n2">Digite o 2º número: </label>
                    <input type="number" name="n2" >
                  
                    <input type="submit" value="Enviar"/>
                
                    <img id= "img" src="/exercicio1/iconezap.png">
            </form>

                <?php
                /* Construir um algoritmo que leia 2 números e
                efetue a adição. Caso o valor somado seja
                maior que 20, este deverá ser apresentando
                somando-se a ele mais 8; caso o valor
                somado seja menor ou igual a 20, este deverá
                ser apresentado subtraindo-se 5
                */
                
                
                $sum = $_POST["n1"] + $_POST["n2"];
                
                if (empty($_POST["n1"] and $_POST["n2"])){
                    echo "Preencha os campos acima";
                }elseif($sum > 20){
                    echo $sum +=8;
                }else{
                    echo $sum -=5;
                }
                       
                
                ?>
    
        </div>
    </body
</html>
