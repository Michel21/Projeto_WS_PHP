<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - CONCEITOS DE POLIMORFISMO</title>
    </head>
    <body>
        <?php
        require ('./inc/config.inc.php');
        
          $boleto = new Polimorfismo('PRO PHP','334.90');
          $boleto->Pagar();
          
          var_dump($boleto);
          echo "<hr>";
          
          $Desconto = new PolimorfismoDeposito('PRO PHP', '334.90');
          $Desconto->Pagar();
          
          var_dump($Desconto);
           echo "<hr>";
           
           $Cartao = new PolimorfismoCartao('PRO PHP','335.90');
           $Cartao->Pagar();
           $Cartao->Pagar(10);
           var_dump($Cartao);
           
        ?>
    </body>
</html>
