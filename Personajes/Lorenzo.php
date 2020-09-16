<?php
namespace Lorenzo;
use Entidades\Iglesia;

class Lorenzo extends Iglesia
{   
    public static $name = "Lorenzo";
    public static $home = "Monasterio, Verona";
    public static $genre = "Male";
    public static $job = "Fray";
    private static $age ="unknown";
    private static $money = False;

    public function goTo ($location)
    {   
        return True;
    }
    public function marry ($fianceOne, $fianceTwo)
    {   
        $married = [$fianceOne, $fianceTwo];
        return $married;
    }
    public function give ($something, $to)
    {
        $given=$something.$to;
        return $given;
    }
    public function sendLetter ($letter, $to)
    {   
        $this->give($letter, $to);
        return $letter;
    }
}
?>