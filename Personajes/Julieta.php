<?php
namespace Julieta;
use Familias\FamiliaCapuleto;

class Julieta extends FamiliaCapuleto
{
    public static $name = "Julieta";
    public static $genre = "Female";
    private static $age = 16;

    public function goTo ($location)
    {
        return True;
    }
    private function writeLetter ($to)
    {
        $content = "Contenido de la carta";
        $letter= [ "from"=>$this->name, "to"=>$to, "content"=>$content ];
        return $letter;
    }
    private function love ($characterName)
    {
        if ($characterName == "Romeo"){
            return True;
        }
        return False;
    }
    private function fake ($action)
    {
        return $fakedAction;
    }
    private function suicide ($live)
    {
        $live = False;
        return $live;
    }
}
?>