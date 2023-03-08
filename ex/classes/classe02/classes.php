<?php 

    // Constantes de classe podem ser redefinidas em classes filhas. A partir do PHP 8.1.0, constantes de classe não podem ser redefinidas numa classe filha se ela for qualificada como final.
    const UM = 1;
    class Constantes {
        const CONSTANTE = "Valor constante";
        const DOIS = UM * 2;
        const TRES = self::DOIS + 1;

        static function mostrarConstante() {
            echo self::CONSTANTE;
        }
    }

    // Também é possível que interfaces tenham constantes



?>