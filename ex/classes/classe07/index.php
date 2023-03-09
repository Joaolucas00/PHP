<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palavra-chave static PHP</title>
</head>
<body>
    <?php 
        /** palavra-chave static
         * Declarar propriedades ou métodos de uma classe como estáticos faz deles acessíveis sem a necessidade de instanciar a classe. 
         * Um membro declarado como estático não pode ser acessado através de uma instância da classe.
         */

use Classe as GlobalClasse;
use ClasseFilha as GlobalClasseFilha;

        /**
         * Como métodos estáticos podem ser chamados sem uma instância do objeto criada, 
         * a pseudo-variável $this não está disponível dentro de um método declarado como estático.
         */
        /**
         * Propriedades estáticas são acessíveis utilizando o Operador de Resolução de Escopo (::) 
         * e não podem ser acessados através do operador de objeto (->).
         */

         // exemplo
        class Classe {
            public static $var_static; // propriedade estática

            public function metStatic() {
                return self::$var_static;
            }
        }

        class ClasseFilha extends Classe {
            public function classeMetStatic() {
                return parent::$var_static;
            }
        }

        Classe::$var_static = "Propriedade estática";
        print Classe::$var_static;
        //$obj = new Classe;
        print $obj->metStatic();
        $obj2 = new ClasseFilha;
        print ClasseFilha::$var_static;
        print $obj2->classeMetStatic();
    
    
    ?>
</body>
</html>