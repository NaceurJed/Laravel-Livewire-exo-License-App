<div>
    <h2 class="text-secondary">Your license is currently for
        <strong>{{ pluralize($teamSize, 'person', 'people') }}</strong>
    </h2>
    {{-- wire:model="teamSize" il va pendre ici la valeur de l'input pour la mettre dans la variable $teamSize dans le fichier License.php --}}
    <input type="range" wire:model="teamSize" min="1" max="10" value="2" class="form-range">
    <h3>Amount: {{ money($amount) }}</h3>
    <div>
