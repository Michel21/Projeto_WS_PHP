<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Conceito de Heranças</title>
    </head>
    <body>
        <?php
        require ('./inc/config.inc.php');
        $Pessoa = new Heranca('Michel A.Rocha', 30);
        $Pessoa->Formar("PRO PHP");
        $Pessoa->Formar("WS PHP");
        $Pessoa->Envelhecer();
        $Pessoa->VerPessoa();



        var_dump($Pessoa);
        echo "<hr>";
        $PessoaME = new HerancaJuridica('Michel A.Rocha',30,'UPINSIDE TECNOLOGIA');
        $PessoaME->Formar("PRO PHP");
        $PessoaME->Formar("WS PHP");
        $PessoaME->Envelhecer();
        $PessoaME->VerPessoa();
        
        $PessoaME->Contratar('THIGO');
        $PessoaME->Contratar('ROBERTO');
        $PessoaME-> VerEmpresa();
        


        var_dump($PessoaME);
        ?>
    </body>
</html> 