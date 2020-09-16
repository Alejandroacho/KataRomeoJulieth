<?php
namespace FamiliaCapuleto;

abstract class FamiliaMontesco
{
    public static $home = "Bosque, Verona";
    public static $hiddenInTheWoods = True;
    private static $money = True;

    private function weHate ($family)
    {
        if ($family != "Familia Montesco") {
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