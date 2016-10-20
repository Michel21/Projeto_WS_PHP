<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./class/ClassesObjetos.class.php');
        $teste = new ClassesObjetos();
        $teste->getClass('De introducao', 'mostrar classe');
        $teste->varClass();

        $teste->Classe = 'Classe 2';
        $teste->Funcao = 'ver os Atributos';
        $teste->varClass();
        ?>
    </body>
</html>
