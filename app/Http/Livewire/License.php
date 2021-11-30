<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\LicensePriceCalculator;

class License extends Component
{
    public $teamSize = 2;
    

    /**************************************************************************************** 
    Autre maniére de faire: Voir le dossier tuto
    ----------------------------------------------     

    public $amount;

    // mount() est une fonction qui est appélée qu'une seule fois, on va l'utiliser pour calculer le montant au début (à l'arrivée sur le site)
    public function mount()
    {
        $this->amount = $this->calculateAmount($this->teamSize);
    }

    // cette méthode est appélé à chaque fois qu'on fait une modification de teamSize (on met update collé à notre attibut concerné par les modifications) sur notre page
    public function updatedTeamSize(int $value)
    {
        $this->amount = $this->calculateAmount($value);
    }

    public function render()
    {
        return view('livewire.license');
    }



    *********************************************************************************************/


    // Cette méthode n'est pas obligatoir car License hérite de component qui est une classe abstraite et qui posséde la méthode render()
    // cette méthode est appélé à chaque modification, donc grace à wire:model="teamSize" on va pouvoir changer noter teamSize et appeler render()
    // Au niveau de render on peut passer des variables lorsqu'on retourne notre vue
    // La valeur de amount sera calculé grace à la méthode calculatePrice de la classe LicensePriceCalculator
    public function render()
    {
        return view('livewire.license', [
            'amount' => LicensePriceCalculator::calculatePrice($this->teamSize)
        ]);
        // (on peut même ne pas retourner cette vue mais juste le texte du fichier view license)
    }


    
    /**************************************************************************************************************
    //cette méthode permet le calcul du montant, on l'appel à l'intérieur de la classe (c'est pour ça qu'elle en privé)
    On va déplacer cette méthode dans un fichier seul, dans le doccier Service dans App
    // private function calculateAmount(int $teamSize)
    // {
    //     return $teamSize <= 5 ? $teamSize * 15 : 50 + ($teamSize - 5) * 10;
    // }
    ******************************************************************************************************************/
}
