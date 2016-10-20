<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('./inc/config.inc.php');
        
        // $Conta = new Abstracao('Michel A. Rocha','1000,00');
        //$ContaDois = new Abstracao('Marcos','600,00');
        //$Conta->Depositar(500);
        //$Conta->Sacar(500);
        //$Conta->Transferir(500, $Conta);
        //$Conta->Transferir(300,$ContaDois);
        //var_dump($Conta,$ContaDois);
        
        $CC = new AbstracaoCC('Michel A. Rocha','2000,00');
       
        var_dump($CC);
        ?>
    </body>
</html>
