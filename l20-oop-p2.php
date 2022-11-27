<?php
class hayder
{
    private static string $name;
    public static $harderErIccha = "Argentina Haruk";
    public const country = "Bangladesh";

    private function __construct()
    {
        return;
    }

    public static function agakalkerKhela($n): string
    {
        hayder::$name = $n;
        return hayder::$name;
    }
}
/* $obj = new hayder;
echo $obj->harderErIccha; */
echo hayder::$harderErIccha . "<br>";
echo hayder::agakalkerKhela("Hero Alom") . " Form ";
echo hayder::country . "<br>";
