<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./inc/config.inc.php');
        $classeA = new ClassesObjetos();
        $classeB = new AtributosMetodos();
        $classeC = new ComportamentoInicial('Michel',30, 'Programador',3000);
        $classeC = new ComportamentoInicialTest('Michel',30, 'Programador',3000);
        
        var_dump($classeA,$classeB,$classeC);
        ?>
    </body>
</html>
