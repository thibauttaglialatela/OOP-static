<?php

class Speedometer
{
    /**
     * Constantes
     */

     public const SPEED_CONVERSION = 1.609344;

    /**
     * méthodes de classe
     */

     public static function convertKmToMiles(int $speed): float
     {
         return round($speed / self::SPEED_CONVERSION, 2);
     }

     public static function convertMilesToKm(int $speed): float
     {
         return round($speed * self::SPEED_CONVERSION, 2);
     }
}