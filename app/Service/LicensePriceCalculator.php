<?php
namespace App\Service;

class LicensePriceCalculator
{
    public static function calculatePrice(int $teamSize): float //:float pour qu'elle retourne un float
    {
        return $teamSize <= 5 ? $teamSize * 15 : 50 + ($teamSize - 5) * 10;
    }
}

//Pour appeler cette focntion static: LicensePriceCalculator::calculatePrice