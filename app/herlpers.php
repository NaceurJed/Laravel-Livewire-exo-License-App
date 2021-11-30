<?php

if (! function_exists ('pluralize')) { //si la fonction n'existe pas
    function pluralize(int $count, string $singular, ?string $plural = null): string //si on donne le pluriel on va utiliser le pluriel si non on va rajouter un "s" au singulier
    {
        $plural ??= $singular . 's'; //?? signifie qu esi $plural est null (non défini dans les paraméter de la fonction pluralize) on lui attribut $singular . 's'
        // equivalent à ça: $plural = $plural ?? $singular . 's';
        $string = $count ===1 ? $singular : $plural; //si $count = 1 alors on prend la valeur de $singular si non on prend $plural
        return "$count $string";
    }
}

if (! function_exists ('money')) {
    function money(float $amount): string
    {
        return '$' . number_format($amount, 2);
    }
}