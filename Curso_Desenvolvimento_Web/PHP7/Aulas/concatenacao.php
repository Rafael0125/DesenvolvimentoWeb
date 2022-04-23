<html>
    <head>
        <meta charset = 'utf-8'>
        <title>Concatenação</title>
    </head>
    
    <body>    
        <?php
            $nome = 'Rafael';
            $cor = 'Azul';
            $idade = 24;
            $atividade = 'desenvolver';
            echo 'Ola ' . $nome .  ', sua cor favorita é '. $cor . ' ,você tem ' . $idade . ' anos de idade e sua atividade favorita é ' .$atividade. '.' ;     
        ?>
        <br/>
        Codigo do exemplo a cima == 'echo 'Ola ' . $nome .  ', sua cor favorita é '. $cor . ' ,você tem ' . $idade . ' anos de idade e sua atividade favorita é ' .$atividade. '.' ;
'
        <br/>
        <p> USAMOS O OPERADOR PONTO == ' . ' PARA CONCATENAR UMA VARIAVEL </p>
        <p> Usando Aspas Duplas não precisamos usar o operador '.' para concatenar APENAS COM ASPAS DUPLAS</p>
        <br/>
        <?php
            $nome = 'Rafael';
            $cor = 'Azul';
            $idade = 24;
            $atividade = 'desenvolver';
            echo "Ola $nome, sua cor favorita é $cor, você tem $idade de idade e sua atividade favorita é $atividade"      
        ?>
        <br/>
        Codigo do exemplo a cima == 'echo "Ola $nome, sua cor favorita é $cor, você tem $idade de idade e sua atividade favorita é $atividade"      
'


        <br/>
        <br/>
        <br/>
        <br/>

    
        <p>
        <a href="index.php"> <h3>Mapa de Aulas</h3> </a> 
        </p>
        <br/>




    </body>

</html>