<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Replicas e Clonagem</title>
    </head>
    <body>
        <?php
         require('./class/ReplicaClonagem.class.php');
         
         $readA = new ReplicaClonagem("posts","categoria = 'noticia'", 'ODER BY data DESC');
         $readA->ler();
         
         $readA->setTermos("categoria = 'internet'");
         $readA->ler();
         
         $readB = clone($readA);
         $readB->setTermos("categoria = 'redes socias'");
         $readB->ler();
         
         $readC = clone($readA);
         $readC->setTabela('comentarios');
         $readC->setTermos("post = 25");
         $readC->ler();
         
         
         
         var_dump($readA,$readB,$readC);  
        ?>
    </body>
</html> 
