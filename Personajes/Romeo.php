<?php
namespace Romeo;
use Familias\FamiliaMontesco;

class Romeo extends FamiliaMontesco
{
    public static $name = "Romeo";
    public static $genre = "Male";
    private static $age = 16;

    public function goTo ($location)
    {   
        return true;
    }
    private function writeLetter ($to)
    {
        $content = "Contenido de la carta";
        $letter= [ "from"=>$this->name, "to"=>$to, "content"=>$content ];
        return $letter;
    }
    private function love ($characterName)
    {
        if ($characterName == "Julieta"){
            return True;
        }
        return False;
    }
    private function suicide ($live)
    {
        $live = False;
        return $live;
    }
}
?>