<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Comportamento Inicial</title>
    </head>
    <body>
        <?php
        require ('./class/ComportamentoInicial.class.php');

        //$Michel = new ComportamentoInicial;
        //$Michel->nome = 'michel';
        //$Michel->salario = 2000;

        $Michel = new ComportamentoInicial('Michel', 29, 'Programador', 5600);
        $Thiago = new ComportamentoInicial('Thiago', 27, 'programador',3600);
        $Marcos = new ComportamentoInicial('Marcos', 31, 'programador',5600);

        $Michel->ver();
        ?>
    </body>
</html>
