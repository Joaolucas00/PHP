<?php 
    // Construtores pais não são chamados implicitamente se a classe filha define um construtor. Para executar o construtor da classe pai, uma chamada a parent::__construct() dentro do construtor da classe filha é necessária. Se a classe filha não definir um construtor, será herdado da classe pai como um método normal (se não foi declarado como privado).

    class ClassePai {
        function __construct()
        {
            echo "Classe pai";
        }
    }

    class ClasseFilha extends ClassePai {
        function __construct() 
        {
            parent::__construct(); // chama o construtor da ClassePai
            echo "Classe filha";
        }
    }

    class subClass extends ClassePai {
        // Construtor da ClassePai herdado
    }


    // Utilizando argumentos de construtor
    class CLasseExemplo {
        protected int $x;
        protected int $y;

        public function __construct(int $x, int $y = 0)
        {
            $this->x = $x;
            $this->y = $y;
        }
    }

    // Utilizando promoção de propriedades no construtor

    class Classe {
        public function __construct(public int $x, public int $y = 0)
        {
            $this->x = $x;
            $this->y = $y;
        }
    }
    /**
     *  Quanto um argumento de construtor incluir um modificador de visibilidade,
     *  o PHP interpreta como sendo uma propriedade de objeto e como um argumento do construtor,
     *  e assimilará o valor do argumento a uma propriedade de mesmo nome.
     */

     // self é usado para acessar membros estáticos


?>