<?php
namespace Iglesia;

abstract class Iglesia
{
    public static $location = "El Vaticano";
    private static $power = True;
    private static $money = True;

    public function beliefs ()
    {   
        $preaching = "In God We Trust";
        return $preaching;
    }

    public function charge ($concept)
    {
        if ($conecpt != Null) {
            return True;
        }
        return False;
    }
}
?>