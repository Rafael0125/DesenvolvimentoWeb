<html>
    <head>
        <meta charset = 'utf-8'>
        <title>Variaveis Constantes</title>
    </head>
    
    <body>    
    <p>
        Para criar uma variavel constante é usado a função 'define' <br/>
        É uma boa pratica declarar variaveis constantes em MAIUSCULO <br/>
        Não da para modificar o valor de uma variavel constante depois que ela foi declarada<br/>

    </p>
    <p>
        <?php 

            define('BD_URL', 'endereco_bd_dev'); // define('NOME_DA_VARIAVEL', 'valor da variavel')
            define('BD_USUARIO', 'endereco_usuario_dev'); // define('NOME_DA_VARIAVEL', 'valor da variavel')
            define('BD_SENHA', 'endereco_senha_dev'); // define('NOME_DA_VARIAVEL', 'valor da variavel')

            echo BD_URL.'<BR/>';
            echo BD_USUARIO.'<BR/>';
            echo BD_SENHA.'<BR/>';




        ?>
    </p>





        <br/>
        <br/>

    
        <p>
        <a href="index.php"> <h3>Mapa de Aulas</h3> </a> 
        </p>
        <br/>




    </body>

</html>