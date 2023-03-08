<?php 

    // Constantes de classe podem ser redefinidas em classes filhas. A partir do PHP 8.1.0, constantes de classe não podem ser redefinidas numa classe filha se ela for qualificada como final.
    class Constantes {
        const CONSTANTE = "Valor constante";

        static function mostrarConstante() {
            echo self::CONSTANTE;
        }
    }

    // Também é possível que interfaces tenham constantes



?>