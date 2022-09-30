<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>Aula1_Teste_PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>

  
  

</head>





<body> <!-- Arquivo em PHP criado para fazer só a checagem de senhana pagina de login de usuário-->
    <div>
        

       <?php

        $a=isset($_GET["user"])?$_GET["user"]: 0;
        $i=isset($_GET["senh"])?$_GET["senh"]: 0;
        

        
        if ($a==cc && $i==6){

             header('Location:pagelogado.html');
             echo "$a || $i";
            }

            else{
                header('Location:pagesenhaerrada.html');}

                echo " login.html $i";
                            

        ?>

    </div>

        
</body>
</html>