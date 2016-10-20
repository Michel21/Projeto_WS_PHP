<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './class/ModelagemDeClasse.class.php';

        $Michel = new ModelagemDeClasse("Michel", 29, "Programador", 2000);
        $Michel->setProfissao("Desenvolvedro WEB");
        
        $Michel->Trabalhar("portal",15000);


        var_dump($Michel);
        ?>
    </body>
</html>
