<?php


class Speedometer
{
    public const CONVERTER = 0.6214;
    public static function MilesToKilometers(float $miles) :float
    {
        return ($miles/(self::CONVERTER));
    }
    public static function KilometerToMiles(float $kilometers) :float
    {
        return ($kilometers*(self::CONVERTER));
    }
}