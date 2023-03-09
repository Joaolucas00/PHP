<?php 
    //  Acessando membros privados entre objetos do mesmo tipo

    class Teste {
        private $privado;

        public function __construct($privado)
        {
            $this->privado = $privado;
        }

        private function metPrivado() {
            echo "Acessou o método privado.";
        }

        public function metPublico(Teste $obj_Teste) {
            // Pode-se alterar a propriedade privada:
            $obj_Teste->privado = "Olá";
            var_dump($obj_Teste->privado);
            
            // Pode-se chamar método privado:
            $obj_Teste->metPrivado();

        }
    }


?>