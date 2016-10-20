<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> WS PHP - Interacao de objetos</title>
    </head>
    <body>
        <?php
        require ('./class/InteracaoClasse.class.php');
        require ('./class/InteracaoDeObjetos.class.php');
        
        $Michel  = new InteracaoClasse('Michel A. Rocha',30,'Programador',2500);
        $Marcos = new InteracaoClasse('Marcos',32, 'WebDesign', 500);
        
        $upinside = new InteracaoDeObjetos('UPINSIDE TECNOLOGIA');
        $upinside->Contratar($Michel,'WebMaster',3700);
        $upinside->Pagar();
        $upinside->Promover('Gerente de Projeto', 12000);
        $upinside->Pagar();
        //$upinside->Demitir(5600);
        
        
        $upinside->Contratar($Marcos, 'WebDesign',2200);
        $upinside->Pagar();
        $upinside->Promover('Administrador de projetos');
        
        $upinside->Funcionario($Michel);
        $upinside->Pagar();
                
        var_dump($Michel,$Marcos,$upinside);
        
        ?>
    </body>
</html>
