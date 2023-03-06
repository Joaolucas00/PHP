<?php 
    // No PHP você pode botar variás classes no mesmo arquivo, diferente de Java.
    class Caneta {

        // declaração de atributo ou propriedade

        public string $modelo;
        public $cor;
        var $ponta; // public por padrão
        public int $carga;
        public bool $tampada;

        // declaração de método
        function rabiscar() {
            if ($this->tampada) {
                echo "A caneta está tampada..";
            } else {
                echo "Rabiscando..";
            }

        }

        function tampar() {
            $this->tampada = true;
        }

        function destampar() {
            $this->tampada = false;
        }
    }

    class Pessoa {}



?>