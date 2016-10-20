<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./class/AtributosMetodos.class.php');
        $pessoa = new AtributosMetodos();
        $pessoa->setUsuario('Michel', 29, 'Analista de sistema');
        $usuario = $pessoa->getUsuario();
        echo $usuario;

        echo "<hr>";

        $pessoa->idade = 'Banana';

        $pessoa->setUsuario('Marcelo',29, 'Analista de sistema');
        $pessoa->setIdade(29);
        $pessoa->Envelhecer();
       


        $pessoa->getClasse();
        ?>
    </body>
</html>
