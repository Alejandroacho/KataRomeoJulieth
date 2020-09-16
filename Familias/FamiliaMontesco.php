<?php
namespace FamiliaMontesco;

abstract class FamiliaMontesco
{
    public static $home = "Rancho Montesco, Verona";
    public static $hiddenInTheWoods = False;
    private static $money = True;

    private function weHate ($family)
    {
        if ($family != "Familia Capuleto") {
            return False;
        }
        return True;
    }
    private function findOut ($something)
    {
        return True;
    }
    private function willDestroy ($something)
    {
        $destroy=" will be destroyed";
        $somethingWillBeDestroyed=$something.$destroy;
        return $somethingWillBeDestroyed;
    }
}
?>