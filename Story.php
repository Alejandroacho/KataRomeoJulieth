<?php
namespace Story;
use Familias\FamiliaCapuleto;
use Familias\FamiliaMontesco;
use Personajes\Julieta;
use Personajes\Romeo;
use Personajes\Lorenzo;

class Story
{   
    public function beginning ()
    {
        $lorenzo= new Lorenzo();
        $romeo= new Romeo();
        $julieta= new Julieta();

        $party = "Richs party";

        $lorenzo->goTo($party);
        $romeo->goTo($party);
        $julieta->goTo($party);

        $romeo->findOut($julieta);

        $lorenzo->goTo($lorenzo->home);
        $romeo->goTo($romeo->home);
        $julieta->goTo($julieta->home);

        for ($i=1; $i<=6; $i++){
            if ($i%2==0){
                $julietasLetter=$julieta->writeLetter($romeo);
                $lorenzo->sendLetter($julietasLetter, $romeo);
            }
            if ($i==1 or $i%3==0){
                $romeosLetter=$romeo->writeLetter($julieta);
                $lorenzo->sendLetter($romeosLetter, $julieta);
            }
        }

        $romeo->love($julieta);
        $julieta->love($romeo);

        $wedding = $lorenzo->marry($romeo, $julieta);
        $weddingPayment = $lorenzo->charge($wedding);

        $beginning = ["Lorenzo"=>$lorenzo, "Julieta"=>$julieta, "Romeo"=>$romeo, "Wedding"=>$wedding];
        return $beginning;
    }
    public function climax ($beginning)
    {   
        $wedding=$beginning["Wedding"];

        $familiaCapuleto = new FamiliaCapuleto();
        $familiaMontesco = new FamiliaMontesco();

        $romeoCaught = $familiaCapuleto->findOut($wedding);
        $julietaCaught = $familiaMontesco->findOut($wedding);

        $capuletosSaid = $familiaCapuleto->willDestroy($familiaMontesco);
        $montescoSaid = $familiaMontesco->willDestroy($familiaCapuleto);

        $climax = [$montescoSaid, $capuletosSaid, $beginning];

        return $climax;
    }
    public function end ($climax)
    {
        $lorenzo=$climax->beginning["Lorenzo"];
        $romeo=$climax->beginning["Romeo"];
        $julieta=$climax->beginning["Julieta"];
        $fakePosion = "Cicuta Fake";

        $lorenzo->give($fakePosion, $julieta);
        $julietaFakesDead=$julieta->fake($die);
        $romeo->findOut($julietaFakesDead);
        $romeoDead = $romeo->suicide();
        $julieta->findOut($romeoDead);
        $julieatDead = $julieta->suicide();

        $end = [$romeoDead, $julietaDead];
        return $end;
    }
}
?>