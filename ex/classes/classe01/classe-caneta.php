<?php 
    // No PHP você pode botar variás classes no mesmo arquivo, diferente de Java.
    class Caneta {
        public string $modelo;
        public $cor;
        var $ponta; // public por padrão
        public int $carga;
        public bool $tampada;

        function rabiscar() {
            echo "Rabiscando";
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