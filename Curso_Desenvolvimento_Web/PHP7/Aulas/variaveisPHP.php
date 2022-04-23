<html>
    <head>
        <meta charset = 'utf-8'>
        <title>Variaveis</title>
    </head>
    
    <body>
        <p>
            <h1>Introdução Variaveis em PHP</h1>
        </p>
        <p>
            Tipos de Variaveis em PHP :
            string ; int ; float ; boolean ; array ... 
        </p>
        <p>
            Regras para declaração de Variaveis em PHP:
            <br/>
            === Devem sem declaradas com " $ " 
            <br/>
            === Não devem conter espaços e nem caracteres especiais ( SO O UNDERLINE ' _ ')
        </p> 
        <p>
            O PHP é Case sensetive, isso quer dizer que : <br/>
            A variavel "$nome" é Diferente "!=" de $Nome e != de $NOME 
        </p>
        <br/>
        <br/>

        <h1> Declarando Variaveis</h1>
        <?php
            // String
            $nome = 'Rafael';
            // int
            $idade = 24;
            // float
            $peso = 76.45;
            // boolean
            $fumante_sn = true;                  
        ?>
        <br/>
        <h4> Ficha Cadastral</h4>
        <p>Nome: <?= $nome; ?></p>
        <p>Idade: <?= $idade; ?></p>
        <p>Peso: <?= $peso; ?></p>
        <p>Fumante: <?= $fumante_sn; ?></p>

        <?php
            // String
            $nome = 'Paula';
            // int
            $idade = 22;
            // float
            $peso = 61.5;
            // boolean
            $fumante_sn = false;                  
        ?>
        <br/>


        <p> <h4>Podemos mudar os valores das variaveis</h4> </p>

        <br/>
        <h4> Ficha Cadastral 2 </h4>
        <p>Nome: <?= $nome; ?></p>
        <p>Idade: <?= $idade; ?></p>
        <p>Peso: <?= $peso; ?></p>
        <p>Fumante: <?= $fumante_sn; ?></p>

        <br/>

        


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