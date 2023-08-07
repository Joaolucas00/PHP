<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 16</title>
</head>
<body>
    <?php 
        class Olamundo {
            public function foo() {
                echo("foo()");
                
            function bar() {
                echo("bar()");
            }
            }
        }
        
        
        $obj = new Olamundo;
        $obj->foo(); // função bar() disponível quando chamado foo()
        bar();
        echo "<hr>";

        class C1 {
            public function foo() {
                echo("foo()");
                return new C2; // retorna um objeto da classe C2 definida abaixo
                               // assim eu posso usar a função bar() logo apos usar foo()
            }
        }

        class C2 {
            public function bar() {
                echo("bar()");
            }
        }

        $obj2 = new C1;
        $obj2->foo()->bar();
        
    ?>
</body>
</html>